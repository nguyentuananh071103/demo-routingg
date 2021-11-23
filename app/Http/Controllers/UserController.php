<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public $usres = array(
        array('name'=>'Minh','age'=>18),
        array('name'=>'Duc','age'=>20),
        array('name'=>'My','age'=>16),
    );

    public function index(){
        $users = $this->usres;
        return view("user.list",compact("users"));
    }

    public function show($id)
    {
        if (isset($this->usres[$id])){
            $user = $this->usres[$id];
            return view("user.detail",compact("user"));
        }else{
            return view("user.detail")->with("error","khong co user nay");
        }

    }

    public function destroy($id)
    {
        array_splice($this->usres,$id,1);
        $users = $this->usres;
        return redirect()->route("users.index");
    }

    public function update($id, Request $request)
    {

    }

    public function showFormCreate()
    {
        return view("user.create");
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
