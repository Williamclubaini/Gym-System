<?php 

trait Username
{

    public function username()
    {
        $username = htmlspecialchars($_POST['name']);

        if($username == "" || $username == null)
        {
            array_push($this->errors, 'username is required');
        }
        else if(!preg_match('/^[a-zA-Z\s]+$/', $username))
        {
          array_push($this->errors, 'username should contain letters only');
        }
        else if(strlen($username) < 4)
        {
          array_push($this->errors, 'username should contain more than 4 characters');
        }
        else
        {
          array_push($this->errors, NULL);
          array_push($this->data, $username);
        }
    }
}

trait Email
{
	public function email()
	{
       $email = htmlspecialchars($_POST['email']);

       if($email == "" || $email == null)
       {
         array_push($this->errors, 'email is required');
       }
       else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
       {
         array_push($this->errors, 'invalid email');
       }
       else
       {
         array_push($this->errors, NULL);
         array_push($this->data, $email);
       }
}
}

trait Contact 
{
  public function contact()
  {
    $contact = htmlspecialchars($_POST['contact']);

    if(!preg_match('/^[0-9]+$/i', $contact)) {

      array_push($this->errors, 'invalid contact');
    
    }
    else
    {
      array_push($this->errors, NULL);
      array_push($this->data, $contact);
    }
  }
}

trait Occupation 
{
  public function occupation()
  {
    $occupation = htmlspecialchars($_POST['occupation']);

    if($occupation == "" || $occupation == NULL) {

      array_push($this->errors, 'Occupation is required');
    }
    else if(!preg_match('/^[a-zA-Z\s]+$/', $occupation))
    {
        array_push($this->errors, 'Occupation should contain letters only');
    }
    else
    {
      array_push($this->errors, NULL);
      array_push($this->data, $occupation);
    }
  }
}

trait Location 
{
  public function location()
  {
    $location = htmlspecialchars($_POST['location']);

    if($location == "" || $location == NULL) {

      array_push($this->errors, 'Location is required');
    }
    else if(preg_match('/^[0-9]+$/i', $location))
    {
        array_push($this->errors, 'Invalid Location');
    }
    else if(strlen($location) < 2)
    {
        array_push($this->errors, 'location must contain 4 or more characters');
    }
    else
    {
      array_push($this->errors, NULL);
      array_push($this->data, $location);
    }
  }
}

trait Membertype 
{
  public function membertype()
  {
    $membertype = htmlspecialchars($_POST['membertype']);

    if($membertype == "" || $membertype == NULL) {

      array_push($this->errors, 'We need to know your level');
    }
     else if(!preg_match('/^[a-zA-Z\s]+$/', $membertype))
      {
        array_push($this->errors, 'Member type should contain letters');
      }
    else
    {
      array_push($this->errors, NULL);
      array_push($this->data, $membertype);
    }
  }
}

trait gymsession
{
	public function gym_session()
	{
      $session = htmlspecialchars($_POST['session']);

      if($session =="-- Select --" || $session == null)
      {
        array_push($this->errors, 'We need to know your session duration');
      }
      else
      {
        array_push($this->errors, NULL);
        array_push($this->data, $session);
      }
    }
}

trait payment_m
{
	public function payment_method()
	{
      $pmethod = htmlspecialchars($_POST['pmethod']);

      if($pmethod =="" || $pmethod == null)
      {

        array_push($this->errors, 'Choose a payment method');
      }
      else
      {

       array_push($this->errors, NULL);
       array_push($this->data, $pmethod);
      }
    }
}

trait short_message
{
  public function shortmessage()
  {
      $smsg = htmlspecialchars($_POST['smsg']);

       array_push($this->data, $smsg);
      
    }
}

trait messagefield
{
  public function message()
  {
      $msg = htmlspecialchars($_POST['msg']);

       array_push($this->data, $msg);
      
    }
}

trait timeAM
{
  public function startingtimeam()
  {
      $stam = htmlspecialchars($_POST['stam']);

       array_push($this->data, $stam);
      
    }
}

trait endtimeAM
{
  public function endingtimeam()
  {
      $etam = htmlspecialchars($_POST['etam']);

      
       array_push($this->data, $etam);
      
    }
}

trait timePM
{
  public function startingtimepm()
  {
      $stpm = htmlspecialchars($_POST['stpm']);

       array_push($this->data, $stpm);
      
    }
}

trait endtimePM
{
  public function endingtimepm()
  {
      $etpm = htmlspecialchars($_POST['etpm']);

       array_push($this->data, $etpm);
      
    }
}

trait Password
{
	public function password()
	{
      $password = htmlspecialchars($_POST['password']);

      if ($password == "" || $password == null)
      {
         array_push($this->errors, 'password is required');
      }
      else if(!preg_match('/[A-Za-z]/', $password))
      {
       array_push($this->errors, 'at least provide one uppercase letter or lowercase letter');
      }
      else if(strlen($password) < 8)
      {
        array_push($this->errors, 'at least provide more than 8 characters');
      }
      else
      {
        array_push($this->errors, NULL);
        $password = md5($password);
        array_push($this->data, $password);
      }
    }
}

?>