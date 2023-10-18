<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas Bangun Datar</title>
</head>
<body>
    <h2>Kalkulator Luas Bangun Datar</h2>
    
    <?php
    class BangunDatar {
        public function hitungLuas() {
            return 0.0;
        }
    }

    class Segitiga extends BangunDatar {
        private $alas;
        private $tinggi;

        public function __construct($alas, $tinggi) {
            $this->alas = $alas;
            $this->tinggi = $tinggi;
        }

        public function hitungLuas() {
            return 0.5 * $this->alas * $this->tinggi;
        }
    }

    class Persegi extends BangunDatar {
        private $sisi;

        public function __construct($sisi) {
            $this->sisi = $sisi;
        }

        public function hitungLuas() {
            return $this->sisi * $this->sisi;
        }
    }

    class Lingkaran extends BangunDatar {
        private $jari_jari;

        public function __construct($jari_jari) {
            $this->jari_jari = $jari_jari;
        }

        public function hitungLuas() {
            return M_PI * $this->jari_jari * $this->jari_jari;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bentuk = $_POST["bentuk"];
        $luas = 0.0;

        if ($bentuk == "segitiga") {
            $alas = $_POST["alas"];
            $tinggi = $_POST["tinggi"];
            $segitiga = new Segitiga($alas, $tinggi);
            $luas = $segitiga->hitungLuas();
        } elseif ($bentuk == "persegi") {
            $sisi = $_POST["sisi"];
            $persegi = new Persegi($sisi);
            $luas = $persegi->hitungLuas();
        } elseif ($bentuk == "lingkaran") {
            $jari_jari = $_POST["jari_jari"];
            $lingkaran = new Lingkaran($jari_jari);
            $luas = $lingkaran->hitungLuas();
        }

        echo "Luas $bentuk: $luas";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Pilih Bentuk:</label>
        <select name="bentuk">
            <option value="segitiga">Segitiga</option>
            <option value="persegi">Persegi</option>
            <option value="lingkaran">Lingkaran</option>
        </select>

        <br><br>

        <label for="alas">Alas (untuk segitiga):</label>
        <input type="text" name="alas" id="alas">
        
        <label for="tinggi">Tinggi (untuk segitiga):</label>
        <input type="text" name="tinggi" id="tinggi">

        <label for="sisi">Sisi (untuk persegi):</label>
        <input type="text" name="sisi" id="sisi">

        <label for="jari_jari">Jari-jari (untuk lingkaran):</label>
        <input type="text" name="jari_jari" id="jari_jari">

        <br><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>
