<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTPUT DATA</title>
</head>

<body>
    <?php echo "<link rel='stylesheet' type='text/css' href='./assets/css/index.css'/>";
    ?>
    <div class="container">

        <div class="output">
            <h2>Output Data</h2>
            <?php
            $matkul = $_POST["nama_matkul"];
            $nim = $_POST["nim"];
            $nama = $_POST["nama"];
            $kode = $_POST["kode"];
            $sks = $_POST["sks"];
            $semester = $_POST["semester"];
            $kelas = $_POST["kelas"];
            ?>

            <table id="data">
                <tr>

                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Kelas</th>
                    <th>Semester</th>
                </tr>
                <tr>

                    <td> <?= $nim; ?></td>
                    <td> <?= $nama; ?></td>
                    <td> <?= $kode; ?></td>
                    <td><?= $matkul; ?></td>
                    <td> <?= $sks; ?></td>
                    <td><?= $kelas; ?></td>
                    <td><?= $semester; ?></td>

                </tr>
            </table>
        </div>
    </div>
    </div>

    </div>

</body>

</html>