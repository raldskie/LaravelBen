<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;

/**
* @return View
*/
class TeamController extends Controller
{
    public function index() : View {

        // $team = auth()->user()->team()->with('members')->first();

        $name = auth()->user()->name;
        $team_name = auth()->user()->team;

        $team_id = auth()->user()->team_id;
        $members = DB::select('select * from users where team_id='.$team_id);
        
        return view('team.index', [
            'name' => $name,
            'team_name' => $team_name,
            'members' => $members
        ]);
    }
}
