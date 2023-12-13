<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\data;

class form extends Controller
{
    public function form(){
        $url=url('/form');
        $title = "Registration Form";
        $data = compact ('url' ,'title');
        return view('form')->with($data);
    }

    public function reg(Request $request){
       print_r($request->all());
       $request->validate([
        'name' =>'required',
        'email' =>'required',
        'password' =>'required'
       ]);

       $students = new product ();
       $students-> name = $request['name'];
       $students-> email = $request['email'];
       $students-> password = $request['password'];
       $students->save();
       return redirect('view');
    }
    public function view(){
        $stddata= product::all();
        $data = compact('stddata');
        return view('view')->with($data);
    }

    public function delete($id){
        $delete = product::find($id)->delete();
        return redirect('view');
    }

    public function edit($id){
        $edit = product::find($id);
        // dd($edit);
        $url=url('/edit').$id;
        $title = "Update Form";
        $records = compact ('edit' , 'url' ,'title');
        return view('edit')->with($records);
    }

    public function update($id , Request $request){
        $edit = product::find($id);
        $edit->name = $request['name'];
        $edit->email = $request['email'];
        $edit->password = $request['password'];
        $edit->save();
        return redirect('view');
     }

     public function destroy($id){
        $edit = product::where('id' , $id)->first();
        $edit->delete();
        return back();

    }

}
