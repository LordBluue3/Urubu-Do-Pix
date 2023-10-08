<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{
    public function update()
    {
        $users = User::all();
        $admin = Admin::find(1);

        foreach($users as $user){
            $user->money = 0;
            $user->save();
        }

        $admin->money = 0;
        $admin->save();

        return redirect()->back();

    }
    public function delete($id){
        $user = User::find($id);
        if($user){
            $user->delete();
        }
        return redirect()->back();
    }
}
