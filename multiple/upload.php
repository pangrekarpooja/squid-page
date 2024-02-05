<?php
if (isset($_POST['submit'])){
    foreach ($_FILES['myImages']['tmp_name'] as $key => $image) {
        $imageName = $_FILES['myImages']['name'][$key]
        $imagetmp = $_FILES['myImages']['tmp_name'][$key];

        $directory = 'Images/';
        
        $_result = move_uploaded_file($imagetmp, $directory.$imageName);

    }
    if ($_result){
        echo "Images Uploaded successfully";
    }
    

    
}



?>