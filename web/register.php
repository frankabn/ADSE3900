<?php
        function Register(){
            
        if(empty($_POST['username']))
        {
        $this->HandleError("Brukernavn må fylles ut.");
        return false;
        }
        if(empty($_POST['password']))
        {
        $this-HandleError("Passord må fylles ut.");
        return false;
        }
        if(empty($_POST['repPassword']))
        {
        $this-HandleError("Passord må fylles ut.");
        return false;
        }
        if($_POST['password' && 'repPassword']){
            $password!=$repPassword;
            return false;             
        }
        if(empty($_POST['firstName']))
        {
        $this-HandleError("Fornavn må fylles ut.");
        return false;
        }
        if(empty($_POST['lastName']))
        {
        $this-HandleError("Etternavn må fylles ut.");
        return false;
        }
        if(empty($_POST['email']))
        {
        $this-HandleError("E-post må fylles ut.");
        return false;
        }
        if(empty($_POST['telephone']))
        {
        $this-HandleError("telefonnummer må fylles ut.");
        return false;
        }
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
        $repPassword=trim($_POST['repPassword']);
        $firstName=trim($_POST['firstName']);
        $lastName=trim($_POST['lastName']);
        $email=trim($_POST['email']);
        $telephone=trim($_POST['telephone']);
        if(!$this->CheckUsersDB($username,$password,$firstName, $lastName, $email, $telephone))
        {
        return false;
        }
        session_start();
        
        return true;
        }
        
 ?>
