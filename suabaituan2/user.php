<?php
class User{
    public $username;
    public $password;
    public $firstname;
    public $lastname;
    public function __construct($username, $password, $firstName, $lastName) {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT); 
        $this->firstname = $firstName;
        $this->lastname = $lastName;
    }
    public function getFullname(){
        return $this->firstname." ".$this->lastname;
    }
    public function getUsername(){
        return $this->username;
    }
    public function login($username, $password){
        $hash = password_hash('12345', PASSWORD_DEFAULT);
        if($username == "admin" && password_verify ( $password , $hash ) ){
            return true;
        }
    }
}
class Student extends User{
    public $gpa;
    public function __construct($username, $password, $firstName, $lastName,$gpa){
        parent::__construct($username, $password, $firstName, $lastName);
        $this->gpa = $gpa;
    }
    public function classify(){
        if($this->gpa < 5){
            return "Yeu";
        }
        elseif($this->gpa < 7){
            return "TB";
        }
        elseif($this->gpa < 8){
            return "Kha";
        }
        else{
            return "Gioi";
        }
    }
}