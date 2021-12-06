<?php

namespace App\Controllers;

class Tasks extends BaseController
{
    public function index()
    {

       //echo "hello Tasks";
       //data include assicative array 
       /*
       $data = [
        ['id'=>1,'description'=>'First Task'],
        ['id'=>2,'description'=>'Second Task'],
       ];
       */


      $model  = new \App\Models\TaskModel;
      $data=$model->findAll();
    
      //dd($data);
      return view("Tasks/index",['tasks'=>$data]);

       //Get Data from Database instead array 




        //data include keyy = > tasks and values data array 

      // return view("Tasks/index",['tasks'=>$data]);
    }
    public function show($id){
      $model  = new \App\Models\TaskModel;
      $data=$model->find($id);
      
      return view("Tasks/show",['tasks'=>$data]);
    }



    public function new(){
      return view("Tasks/new",[
        'tasks' => [
          'description' => ''
        ]
      ]);
    }

    public function create(){
      $model  = new \App\Models\TaskModel;
      //need to bring data from submited form form new from post methodd 
      //id we don't need model underrsatand thats id autom increameant 
      
      $result=$model->insert([
        'description'=>$this->request->getPost("description"),
      ]);

      if($result===false){
      //  dd($model->errors());
      //session will create automatically (passed the error thru session (one called /value exist for one request or //one time eroor))
      //error called flash messages in session
      return redirect()->back()->with('errors',$model->errors())->with('warning','invalid Data')->withInput();
      }else{
        //$model->insertID
        //want to direct to show page 
        //dd($result);
        return redirect()->to("/tasks/show/$result")->with('info','Task Created successfully');

        
      }
     

    }



    
    public function edit($id){
      $model  = new \App\Models\TaskModel;
      $data=$model->find($id);
      
      return view("Tasks/edit",['tasks'=>$data]);
    }

    public function update($id){
      $model  = new \App\Models\TaskModel;
     $result= $model->update($id,[
        'description' => $this->request->getPost('description'),

      ]

    );

    if($result){


      return redirect()->to("/tasks/show/$id")->with('info','Task updated Sucessfully ');
    }
    else{
      return redirect()->back()->with('errors',$model->errors())->with('warning','invalid data')->withInput();

    }
    
  
  
  }
    
}


?>
