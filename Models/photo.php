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
    $req=$this->db->prepare("SELECT * FROM images WHERE description LIKE'%(?)%'");
    $req->execute([$search]);
    $resultat=$req->fetchAll();
    return $resultat;
  }

  public function deletePhotos($photoIdArray)
  {
    $query="DELETE FROM images WHERE photo_id in (";

    for ($i=0; $i < count($photoIdArray); $i++) {
      $query=$query+"?";
      if ($i != count($photoIdArray)-1) {
        $query=$query+",";
      }
    }
    $query=$query+")";

    $req=$this->db->prepare($query);
    $req->execute($photoIdArray);
  }
  public function editPhoto($photoId,$title,$description)
  {
    if (empty($title) || empty($description)) {
      return false;
    }else {
      $req=$this->db->prepare("UPDATE images SET title = :title , description= :description WHERE iamges_uid = :photoId ");
      $req->execute([':title'=>$title,':description'=>$description,':photoId'=>$photoId]);
      return true;
    }
  }
}


 ?>
