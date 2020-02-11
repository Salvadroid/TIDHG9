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
    

  static public function agregarUsuario($userName,$email, $passwordHash, $avatar, $pdo)
    {

        $sql = "INSERT INTO usuarios VALUES (null, :userName, :email, :passwordHash, :imagen)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':userName', $userName, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':passwordHash', $passwordHash, PDO::PARAM_STR);
        $stmt->bindParam(':imagen', $avatar, PDO::PARAM_STR);
        
        $stmt->execute(); 

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