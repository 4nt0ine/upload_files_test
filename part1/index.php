<?php
    /* Si  */
    if ( (isset($_FILES['fileToUpload']['name']) &&
         ($_FILES['fileToUpload']['error'] == UPLOAD_ERR_OK) ) ) {
            $filename = $_FILES['fileToUpload']['name'];
            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);;
            $chemin_destination = '/part1/assets/img/';
            move_uploaded_file($filename, $chemin_destination.uniqid().".".$fileExtension);
       }

       
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.1 link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Custom css link -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Custom javascript link -->
    <script src="./assets/js/script.js" async></script>
    <title>Image Upload</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <form class="col" action="index.php" method="POST" enctype="multipart/form-data">
                <!-- image Input -->
                <label class="form-label" for="file">Veuillez choisir une image :</label>
                <div class="input-group mb-4">
                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <!-- form submit button -->
                <button type="submit" class="btn-send btn mb-3 btn-warning">Envoyer</button>
            </form>
            <!-- image Integration -->
            <img class="col my-1" id="imgPreview">
            <?php if(!empty($_FILES['fileToUpload'])) : ?>
                <?= $_FILES['fileToUpload']['name'] ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>