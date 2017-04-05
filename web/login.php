<?php
        function Login(){
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
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
        if(!$this->CheckUsersDB($username,$password))
        {
        return false;
        }
        session_start();
        $_Session[$this->GetLoginSessionVar()]=$username;
        return true;
        }
        
        function CheckUsersDB($username,$password)
        {
        if(!$this->DBUsers())
        {
        $this->HandleError("Ingen kontakt med server.");
        return false;
        }
        $username = $this->SanitizeForSQL($username);
        $pwdmd5 = md5($password);
        $qry = "SELECT firstName, email from $this->Users ".
        " WHERE username='$username' AND password='$pwdmd5' ";
        $result = mysql_query($qry,$this->connection);
        if(!$result || mysql_num_rows($result) <=0)
        {
        $this->HandleError("Brukernavn eller passord er feil.");
        return false;
        }
        return true;
        }
 ?>
