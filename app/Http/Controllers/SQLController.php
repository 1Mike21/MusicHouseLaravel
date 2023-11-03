<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SQLController extends Controller
{
    public function index() {
        $users = DB::table('users')->get();
        dd($users);
    }
}
