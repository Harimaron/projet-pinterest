<?php
include 'Models/photo.php';

$d=new photo();
$d->deletePhotos([2,3,4]);
?>
