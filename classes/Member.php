<?php

class Member {

    private int $idMember;

    private string $pseudo;
    private string $password;
    private string $email;
    // private string $role = membre;
    private DateTime $registrationDate;

    private static int $nbMember = 0;

    public function __construct(string $pseudo, string $password, string $email) {
        self::$nbMember++;
        $this->idMember = self::$nbMember;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->email = $email;
        // $this->role = $role;
    }

    //===================== ID Member =====================// 
    
    public function getIdMember() : int
    {
        return $this->idMember;
    }
    
    public function setIdMember(int $idMember)
    {
        $this->idMember = $idMember;
        
        return $this;
    }

    //===================== Pseudo =====================// 
    
    public function getPseudo() : string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;
        
        return $this;
    }

    //===================== Password =====================// 
    
    public function getPassword() : string
    {
        return $this->password;
    }
    
    public function setPassword(string $password)
    {
        $this->password = $password;
        
        return $this;
    }

    //===================== Email =====================// 
    
    public function getEmail() : string
    {
        return $this->email;
    }
    
    public function setEmail(string $email)
    {
        $this->email = $email;
        
        return $this;
    }

    //===================== Role =====================// 
    
    public function getRole() : string
    {
        return $this->role;
    }
    
    public function setRole(string $role)
    {
        $this->role = $role;
        
        return $this;
    }

    //===================== Registration Date =====================// 
    
    public function getRegistrationDate() : string
    {
        return $this->registrationDate;
    }
    
    public function setRegistrationDate(string $registrationDate)
    {
        $this->registrationDate = $registrationDate;
        
        return $this;
    }

    //===================== Get Infos =====================// 
    
    public function getInfos()
    {
        return "<h2>Données de l'utilisateur : $this</h2>
        <strong>Pseudo</strong> : $this->pseudo <br>
        <strong>Password</strong> : $this->password <br>
        <strong>Email</strong> : $this->email <br><br>";
    }

    //===================== toString =====================// 

    public function __toString()
    {
        return $this->pseudo;
    }
}

?>