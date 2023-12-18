<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Home;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function signup(Request $req){
        if($req->isMethod("post")){
            $data = $req->validate([
                "first_name"=>"required|alpha",
                "last_name"=>"required|alpha",
                "email"=>"required",
                "contact"=>"required|string|min:10|max:10",
                "gender"=>"required",
                "password"=>"required",
                "source"=>"required",
                "state"=>"required",
                "city"=>"required",
            ]);
            $data['password'] = bcrypt($data['password']);
            User::create($data);
            return redirect()->route('login');
        }
        return view("register");
    }
   

    // login work

    public function login(Request $req){
        if($req->isMethod("post")){
            $data = $req->validate([
                "email" => "required",
                "password" => "required",
            ]);
            //dd($data);
            if(Auth::attempt($data)){
                return redirect()->route("dashboard")->with("success","Logged in successfully");
            }
            else{
                return redirect()->back()->with("error","email or password may be incorrect please try again");
            }
        }
        //return redirect()->route("dashboard");
        return view("login");
    }

    

    public function logoutUser(){
        Auth::logout();
        return redirect()->route("login");
    }


    public function dashboard(){
        $data['user'] = Home::all();
        return view("home.dashboard",$data);
    }

    public function storeUser(Request $req){
        if($req->isMethod("post")){
            $data = $req->validate([
                "name"=>"required",
                "email"=>"required",
                "contact"=>"required|string|min:10|max:10",
                
            ]);
            Home::create($data);
            return redirect()->route("dashboard")->with("success","New User Added SuccessFully");

        }
        
        return view("home.insertUser");
    }
    public function addUser(){
        $data["user"] = Home::all();
        return view("home.insertUser",$data);
    }

    public function edit(Request $req,$id){
        if($req->isMethod("post")){
            $data = $req->validate([
                "name"=>"required",
                
                "email"=>"required",
                "contact"=>"required|string|min:10|max:10",
               
            ]);
            Home::findOrFail($id)->update($data);
            return redirect()->route("dashboard")->with("success","Successfully updated data");

        }
        $data['home'] =Home::all();
        return view("home.dashboard",$data);
    }
    public function deleteUser(Request $req){
        $id = $req->id;
        $record = Home::findOrFail($id);
        $record->delete();
        return redirect()->back()->with("error","Data deleted permanently");

    }

    public function viewUser($id){
        $data['user'] = Home::findOrFail($id);
        return view("home.viewUser",$data);
    }

    public function search(Request $req){
        $search = $req->search;
        $data['user'] = Home::where("name","like","%$search%")->orWhere("email","like","%$search%")->orWhere("contact",$search)->get();
        $data['search'] = $search;
        return view("home.dashboard",$data);
    }
}
