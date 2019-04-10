<?php
 $uploadfile = $_FILES['upload'] ['name'];
 $upload_dir = './uploads';
 if(move_uploaded_file($_FILES['upload']['tmp_name'],"$upload_dir/$uploadfile")){
  echo "파일이 업로드 되었습니다.<br>";
  echo "file name : {$_FILES['upload']['name']}<br>";
 } else {
  echo "파일 업로드 실패 !! 다시 시도해주세요.<br>";
 }
?> 
<a href="../php_upload_test_2/uploads">File_List</a>
<br>
<a href="upload.php">GO_BACK</a>