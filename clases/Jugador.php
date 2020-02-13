<?php 
class Jugador
{
    protected $userName;
    protected $id;
    protected $imagen;
    protected $email;
    protected $passwordHash;
    protected $puntaje;
    protected $myQuizzes;
    protected $rankPosition;
    protected $logueado;
    protected $createMode;
    
     public function __construct($userName, $email, $passwordHash, $avatar)
    {
        $this->userName =$userName;
        $this->email=$email;
        $this->passwordHash= $passwordHash;
        $this->avatar= $avatar;

    }
    

 
    
    public function getPasswordHash()
    {
        return $this->PasswordHash;
    }

    /**
     * @param mixed $PasswordHash
     */
    public function setPasswordHash($PasswordHash)
    {
        $this->PasswordHash = $PasswordHash;
    }


    public function getavatar()
        {
            return $this->avatar;
        }

        /**
         * @param mixed $avatar
         */
        public function setavatar($avatar)
        {
            $this->avatar = $avatar;
        }

        public function getid()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setid($id)
        {
            $this->id = $id;
        }
        public function getuserName()
        {
            return $this->userName;
        }

        /**
         * @param mixed $userName
         */
        public function setuserName($userName)
        {
            $this->userName = $userName;
        }

        public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

}