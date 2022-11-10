<?php

function file_upload($picture)
{
    $result = new stdClass();
    $result->fileName = "dish.png";
    $result->error = 1;
    $fileName = $picture['name'];
    $fileType = $picture['type'];
    $fileTmpName = $picture['tmp_name'];
    $fileError = $picture['error'];
    $fileSize = $picture['size'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $filesAllowed = ["png", "jpg", "jpeg"];
    if ($fileError == 4) {
        $result->ErrorMessage = "No picture was chosen. You can always update that later!";
        return $result;
    } else {
        if (in_array($fileExtension, $filesAllowed)) {
            if ($fileError == 0) {
                if ($fileSize < 5000000) {
                    $fileNewName = uniqid('') . "." . $fileExtension;
                    $destination = "../pictures/$fileNewName";
                    if (move_uploaded_file($fileTmpName, $destination)) {
                        $result->error = 0;
                        $result->fileName = $fileNewName;
                        return $result;
                    } else {
                        $result->ErrorMessage = "There was an error uploading this file.";
                        return $result;
                    }
                } else {
                    $result->ErrorMessage = "This picture is bigger than allowed.";
                    return $result;
                }
            } else {
                $result->ErrorMessage = "There is an error in uploading this file.";
                return $result;
            }
        } else {
            $result->ErrorMessage = "This file type can't be uploaded.";
            return $result;
        }
    }
}
