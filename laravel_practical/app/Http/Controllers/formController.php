<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class formController extends Controller
{
    public function registration(){
        $url = url('/form');
        $title = "Registration Form";
        $data = compact('url', 'title');
        return view('form')->with($data);
    }
    public function data(Request $request){
        print_r($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required'
        ]);
       
        $user = new Form();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
        return redirect('user/view');
    }
    public function user_view(){
        $userData = Form::all();
        $data = compact('userData');
        return view('user_view')->with($data);
    }
    public function user_dlt($id){
        $find = Form::find($id)->delete();
        return redirect('user/view');
        
    }
    public function user_edit($id){
        $data = Form::find($id);
        $url = url('/user/update')."/". $id;
        $title = "Update Information form";
        $records2 = compact('data', 'url', 'title');
        return view('update')->with($records2);
    }
    public function user_update($id, Request $request){ 
        $data = Form::find($id);
        $data->name = $request['name'];
        $data->email = $request['email'];
        $data->password = $request['password'];
        $data->save();
        return redirect('user/view');
    }
  
}
