<?php
if(isset($_FILES['files'])){
   $errors= array();
   foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
    $file_name = $key.$_FILES['files']['name'][$key];
    $file_size =$_FILES['files']['size'][$key];
    $file_tmp =$_FILES['files']['tmp_name'][$key];
    $file_type=$_FILES['files']['type'][$key]; 
          //尺寸限制
          if($file_size > 2097152){
              $errors[]='File size must be less than 2 MB';
          }  

        $desired_dir="upload";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"upload/".$file_name);
            }else{
                $new_dir="upload/".$file_name.time();
                 rename($file_tmp,$new_dir) ;    
            }

        }else{
                print_r($errors);
        }
    }
 if(empty($error)){
  echo "Success";
 }
}
?>

<html>
  <head><title>多檔案上傳</title></head>
  <body>
    <form action="" method="POST" enctype="multipart/form-data">
       <input type="file" name="files[]" multiple/>
       <input type="submit"/>
    </form>
  </body>
</html>