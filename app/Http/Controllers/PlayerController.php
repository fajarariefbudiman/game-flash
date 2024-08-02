<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Models\Game;
use App\Models\Player;
use App\Models\PlayerGameInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlayerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
    $gameName = $request->query('game', 'eFootball');

    $player = DB::table('players')->where('id', $id)->first();

    if (!$player) {
        abort(404, 'Player not found.');
    }

    $gameModel = DB::table('games')->where('name', $gameName)->first();

    if (!$gameModel) {
        // dd($gameModel);
        abort(404, 'Game not found.');
    }

    $playerGameInfo = DB::table('player_game_infos')
                        ->where('player_id', $player->id)
                        ->where('game_id', $gameModel->id)
                        ->first();

    if (!$playerGameInfo) {
        // abort(404, 'Game information not found.');
        $playerGameInfo = (object)[
            'player_id' => $player->id,
            'game_id' => $gameModel->id,
            'console' => null,
            'position' => null,
            'kit_number' => null,
            'gamertag' => null
        ];
        // dd($playerGameInfo);
    }

    return view('auth.edit-player', [
        'playerGameInfo' => $playerGameInfo,
        'gameName' => $gameName
    ]);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlayerRequest $request, $id)
    {
        //
        $validated = $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'birth_date' => 'nullable|date',
        'phone_number' => 'numeric',
        'nationality' => 'required|string',
        'community' => 'required|string'
    ]);

    try {
        DB::beginTransaction();

        if (!empty($validated['phone_number'])) {
            $validated['phone_number'] = $this->parsePhoneNumber($validated['phone_number']);
        }

        $player = Player::findOrFail($id);

        $player->update($validated);

        // dd($validated);
        DB::commit();
        return redirect('dashboard')->with('success', 'Player Updated Successfully');
    } catch (\Exception $e) {
        DB::rollBack();

        return redirect()->back()->withErrors([
            'Errors' => 'An error occurred while updating the player: ' . $e->getMessage()
        ]);
    }
    }

    public function updateProfileGame(Request $request, $game)
    {
        $request->validate([
            'gamertag' => ['required','string'],
            'kit_number' => ['nullable','numeric'],
            'position' => ['nullable','string'],
            'console' => 'required'
        ]);

        $player = Auth::user();
        $gameModel = Game::where('name', $game)->firstOrFail();

        $playerGameInfo = PlayerGameInfo::updateOrCreate(
            [
                'player_id' => $player->id,
                'game_id' => $gameModel->id
            ],
            [
                'gamertag' => $request->gamertag,
                'kit_number' => $request->kit_number ?? null,
                'position' => $request->position ?? null,
                'console' => $request->console,
            ]
        );

        return redirect('dashboard')->with('success','Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
    }
}
