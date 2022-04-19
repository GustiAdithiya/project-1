<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function index(){
        $data = Mitra::all();
        return view('datamitra',compact('data'));
    }

    public function tambahmitra(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        Mitra::create($request->all(),);
        return redirect()->route('mitra');
    }

    public function tampilkandata($id){
        $data = Mitra::find($id);
        // dd($data);
        return view('tampildata',compact('data'));
    }

    public function updatedata(Request $request,$id){
        $data = Mitra::find($id);
        $data -> update($request->all());
        return redirect()->route('mitra');
    }

    public function delete($id){
        $data = Mitra::find($id);
        $data->delete();
        return redirect()->route('mitra');
    }

}
