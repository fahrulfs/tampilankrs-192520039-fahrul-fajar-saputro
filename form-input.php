<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT FORM</title>
</head>

<body>
    <?php echo "<link rel='stylesheet' type='text/css' href='./assets/css/index.css'/>";
    ?>
    <div class="container">
        <div class="form">
            <div class="input">
                <h2>Input Data</h2>

                <div class="input_data">
                    <form method="post" action="output-data.php">
                        <label for="nim">NIM</label><br>
                        <input type="number" name="nim">
                        <label for="">Nama</label><br>
                        <input type="text" name="nama"><br>
                        <label for="kode">Kode Mata Kuliah</label><br>
                        <input type="text" name="kode">
                        <label for="kode">Nama Mata Kuliah</label><br>
                        <input type="text" name="nama_matkul">
                        <label for="sks">SKS</label><br>
                        <input type="number" name="sks">
                        <label for="kelas">Kelas</label>
                        <select name="kelas">
                            <option value=""></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                        </select>
                        <label for="semester">Semester</label>
                        <select name="semester">
                            <option value=""></option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="7">7</option>
                        </select>
                        <br>
                        <input type="submit" name="submit" value="Masukkan">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>