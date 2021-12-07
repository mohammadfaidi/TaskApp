<?php

namespace App\Controllers;
use \App\Entities\Task;
class Tasks extends BaseController
{
  private $model;
	
	public function __construct()
	{
        $this->model = new \App\Models\TaskModel;
	}
	

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


     // $model  = new \App\Models\TaskModel;
      $data=$this->model->findAll();
    
      //dd($data);
      return view("Tasks/index",['tasks'=>$data]);

       //Get Data from Database instead array 




        //data include keyy = > tasks and values data array 

      // return view("Tasks/index",['tasks'=>$data]);
    }
    public function show($id){
     // $model  = new \App\Models\TaskModel;
      
     $data =$this->getTaskOr404($id);
/*
      $data=$this->model->find($id);

      if($data === null){
        throw new \CodeIgniter\Exceptions\PageNotFoundException("Task with $id not found");
      }
      */
      return view("Tasks/show",['tasks'=>$data]);
    }



    public function new(){

      
       // $task = new \App\Entities\Task;
		 $task = new Task;
		return view('Tasks/new', ['tasks' => $task]);
	


      /*
      return view("Tasks/new",[
        'tasks' => [
          'description' => ''
        ]
      ]);
    
    */
    
    
    }

    public function create(){
     // $model  = new \App\Models\TaskModel;
      //need to bring data from submited form form new from post methodd 
      //id we don't need model underrsatand thats id autom increameant 
      
      


      $task = new Task($this->request->getPost() );

      /*
      $result=$model->insert([
        'description'=>$this->request->getPost("description"),
      ]);
*/
      #$result=$model->insert($task);

      if($this->model->insert($task)){
        return redirect()->to("/tasks/show/{$this->model->insertID}")->with('info','Task Created successfully');


      }else{
        return redirect()->back()->with('errors',$this->model->errors())->with('warning','invalid Data')->withInput();

      }
      /*
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
      */
     

    }



    
    public function edit($id){
     // $model  = new \App\Models\TaskModel;
      //$data=$this->model->find($id);
      $data =$this->getTaskOr404($id);
      return view("Tasks/edit",['tasks'=>$data]);
    }

    public function update($id){
      //$model  = new \App\Models\TaskModel;

      //instead using associative array we want to using entity 
     // $task = $this->model->find($id);
     $task =$this->getTaskOr404($id);
      $task->fill($this->request->getPost());

     // $task->save($task);

     // I HAVE EROOR TO UPDATE DEFAULT ONE TELL ME THERE IS NO DATA TO SOLVE IT WE WANT TO USE HASCHANGES
      if(! $task->hasChanged()){
//if there is nothing change will give warning and make it redirect to back 
        return redirect()->back()->with('warning','Nothing to update')->withInput();


      }


      if($this->model->save($task)){
        return redirect()->to("/tasks/show/$id")->with('info','Task updated Sucessfully ');

      }
      else{
        return redirect()->back()->with('errors',$this->model->errors())->with('warning','invalid data')->withInput();


      }
      //withInput -> about prevous input used with odd function 
      //save method used to insert if you like and detect if you a have a new or existing one save return boolean value
      /*
     $result= $model->update($id,[
        'description' => $this->request->getPost('description'),
]);
    */

    /*
    if($result){


      return redirect()->to("/tasks/show/$id")->with('info','Task updated Sucessfully ');
    }
    else{
      return redirect()->back()->with('errors',$model->errors())->with('warning','invalid data')->withInput();

    }
    
  */
  
  }
  public function delete($id){
    $tasks = $this->getTaskOr404($id);

    if ($this->request->getMethod() === 'post') {
			$this->model->delete($id);
      return redirect()->to('/tasks')
                       ->with('info', 'Task deleted');
}
    return view("/tasks/delete",[
      'tasks' => $tasks
    ]);
  }

  public function getTaskOr404($id){
    $data=$this->model->find($id);

      if($data === null){
        throw new \CodeIgniter\Exceptions\PageNotFoundException("Task with $id not found");
      }

      return $data;
  }
    
}


?>
