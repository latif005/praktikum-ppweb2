<?php
if (!isset($_POST['nama'])) {
    echo '<script>alert("Anda Harus Mengisi Formulir Terlebih Dahulu");</script>
    <meta http-equiv="refresh" content="0; url=form_nilai.php">';
    exit; // Menghentikan eksekusi script setelah redirect
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= ($_POST['nama']) ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= ($_POST['nim']) ?></td>
        </tr>
        <tr>
            <td>Rombel</td>
            <td>:</td>
            <td><?= ($_POST['rombel']) ?></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><?= ($_POST['matkul']) ?></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><?= ($_POST['tugas']) ?></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><?= ($_POST['uts']) ?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><?= ($_POST['uas']) ?></td>
        </tr>
        <tr>
            <td>Predikat</td>
            <td>:</td>
            <td>
                <?php
                $tugas = $_POST['tugas'] * (35 / 100);
                $uts = $_POST['uts'] * (30 / 100);
                $uas = $_POST['uas'] * (35 / 100);
                $total = $tugas + $uts + $uas;

                if ($total <= 35) {
                    $pred = 'E';
                } elseif ($total <= 55) {
                    $pred = 'D';
                } elseif ($total <= 69) {
                    $pred = 'C';
                } elseif ($total <= 84) {
                    $pred = 'B';
                } elseif ($total <= 100) {
                    $pred = 'A';
                } else {
                    $pred = 'Tidak Diketahui';
                }
                echo $pred;
                ?>
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>
                <?php
                switch ($pred) {
                    case 'A':
                        $keterangan = "Sangat Baik";
                        break;
                    case 'B':
                        $keterangan = "Baik";
                        break;
                    case 'C':
                        $keterangan = "Cukup";
                        break;
                    case 'D':
                        $keterangan = "Kurang";
                        break;
                    case 'E':
                        $keterangan = "Sangat Kurang";
                        break;
                    default:
                        $keterangan = "Tidak Diketahui";
                        break;
                }
                echo $keterangan;
                ?>
            </td>
        </tr>
    </table>
</body>
</html>