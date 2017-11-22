<?php

$image=$_FILES["url"];
$tmp=$image["tmp_name"];
$name=$image["name"];
$type=$image["type"];
$filepath="imageBank/".$name;

move_uploaded_file($tmp,$filepath);

?>
