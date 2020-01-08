<?php

trait test {
    public function testTrait() {
        echo "The trait function in action ";
    }
}
class User
{
    protected $name;
    private $email;
    private $role;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->name = $email;
    }
    public function setRole($role)
    {
        $this->name = $role;
    }
    public function givePermission($role){
        if ('normalUser' !== $role and 'superUser' !== $role) {
            echo('Enter the user role in the system');

        }
        $this->role = $role;
        echo("This user is a".$role);
        echo("<br>");
    }


}

class Teacher extends User{
    use test;
    public function welcomeMessage(){
        return "Hello, " .$this -> name. "You are logged in as teacher";
    }

}
$teacher = new Teacher();
$teacher -> setName("Cindy");
$teacher->givePermission('normalUser');
$teacher->testTrait();
echo $teacher -> welcomeMessage();


?>




