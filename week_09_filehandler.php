<?php

echo "<pre>";

print_r($_POST);

print_r($_FILES);

$from = $_FILES['fileInput']['tmp_name'];
$to   = __DIR__ . "/my-uploads/" .$_FILES['fileInput']['name'];

move_uploaded_file($from, $to);

?>