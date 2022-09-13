<?php
class User{

    public $username= 'Manmohan';
    public $useremail= 'man@gmail.com';
}

$userOne = new User();
echo 'name :' . $userOne->username;
?>