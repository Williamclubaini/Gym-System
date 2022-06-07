<?php
include 'fields_validations.php';
include 'use_validations.php';
class Post extends Validations{

    public function register()
    {
        if(isset($_POST['register']))
        {

          $this->username();
          $this->email();
          $this->contact();
          $this->occupation();
          $this->location();
          $this->membertype();
          $this->password();

        if(count($this->data) == 7)
        {
          array_push($this->data, 2);
          $this->match($this->data, $this->register);
        }
        else 
        { 
          return $this->errors;
        }

        }
    }

    public function login()
    {
      if (isset($_POST['login']))
      {  
             $this->email();
             $this->password();

         if (count($this->data) == 2)
         {    
             $this->access($this->data);
         }
         else
         {
            return $this->errors;
         }
      }
    }

     public function adminlogin()
    {
      if (isset($_POST['admin']))
      {  
             $this->email();
             $this->password();

         if (count($this->data) == 2)
         {    
             $data = $this->data;
             $email = $data[0];

             if($email == 'admin@gmail.com')
             {
               $this->access($this->data);
             }

             echo '<script>alert("Email You have provided is incorrect, Please enquire correct credintials from the certified person to access the account.")</script>';
           
               
             
         }
         else
         {
            return $this->errors;
         }
      }
    }

  

    public function forgot_password()
    {
      if (isset($_POST['forgot_password']))
      {
           $this->email();
           $this->password();

           if (count($this->data) == 2) {

             $this->reset($this->data, $this->update);
           }
           else
           {
             return $this->errors;
           }
      }
    }

    public function payment()
    {
      if (isset($_POST['send'])) {
         
         $this->email();
         $this->gym_session();
         $this->payment_method();

         if (count($this->data) == 3)
         {
            
            $this->insert($this->data, $this->payment);
            echo '<script>alert("Your payment has been received")</script>';
         }
         else
         {
             return $this->errors;
         }
      }
    }

    public function updates()
    {
      if (isset($_POST['updates'])) {

        $this->shortmessage();
        $this->message();
        $this->startingtimeam();
        $this->endingtimeam();
        $this->startingtimepm();
        $this->endingtimepm();

        if (count($this->data) == 6 ) {
          
          $data = $this->data;
          
          $i = $data[0];
          $m = $data[1];
          $stam = $data[2];
          $etam = $data[3];
          $stpm = $data[4];
          $etpm = $data[5];

          $this->updateusers($i, $m, $stam, $etam, $stpm, $etpm, $this->updateuser);
          echo '<script>alert("Information has been successfully delivered")</script>';

        }
        

      }
    }

    
    
}

$post = new Post();
$error1 = $post->register();
$error2 = $post->login();
$error3 = $post->forgot_password();
$error4 = $post->payment();
$error5 = $post->updates();
$error6 = $post->adminlogin();
?>