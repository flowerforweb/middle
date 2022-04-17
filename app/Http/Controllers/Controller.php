<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\TeacherModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }


    public function dash(){
        switch(Auth::user()->type){
            case 'teacher' :
                return view("authenticated.teacher.dash");
            break;
            case 'studant' :
                return view("authenticated.studant.dash");
            break;
            case 'admin' :
                return view("authenticated.admin.dash");
            break;
        }
    }


    public function addTeacher(){
        return view('authenticated.admin.addTeacher');
    }

    public function createTeacher(Request $request){

        if(User::where('email' ,'=', $request->input('email'))->count() > 0){
            return back()->withErrors('this teacher is already created');
        }

        $user = new User;
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->type = "teacher";
        $user->save();

        $teacher = new TeacherModel;
        $teacher->user_id = $user->id;
        $teacher->grade = $request->input('grade');
        $teacher->save();


        return Redirect::to(route('dashboard'));
    }
}
