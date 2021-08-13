<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class TeamController extends Controller
{
    public function teammembers(Request $request)
    {
        return view('team.team-members');
    }
}
