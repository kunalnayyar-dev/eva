<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class AdminController extends Controller
{
    public function allusers(){
        $users = User::get();
        return view('admin.users',compact('users'));
    }

    public function allactivities(){
        $activities = Activity::with(['user'])->orderByDesc('created_at')->get();
        return view('admin.activities',compact('activities'));
    }
}
