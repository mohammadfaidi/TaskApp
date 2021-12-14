<?php

namespace App\Controllers;

class Login extends BaseController{


public function new(){
    return view('login/new');
}




public function create()
{
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    
    $model = new \App\Models\UserModel;
    
    $user = $model->where('email', $email)
                  ->first();
                  
    if ($user === null) {
        
        return redirect()->back()
                         ->withInput()
                         ->with('warning', 'User not found');
                         
    } else {
        
        if (password_verify($password, $user->password_hash)) {
            $session = session();
            $session->regenerate();
            $session->set('user_id', $user->id);
            
            return redirect()->to("/")
                             ->with('info', 'Login successful');
          //  echo "Login ok";
            
        } else {
            
            return redirect()->back()
                             ->withInput()
                             ->with('warning', 'Incorrect password');
        }
    }
}


public function delete()
{
    //splash  message in session so we destroy it so it won't appear so we want to fix this by add a new method showlogout message
    session()->destroy();

    return redirect()->to('/login/showLogoutMessage');
}

public function showLogoutMessage()
{
    return redirect()->to('/')
                     ->with('info', 'Logout successful');
}    


}


?>
