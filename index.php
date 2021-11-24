<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiak</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Form Input -->
    <section id="form">
        <div class="container">
            <form action="" method="post">
                <div class="row my-3">
                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-4">
                        <label for="tgl" class="form-label">Tanggal</label>
                        <select name="tgl" id="tgl" class="form-control">
                            <option value="">- Pilih Tanggal -</option>
                            <?php
                            for ($tgl = 1; $tgl <= 31; $tgl++) { 
                            ?>
                            <option value="<?php echo $tgl; ?>"><?php echo $tgl;?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="bln" class="form-label">Bulan</label>
                        <select name="bln" id="bln" class="form-control">
                            <option value="">- Pilih Bulan -</option>
                            <?php
                            $bulan = array("Januari","Februari","Maret","April","Mei","Juni","July","Agustus","September","Oktober","November","Desember");
                            for ($b = 1; $b <= 12;$b++) { 
                            ?>
                            <option value="<?php echo $b; ?>"><?php echo $bulan[$b-1];?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="thn" class="form-label">Tahun</label>
                        <select name="thn" id="thn" class="form-control">
                        <option value="">- Pilih Tahun -</option>
                            <?php
                            for ($thn = date("Y"); $thn >= 1989;$thn--) { 
                            ?>
                            <option value="<?php echo $thn; ?>"><?php echo $thn;?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <button type="submit" name="send" class="btn btn-primary">RAMAL</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Form Input -->

    <!-- Tampil Hasil -->
    <section id="result">
        <div class="container">
            <?php
            if(isset($_POST["send"])){
                // Get Data
                $r_nama = $_POST["nama"];
                $r_tgl = $_POST["tgl"];
                $r_bln = $_POST["bln"];
                $r_thn = $_POST["thn"];
            ?>
            <h2>Hello <?php echo $r_nama; ?> </h2>
            <h5>Tanggal Lahir : <?php echo $r_tgl." " . $bulan[$r_bln-1]. " " . $r_thn; ?></h5>
            <?php
                // Tentukan Zodiak
                $zodiak = "";
                if (($r_bln == 1 && $r_tgl >= 20 && $r_tgl <= 30) || ($r_bln == 2 && $r_tgl >= 1 && $r_tgl <= 18))
                        {
                            include "konten/aquarius.php";;
                        }
                        else if (($r_bln == 2 && $r_tgl >= 19 && $r_tgl <= 29) || ($r_bln == 3 && $r_tgl >= 1 && $r_tgl <= 20))
                        {
                            include "konten/pisces.php";
                        }
                        else if (($r_bln == 3 && $r_tgl >= 21 && $r_tgl <= 31) || ($r_bln == 4 && $r_tgl >= 1 && $r_tgl <= 19))
                        {
                            include "konten/aries.php";
                        }
                        else if (($r_bln == 4 && $r_tgl >= 20 && $r_tgl <= 30) || ($r_bln == 5 && $r_tgl >= 1 && $r_tgl <= 20))
                        {
                            include "konten/taurus.php";
                        }
                        else if (($r_bln == 5 && $r_tgl >= 21 && $r_tgl <= 31) || ($r_bln == 6 && $r_tgl >= 1 && $r_tgl <= 20))
                        {
                            include "konten/gemini.php";
                        }
                        else if (($r_bln == 6 && $r_tgl >= 21 && $r_tgl <= 30) || ($r_bln == 7 && $r_tgl >= 1 && $r_tgl <= 22))
                        {
                            include "konten/cancer.php";
                        }
                        else if (($r_bln == 7 && $r_tgl >= 23 && $r_tgl <= 31) || ($r_bln == 8 && $r_tgl >= 1 && $r_tgl <= 22))
                        {
                            include "konten/loe.php";
                        }
                        else if (($r_bln == 8 && $r_tgl >= 23 && $r_tgl <= 31) || ($r_bln == 9 && $r_tgl >= 1 && $r_tgl <= 22))
                        {
                            include "konten/virgo.php";
                        }
                        else if (($r_bln == 9 && $r_tgl >= 23 && $r_tgl <= 30) || ($r_bln == 10 && $r_tgl >= 1 && $r_tgl <= 22))
                        {
                            include "konten/libra.php";
                        }
                        else if (($r_bln == 10 && $r_tgl >= 23 && $r_tgl <= 31) || ($r_bln == 11 && $r_tgl >= 1 && $r_tgl <= 21))
                        {
                            include "konten/scorpion.php";
                        }
                        else if (($r_bln == 11 && $r_tgl >= 22 && $r_tgl <= 30) || ($r_bln == 12 && $r_tgl >= 1 && $r_tgl <= 21))
                        {
                            include "konten/sagitarius.php";
                        }
                        else if (($r_bln == 12 && $r_tgl >= 22 && $r_tgl <= 31) || ($r_bln == 1 && $r_tgl >= 1 && $r_tgl <= 19))
                        {
                            include "konten/capricon.php";
                        }
                        else
                        {
                            echo "Maaf Input Salah";
                        }
            ?>
            <?php
                }
            ?>
        </div>
    </section>
    <!-- End Tampil Hasil -->
</body>

</html>