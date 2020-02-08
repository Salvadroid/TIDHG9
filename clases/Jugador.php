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
    
     public function __construct($userName, $email, $passwordHash, $avatar,$id)
    {
        $this->userName =$userName;
        $this->email=$email;
        $this->passwordHash= $passwordHash;
        $this->avatar= $avatar;
        $this->id=$id;
    }
    

  static public function agregarUsuario()
    {
        global $pdo;
        $userName = trim($_POST['nombre']);
        $email = $_POST['email'];
        $passwordHash= password_hash($_POST["password"],PASSWORD_DEFAULT);
        $imagen = Avatar::armarUrlAvatar();
        $pdo = Conexion::conectar();
        $sql = "INSERT INTO usuarios VALUES ( NULL, :userName, :email, :passwordHash, :imagen )";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':userName', $userName, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':passwordHash', $passwordHash, PDO::PARAM_STR);
        $stmt->bindParam(':imagen', $imagen, PDO::PARAM_STR);

        if( $stmt->execute() ){
           $this->setuserName($userName);
           $this->setPasswordHash($passwordHash);
           $this->setImagen($imagen);
           $this->setemail($email);
           $this->setid($pdo->lastInsertId());
            return true;
        }
        return false;

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


    public function getImagen()
        {
            return $this->Imagen;
        }

        /**
         * @param mixed $Imagen
         */
        public function setImagen($Imagen)
        {
            $this->Imagen = $Imagen;
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