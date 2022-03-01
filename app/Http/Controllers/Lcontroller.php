<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Location;

class Lcontroller extends Controller
{
    public function store(Request $request){

              //  dd($request->all());
              $task=new Location;

              $this->validate($request,[
                'Lname'=>'required',
                'Ldesc'=>'required',
                'NBH'=>'required',
                'filename'=>'required',
              ]);

              $task->LocationName=$request->Lname;
              $task->Description=$request->Ldesc;
              $task->NearbyHotels=$request->NBH;
              $task->Gallery=$request->filename;

              $task->save();

              $data=Location::all();
              // dd($data);
              return view('location')->with('locations',$data);

    }

    public function deleteL($id){
            
           $task=Location::find($id);
           $task->delete();
           return redirect()->back();   

    }


    public function updateview($id){
        $task=Location::find($id);

        return view('updatelocationv')->with('updatedata',$task);

        
    }

    public function updateL(Request $request){
       // dd($request);

       $id->$request->id;
       $task->$request->Lname;
       $task->$request->Ldesc;
       $task->$request->NBH;
       $task->$request->filename;

       $data=Location::find($id);
       $data->Lname=$task;
       $data->Ldesc=$task;
       $data->NBH=$task;
       $data->filename=$task;

       $data->save();

       $datas=Location::all();
       return view('location')->with('locations',$datas);
    }


public function login(){
    return view('location');
}





}
