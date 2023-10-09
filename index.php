<!DOCTYPE html>
<html>

<head>
    <title>Polyalphabet</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="mb-4 text-center">Polyalphabet Encrypter</h1>
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="plainText">Masukkan Teks:</label>
                            <input type="text" class="form-control" name="plainText" id="plainText" required>
                        </div>
                        <div class="form-group">
                            <label for="key">Masukkan Kunci:</label>
                            <input type="text" class="form-control" name="key" id="key" required>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="action" id="encryptRadio" value="encrypt" required>
                            <label class="form-check-label" for="encryptRadio">Enkripsi</label>
                        </div>
                        <div class="mt-3">
                            <button type="submit" name="submit" class="btn btn-primary">Proses</button>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['submit'])) {
                        $plainText = $_POST['plainText'];
                        $key = $_POST['key'];
                        $action = $_POST['action'];

                        if ($action == "encrypt") {
                            require 'encrypt.php';
                            $result = Encrypt($plainText, $key);
                            $resultTitle = "Hasil Enkripsi:";
                        } else {
                            require 'decrypt.php';
                            $result = Decrypt($plainText, $key);
                            $resultTitle = "Hasil Dekripsi:";
                        }
                    ?>
                        <div class="mt-4">
                            <h4 class="text-center"><?= $resultTitle ?></h4>
                            <p class="text-center alert alert-success"><?= $result ?></p>
                        </div>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>