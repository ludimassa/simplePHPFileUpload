<?php
if(!empty($_FILES['fileUpload'])){
    $path = "uploads/";
    $path = $path . basename( $_FILES['fileUpload']['name']);
    if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $path)) {
        echo "The file ".  basename( $_FILES['fileUpload']['name']).
            " has been uploaded.";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
}
else{
    echo "There was an error uploading the file, please try again!";
}
?>