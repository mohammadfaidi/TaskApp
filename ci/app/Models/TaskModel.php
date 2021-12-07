<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
 


protected $table = 'task'; 

protected $allowedFields = ['description'];

protected $returnType = 'App\Entities\Task';

protected $validationRules = ['description'=>'required'];
   // ...
   //want to change the default message error when you click on empty field so will display (the description is filed is requyried ) this message is array list 
protected $validationMessages = ['description'=>[
   'required'=>'please enter a description',
]]; 

}
