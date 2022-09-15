
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
        echo "$this->username";
        echo "Friend is added!!";
    }

    function getEmial()
    {
        return $this->useremail;
    }

    function setEmail($useremail){
        if(strpos($useremail, '@') >-1){
            $this->useremail = $useremail;
        }
    }
}


class Adminuser extends User{

    public $level;

    public function __construct($username, $useremail, $level){
        $this->level = $level;
        parent::__construct($username, $useremail);

    }
}

$anotherUser = new User('Manmohan', 'manmoahan@gmail.com');
$anotherUser1 = new Adminuser('sarad', 'sarad@gmail.com', 1);



echo $anotherUser1->username .'<br>';
echo $anotherUser1->getEmial() .'<br>';
echo $anotherUser1->level .'<br>';


 

print_r(get_class_vars('User'));
print_r(get_class_methods('User'));
