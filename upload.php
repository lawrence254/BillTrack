<?php
if(isset($_POST['describe'])){
  if (isset($_FILES['fileUpload'])) {
$file = $_FILES['fileUpload'];
$title = trim($_POST['title']);
$proposer = trim($_POST['proposer']);
$desc =trim($_POST['describe']);
$prop_date = trim($_POST['prop_date']);
$mat_date = trim($_POST['mat_date']);

$uuid = uniqid('Bill_',TRUE);

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
// echo"Your File Successfully Uploaded";

$ins = mysqli_query($conn,"INSERT INTO bill(`uuid`,`title`,`description`,`proposer`,`proposed_date`,`maturity_date`,`file`) VALUES ('$uuid','".$title."','".$desc."','".$proposer."','".$prop_date."','".$mat_date."','".$_FILES['fileUpload']['name']."')");
if ($ins) {
  echo "Bill Has Been Inserted";
}else {
  echo 'An error occured: '.mysqli_error($conn);
}
}
}

else {
  echo "Sssafile";
};



}else {
  echo "Nothing";
};

 ?>
