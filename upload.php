<?php
if(isset($_FILES['fileUpload'])){

$file = $_FILES['fileUpload'];

$upload_directory='upload/';
$ext_str = "doc,docx,txt,pdf";
$allowed_extensions=explode(',',$ext_str);

$max_file_size = 10485760;

$ext = substr($file['name'], strrpos($file['name'], '.') + 1);

if (!in_array($ext, $allowed_extensions) ) {
echo "only".$ext_str." files allowed to upload";
}
if($file['size']>=$max_file_size){
echo "only the file less than ".$max_file_size."mb allowed to upload";
}

// $path=md5(microtime()).'.'.$ext;
$locate = move_uploaded_file($file['tmp_name'],$upload_directory.$file["name"]);
echo "File name: ".$locate;

if($locate){
  $host = 'localhost';
  $db = 'bills';
  $user = 'team';
  $pass = 't5TQlrN3B39ufxGv';
  $conn = new mysqli ($host,$user,$pass,$db);

// mysqli_select_db("upload");
echo"Your File Successfully Uploaded";

mysqli_query($conn,"INSERT INTO upload VALUES ('".$_FILES['fileUpload']['name']."')");
}

else {
  echo "Problem uploading file";
}
};

 ?>
