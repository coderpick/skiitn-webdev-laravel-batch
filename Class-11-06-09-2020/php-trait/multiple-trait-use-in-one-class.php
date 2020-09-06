<?php
trait Subscriber{
    public function subscriberLogin() {
        echo "You\'re Logged in as Subscriber". '<br/>';
    }
}
 
trait Contributor{
    public function contributorLogin() {
        echo "You're Logged in as Contributor". '<br/>';
    }
 
}
 
trait Author{
    public function AuthorLogin() {
        echo "You're Logged in as Author." . '<br/>';
    }
}
 
trait Administrator{
    public function AdministratorLogin(){
        echo "You're Logged in as Administrator" . '<br/>';
    }
}
 
class Member{
    use Subscriber, Contributor, Author, Administrator;
    public function run() {
        $this->subscriberLogin();
        $this->contributorLogin();
        $this->AuthorLogin();
        $this->AdministratorLogin();
        echo 'Members Login...done' . '<br/>';
    }
}
 
$authentication = new Member();
 
$authentication->run();
 
?>