<?php
    if (isset($_FILES['media-file'])) {
        $title = $_POST['media-title'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["media-file"]["name"]);

        if (move_uploaded_file($_FILES["media-file"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["media-file"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "No file selected for upload.";
    }
?>
