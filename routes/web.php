<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index',['title' => "Home"]);
});

Route::get("/associations-ranking",[AssociationController::class,'index'])->name('association-rankings');
Route::get('/{id}/overviewAssociation',[AssociationController::class,'show'])->name('overview-associations');
Route::get("/teams-ranking",[TeamController::class,'index'])->name('team.rankings');

Route::get("/players-ranking",function () {
    return view('gf-view.players-rank',['title' => 'Players-Ranking']);
});

// shop (tomorrow)

require __DIR__ . '/auth.php';
