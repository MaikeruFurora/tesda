<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdministratorController extends Controller
{
    public function dashboard(){
        return view('administrator/dashboard');
    }
    public function officer(){
        return view('administrator/officer/officer');
    }
    public function OfficerStore(Request $request){
        return User::updateOrCreate(['id'=>$request->id],[
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'user_type' => 'officer',
            'password' => Hash::make('password'),
        ]);
    }
    public function OfficerEdit(User $user){
        return response()->json($user);
    }
    public function OfficerDestroy(User $user){
        return $user->delete();
    }
    public function OfficerList(){
        return response()->json(User::where('user_type','officer')->get());
    }
}
