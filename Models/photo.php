<?php
/**
 *
 */
class photo
{

  function __construct()
  {
    try {
        $this->db = new PDO('mysql:host=localhost;dbname=devterest', 'user', 'user');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

  }
  public function newPhoto($url,$title,$description,$user_id)
  {
    $req=$this->db->prepare("INSERT INTO images (url,title,description,user_id) VALUES (?,?,?,?)");
    $req->execute([$url,$title,$description,$user_id]);

  }

  public function getAllImage($search='')
  {
    $req=$this->db->prepare("SELECT * FROM images WHERE description LIKE ?");
    $search='%'.$search.'%';
    $req->execute([$search]);
    $resultat=$req->fetchAll();
    return $resultat;
  }

  public function deletePhoto($photoId)
  {
  /*  $query="DELETE FROM images WHERE photo_id in (";

    for ($i=0; $i < count($photoIdArray); $i++) {
      $query=$query."?";
      if ($i != count($photoIdArray)-1) {
        $query=$query.",";
      }
    }
    $query=$query.")";
    $req=$this->db->prepare($query);
    $req->execute($photoIdArray);*/
    $req=$this->db->prepare("DELETE FROM images WHERE photo_id = ? ");
    $req->execute([$photoId]);
  }
  public function getEditPhoto($photoId)
  {
    $req=$this->db->prepare("SELECT * FROM images WHERE photo_id LIKE ?");
    $req->execute([$photoId]);
    $resultat=$req->fetchAll();
    return $resultat[0];
  }
  public function editPhoto($photoId,$title,$description)
  {
    if (empty($title) || empty($description)) {
      return false;
    }else {
      $req=$this->db->prepare("UPDATE images SET title = ? , description= ? WHERE photo_id = ? ");
      $req->execute([$title,$description,$photoId]);
      return true;
    }
  }
}


 ?>
