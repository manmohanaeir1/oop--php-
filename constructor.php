<?php
class User
{

    public $username = 'Manmohan';
    public $useremail = 'man@gmail.com';

    public function __construct()
    {
        $this->username = 'Shyam';
        $this->useremail = 'shyam@er.434';

    }

    public function __another($username, $useremail)
    {
        $this->username = $username;
        $this->useremail = $useremail;
    }

    public function addfriend()
    {
        echo "$this->username";
        echo "Friend is added!!";
    }
}

$userOne = new User();
$userTwo = new User();

$antherUser = new User('Sarad', 'Bist@sarad');

echo 'name :' . $userOne->username . '<br>';
echo 'email :'  . $userOne->useremail . '<br>';
echo 'add friend :' . $userOne->addfriend() . '<br>';
 echo '<br>';

 echo 'name :' . $antherUser->username . '<br>';
 echo 'email :'  . $antherUser->useremail . '<br>';
  echo '<br>';




$userTwo->username = 'Ram';
$userTwo->useremail = 'ram@gamil.com';

echo 'name :' . $userTwo->username . '<br>';
echo 'email :'  . $userTwo->useremail . '<br>';
echo 'add friend :' . $userTwo->addfriend() . '<br>';


print_r(get_class_vars('User'));
print_r(get_class_methods('User'));
