<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$fileTpUpload;


// Check of het een echte afbeelding is
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "Bestand is een afbeelding - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "Bestand is geen afbeelding .";
        $uploadOk = 0;
    }
}

// Check of bestand al bestaat
if (file_exists($target_file)) {
    echo "Sorry, Afbeelding bestaat al.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, Afbeelding is te groot.";
    $uploadOk = 0;
}

// alleen afbeeldingen toestaan
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, alleen JPG, JPEG, PNG & GIF bestanden zijn toegestaan.";
    $uploadOk = 0;
}

// Check ff $uploadOk is geset naar 0 door een error
if ($uploadOk == 0) {
    echo "Uw afbeelding is niet geupload..";

// als alles werkt, upload bestand
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        sleep(2000);
        echo "<img src='uploads/".$target_file."'>";
    } else {
        echo "Sorry,  Er ontstond een fout bij het uploaden van uw afbeelding..";
    }
}
?>



