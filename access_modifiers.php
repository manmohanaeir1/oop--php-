<?php
class User
{

    public $username;
    private $useremail;

    public function __construct($username, $useremail)
    {
        $this->username = $username;
        $this->useremail = $useremail;

    }

    

    public function addfriend()
    {
        echo "$this->useremail .<br>"; 
        echo "Friend is added!!";
    }
}


$anotherUser = new User('Sarad', 'Bist@sarad');


$anotherUser->addfriend();
echo '<br>';

 
  echo '<br>';



print_r(get_class_vars('User'));
print_r(get_class_methods('User'));
