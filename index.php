<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 250px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        input, select {
            width: 100%;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="submit"] {
            width: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Form</h1>
    <form action="" method="post">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" required >
        
        <label for="tanggal_lahir">Tanggal lahir: </label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" >
        
        <label for="jobs">Profesi: </label>
        <select name="jobs" id="jobs">
            <option value="">- Pilih Profesi -</option>
            <option value="Desainer Grafis">Desainer Grafis</option>
            <option value="Web Developer">Web Developer</option>
            <option value="Fotografer">Fotografer</option>
            <option value="VFX Editor">VFX Editor</option>
            <option value="Komposer">Komposer</option>
        </select>
        
        <input type="submit" value="Submit">
    </form>

    <?php
        if(isset($_POST['nama'], $_POST['tanggal_lahir'], $_POST['jobs'])) {
            echo "Nama: " . $_POST['nama'] . "<br>";
            echo "Tanggal Lahir: " . $_POST['tanggal_lahir'] . "<br>";
            $age = floor((time() - strtotime($_POST['tanggal_lahir'])) / 31556926);
            echo "Umur: " . $age . " tahun<br>";
            echo "Profesi: " . $_POST['jobs'] . "<br>";

            switch ($_POST['jobs']) {
                case "Desainer Grafis":
                    echo "Gaji rata-rata: Rp. 1.000.000 - Rp. 25.000.000";
                    break;
                case "Web Developer":
                    echo "Gaji rata-rata: Rp. 7.000.000 - Rp. 25.000.000";
                    break;
                case "Fotografer":
                    echo "Gaji rata-rata: Rp. 1.000.000 - Rp. 15.000.000";
                    break;
                case "VFX Editor":
                    echo "Gaji rata-rata: Rp. 5.000.000 - Rp. 20.000.000";
                    break;
                case "Komposer":
                    echo "Gaji rata-rata: Rp. 3.000.000 - Rp. 15.000.000";
                    break;
                default:
                    echo "Gaji rata-rata: Profesi tidak ditemukan";
            }
        }
    ?>
</body>
</html>
