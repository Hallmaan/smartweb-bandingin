<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    public function profile(Request $r, $user_id){
        // dd($r->all(), $user_id);
        $user = User::findorfail($user_id);

        return view('users.profile.index', ['data' => $user]);
    }

    public function profile_update(Request $r, $user_id){
   
        User::find($user_id)->update(['name'=> $r->nama]);

        return redirect()->route('profile', ['user_id' => Auth::user()->id])->with('message', 'Berhasil mengubah data');
    }

    public function update_password(Request $r, $user_id){

        $r->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find($user_id)->update(['password'=> Hash::make($r->new_password)]);

        return redirect()->route('profile', ['user_id' => Auth::user()->id])->with('message', 'Berhasil mengubah data');
    }
}
