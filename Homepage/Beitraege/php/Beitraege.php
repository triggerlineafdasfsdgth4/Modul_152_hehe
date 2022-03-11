<?php
if (isset($_POST["save"])){
    $uploaddir = '../../../Pictures/';
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);

    echo '<pre>';
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        echo "Datei ist valide und wurde erfolgreich hochgeladen.\n";
    } else {
        echo "Möglicherweise eine Dateiupload-Attacke!\n";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beitrag</title>
</head>
<body>
<form>
    <label for="text">Beitragstext </label>
    <textarea id="text" maxlength="1000" ></textarea>

    <label for="fileupload">Bild oder Video hochladen</label>
    <input type="file" id="fileupload" name="file">

    <input type="submit" value="Publizieren" id="submit">
    <input type="button" value="Abbrechen" id="cancel">


</form>
</body>
</html>



