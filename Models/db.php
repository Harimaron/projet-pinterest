<?php
class db{
  public $db;
  public function __construct()
  {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=devterest', 'user', 'user');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

  public function signUp($pseudo,$password)
  {
    $req = $this->db->prepare("SELECT * FROM users where pseudo = (?)");
    $req->execute([$pseudo]);
    if($req->rowcount()==1)
    {
      return false;
    }
    $req=$this->db->prepare("INSERT INTO users (pseudo,password) VAlUES (?,?)");
    $hashPassword=sha1($password);
    $req->execute([$pseudo,$hashPassword]);
    return true;
  }

  public function SignIn($pseudo,$password)
  {
    $req = $this->db->prepare("SELECT * FROM users where pseudo = (?)");
    $req->execute([$pseudo]);
    if($req->rowcount()==1)
    {
      $user=$req->fetchObject();
      $hashPassword=sha1($password);

      if ($user->password==$hashPassword)
      {
        session_start();
        $_SESSION['pseudo']=$pseudo;
        $_SESSION['logged']=true;
        return true;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }
  public function logout()
  {
    session_unset();
    session_destroy();
  }

  public function getAllImage($search='')
  {
    $req=$this->db->prepare("SELECT * FROM images WHERE description LIKE'%(?)%'");
    $req->execute([$search]);
    $resultat=$req->fetchObject();
    return $resultat;
  }



}



?>
