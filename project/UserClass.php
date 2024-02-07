<?php
class User
{
   public $userid;
   public $username;
   public $firstname;
   public $lastname;
   public $password;
   public $email;
   public $birthday;
   public $userage;
   public $gender;
   public $picuser;

   //public function __construct($username,$firstname,$lastname,$password, $email,$birthday,$userage,$Gender)
   // {
   //   $this->username=$username;
   //   $this->firstname=$firstname;
   //   $this->lastname=$lastname;
    //  $this->email=$email;
    //  $this->birthday=$birthday;
    //  $this->password=$password;
    //  $this->userage=$userage;
    //  $this->gender=$gender;
   // }
    public function getUsername()
    {
        return $this->username;
    }
    public function getFirstname()
    {
      return $this->firstname;
    }
    public function getLastname()
    {
      return $this->lastname;
    }
    public function getPassword()
    {
      return $this->password;
    }
    public function getEmail()
    {
      return $this->email;
    }
    public function getBirthday()
    {
      return $this->birthday;
    }
    public function getUserage()
    {
      return $this->userage;
    }
    public function getGender()
    {
      return $this->gender;
    }
    public function setUsername($username)
    {
      $this->username = $username;
    }
    public function setFirstname($firstname)
    {
      $this->firstname=$firstname;
    }
    public function setLastname($lastname)
    {
      $this->lastname=$lastname;
    }
    public function setPassword($password)
    {
      $this->password=$password;
    }
    public function setEmail($email)
    {
      $this->email=$email;
    }
    public function setBirthday($birthday)
    {
      $this->birthday=$birthday;
    }
    public function setUserage($userage)
    {
      $this->userage=$userage;
    }
    public function setGender($gender)
    {
      $this->gender=$gender;
    }
}
?>