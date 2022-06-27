<?php

$showLicence = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_map('trim', $_POST);
    $errors = [];

    /* Error management */
    if (empty($data['lastname'])) {
        $errors[] = 'Lastname must not be empty';
    }
    $lastnameLength = 255;
    if (strlen($data['lastname']) > $lastnameLength) {
        $errors[] = 'Must not contain more than ' . $lastnameLength . '  character';
    }
    if (empty($data['firstname'])) {
        $errors[] = 'Firstname must not be empty';
    }
    $firstnameLength = 255;
    if (strlen($data['firstname']) > $firstnameLength) {
        $errors[] = 'Must not contain more than ' . $firstnameLength . ' character';
    }
    if (empty($data['street'])) {
        $errors[] = 'Street must not be empty';
    }
    $streetLength = 255;
    if (strlen($data['street']) > $streetLength) {
        $errors[] = 'Must not contain more than ' . $streetLength . ' character';
    }
    if (empty($data['city'])) {
        $errors[] = 'City must not be empty';
    }
    $cityLength = 255;
    if (strlen($data['city']) > $cityLength) {
        $errors[] = 'Must not contain more than ' . $cityLength . ' character';
    }
    if (empty($data['country'])) {
        $errors[] = 'Country must not be empty';
    }
    $countryLength = 255;
    if (strlen($data['country']) > $countryLength) {
        $errors[] = 'Must not contain more than ' . $countryLength . ' character';
    }
    if (empty($data['sex'])) {
        $errors[] = 'Sex must not be empty';
    }
    $sexLength = 255;
    if (strlen($data['sex']) > $sexLength) {
        $errors[] = 'Must not contain more than ' . $sexLength . ' character';
    }
    if (empty($data['hair'])) {
        $errors[] = 'Hair must not be empty';
    }
    $hairLength = 255;
    if (strlen($data['hair']) > $hairLength) {
        $errors[] = 'Must not contain more than ' . $hairLength . ' character';
    }
    /* Uploaded image */
    if(!empty($_FILES['files']['name'][0])) {
        $files = $_FILES['files'];
        $uploaded = array();
        $failed = array();
        $allowed = array('jpg', 'png', 'webp', 'gif');
        foreach($files['name'] as $position => $fileName) {
            $fileTemp = $files['tmp_name'][$position];
            $fileSize = $files['size'][$position];
            $fileError = $files['error'][$position];
            $fileExt = explode('.', $fileName);
            $fileExt = strtolower(end($fileExt));
            if(in_array($fileExt,  $allowed)) {
                if($fileError === 0) {
                    if($fileSize <= 1000000) {
                        $fileNameNew = uniqid('', true) . '.' . $fileExt;
                        $fileDestination = 'uploads/' . $fileNameNew;
                        if(move_uploaded_file($fileTemp, $fileDestination)) {
                            // the image has been copied to the uploads folder, the new name is on variable : $fileNameNew
                            $uploaded[$position] = $fileDestination;
                        } else {
                            $failed[$position] = "[{$fileName}] failed to upload.";
                        }
                    } else {
                        $positon = "";
                        $failed[$positon] = "[{$fileName}] is too large.";
                    }
                } else {
                    $failed[$position] = "[{$fileName}] errored with code {$fileError}.";
                }
            } else {
                $failed[$position] = "[{$fileName}] file extension '{$fileExt}' is not allowed.";
            }
        }
    } else {
        /* If there not any upload image, display default image */
        $fileDestination = "uploads/homer.jpg";
    }
    /* Show license if there are no errors in the form */
    if (empty($errors)) {
        $showLicence = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <title>Upload Image</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <!-- Form -->
        <div class="form">
            <h2>Upload Image</h2>
            <form action="uploadImage.php" method="POST" enctype="multipart/form-data" class="login" novalidate>
                <!-- Show errors -->
                <?php if (!empty($errors)) : ?>
                    <ul class="error">
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <!-- Show error when file extension is not allowed -->
                <?php
                    if(!empty($failed)) {
                        print_r($failed);
                        $fileDestination = "uploads/homer.jpg";
                    }
                ?>
                <div>
                    <label for="lastname">Nom :</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Last name" value="<?= $data['lastname'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="firstname">Prénom :</label>
                    <input type="text" id="firstname" name="firstname" placeholder="First name" value="<?= $data['firstname'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="street">Rue :</label>
                    <input type="text"  id="street" name="street" placeholder="Street" value="<?= $data['street'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="city">Ville :</label>
                    <input type="text"  id="city" name="city" placeholder="City" value="<?= $data['city'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="country">Pays :</label>
                    <input type="text" id="country" name="country" placeholder="Country" value="<?= $data['country'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="sex">Sexe :</label>
                    <input type="text"  id="sex" name="sex" placeholder="Sex" value="<?= $data['sex'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="hair">Cheveu :</label>
                    <input type="text" id="hair" name="hair" placeholder="Hair" value="<?= $data['hair'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="imageUpload">Télécharger une image de profil : </label>    
                    <input type="file" name="files[]" id="imageUpload" multiple>
                </div>
                <div class="button">
                    <button type="submit" class="button">ENVOYER</button>
                </div>
            </form>
        </div>
        <!-- Licence -->
        <?php if ($showLicence) : ?>
            <div class="container my-5 p-0 justify-content-center">
                <div class="row m-0 p-0">
                    <div class="col-12  m-0 p-2 bg-warning">
                        <img src="">
                    </div>
                </div>
                <div class="row m-0">
                    <div class="row col-1 m-0 p-0">
                        <div class="col-12 m-0 p-0 bg-warning">
                            <img src="">
                        </div>
                        <div class="col-12 m-0 p-0 bg-warning">
                            <img src="">
                        </div>
                        <div class="col-12 m-0 p-0 bg-success">
                            <img src="">
                        </div>
                        <div class="col-12 m-0 p-0 bg-success">
                            <img src="">
                        </div>
                        <div class="col-12 m-0 p-0 bg-success">
                            <img src="">
                        </div>               
                    </div>
                    <div class="col-4 m-0 p-0 bg-danger">
                        <?php if (isset($_FILES['files']['name'])) : ?>
                            <img src="<?php echo $fileDestination ?>" >
                        <?php endif ?>
                    </div>
                    <div class="row m-0 p-0 col-7">
                        <div class="col-12 m-0 p-2 bg-warning text-center">
                            <h1>TAXICAB <br>LE PERMIS</h1>
                        </div>
                        <div class="col-12 m-0 p-2 bg-success text-end">
                            <?php if (isset($_POST['lastname'])) : ?>
                                <?php
                                    echo $_POST['lastname'] . " " . $_POST['firstname'] . "<br/>";
                                    echo $_POST['street'] . "<br/>";
                                    echo $_POST['city'] . " " . $_POST['country'] . "<br/>";
                                    echo "SEX : " . $_POST['sex'] . "<br/>";
                                    echo "HAIR : " . $_POST['hair'] . "<br/>";
                                    echo "Signature";
                                ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-12 m-0 p-2 bg-success">
                        <img src="">
                    </div>
                </div>
            </div>
        <?php endif ?>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
