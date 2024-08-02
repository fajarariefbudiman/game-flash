<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        try {
            $searchColumn = ['id','name','owner','stadium','level'];
        // $model = [''];
        // $teams = DB::table('teams')->paginate(5);
        $teams = $this->get_data_for_table(Team::query(),$searchColumn,$request);
        $id = Team::select('id')->distinct()->get();
        $name = Team::select('name')->distinct()->get();
        $owner = Team::select('owner')->distinct()->get();
        return view('gf-view.teams-rank',[
            'title' => 'Teams-Rangking',
            // 'teams' => $teams,
            'id' => $id,
            'name' => $name,
            'owner' => $owner,
            'teams' => $teams
        ]);
        } catch (\Throwable $th) {
            dd($th);
        }
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
    public function store(StoreTeamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
