<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Award;
use App\Models\Game;
use App\Models\Team;

class BaseController extends Controller
{
     //
    public function home()
    {
        return view('home', [
            'title' => 'RITM',
            'games' => Game::latest()->get()->take(3),
        ]);
    }
    public function award()
    {
        return view('awards', [
            'title' => 'RITM - Awards',
            'awards' => Award::all(),
        ]);
    }
    public function game(Request $request)
    {
        $search = $request->input('search');
        return view('game', [
            'title' => 'RITM - Games',
            'games' => Game::where('title', 'like', '%'.$search.'%')->latest()->get(),
        ]);
    }
    public function game_detail($slug)
    {
        $game = Game::where('slug', $slug)->first();
        return view('game_detail', [
            'title' => "RITM - $game->title",
            'game' => $game
        ]);
    }
    public function team()
    {
        return view('teams', [
            'title' => 'RITM - Teams',
            'teams' => Team::all(),
        ]);
    }
}
