<?php namespace App\Controllers;
use CodeIgniter\Controller;
 
class Test extends Controller
{

  /*  public function index()
    {
        //die("Hi");
       
        return view('weclome_test', );
    }
    */
    public function index() { 
        //echo "This is default function."; 
       // $this->load->database();
       
        $db = \Config\Database::connect();
      //  print_r($db);
        
      $query= $db->query('select * from student');
        
        //$query= $db->query('select  username from users');
        
        //2-$query= $db->query('select  username from users');
       // $query= $db->query('select  username,password from users');
        $result = $query->getResult();
        echo "<pre>";
        print_r($result);
        echo "</pre>";

       
     } 

     public function login()
	{
    $db = \Config\Database::connect();
   
    //Insert....
		if($this->request->getVar('login'))
		{
   //echo "alllllllllla2314214214 <br>";
      $e=$this->request->getVar('email');
			$p= $this->request->getVar('pass');
     // echo $e . "<br>";
      //echo $p . "<br>";
      $e = stripslashes($e);
      $p = stripslashes($p);
      $p = md5($p);

      $query = "Insert into student( email, password) values( '$e', '$p')";// die($query) ;

      if ($db->query($query)) {
        echo "<h3>Data has been inserted</h3>";
      } else {
        echo "<h3>Failed to insert data</h3>";
      }
   
    
      
  
    }
    //Delete
    if($this->request->getVar('delete'))
    {
      
      $id=$this->request->getVar('id');
      //$query = "Delete from student WHERE id=95"; //die($query) ;
      $query = "Delete from student WHERE id='$id'"; //die($query) ;
      if ($db->query($query)) {
        echo "<h3>Data has been deleted</h3>";
      } else {
        echo "<h3>Failed to delete data</h3>";
      }
    }
    ///Updateee
    if($this->request->getVar('update'))
    {
      
      $id=$this->request->getVar('id');
      $e=$this->request->getVar('email');
			$p= $this->request->getVar('pass');
      //$query = "Delete from student WHERE id=95"; //die($query) ;
      $query = "Update  student SET email='$e' ,password='$p' WHERE id='$id'"; //die($query) ;
      if ($db->query($query)) {
        echo "<h3>Data has been Updated</h3>";
      } else {
        echo "<h3>Failed to Update data</h3>";
      }
    }



    //Read.....

    if($this->request->getVar('read'))
    {
    
      
    $query= $db->query('select * from student');
        
    $result = $query->getResult();
    
     
      
    echo "<pre style='color:blue';>";
    print_r($result);
    echo "</pre>";
    
    }

    return view('login');
     

    /*

   $db = \Config\Database::connect();
		$data;
    $e=$this->request->getVar('email');
    //$email = $this->request->getVar('email');
    $p= $this->request->getVar('pass');
    echo $e;
    echo $p;




    $que=$this->$db->query("insert INTO student (email,password) VALUES ('".$e."','$p')");
    $row = $que->num_rows();
    print_r($row);

    
if(isset($login))
		{
echo "dsdsadsa";
    }






      //$this->load->view('login',@$data);		
        //$this->load->view('login',);
          // $this->load->view('login')



            $sql = "INSERT INTO student (email, password) VALUES (".$db->escape($e).", ".$db->escape($p).")";
   $que=$this->$db->query($sql);



    */




      
  
       
     
    
    }
		
    public function admin()
    {
      return view('admin');
    }
        
		
	

     public function viewlogin() { 
        echo "This is view login  function."; 
     // $this->load->view('login');	
     } 

 
}

?>