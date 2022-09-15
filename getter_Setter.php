
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


$anotherUser = new User('Manmohan', 'manmoahan@gmail.com');


echo"after set another  email value:";
echo $anotherUser->setEmail('man21@gmail.com');
echo '<br>';


echo $anotherUser->getEmial();
echo '<br>';

 

print_r(get_class_vars('User'));
print_r(get_class_methods('User'));
