<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ninjas;

class NinjasController extends Controller
{
    public function index() {
        $ninjas=ninjas::orderBy('name','Asc')->get();
        return ['success'=>true, 'data'=>$ninjas];
    } 

    public function store(Request $request){
       $tambah = new ninjas;
       $tambah->name= $request->name;
       $tambah->belt= $request->belt;
       $tambah->special_power= $request->special_power;
       $tambah->save();
       return ['success'=>true,'data'=>$tambah];

    }  
       
    public function update (Request $request, $id){
        $data = ninjas::find($id);
        $data->name=$request->name;
        $data->belt=$request->belt;
        $data->special_power=$request->special_power;
        foreach($data as $n =>$dt){
            $data['name']= $dt;
        }
        $data->save();
        return['success'=>true,'data'=>$data];


    }

    public function destroy($id){
        $ninjas=ninjas::where('id', $id)->delete();
        return ['success'=>true, 'data'=>$ninjas];
    }
}