<?php 
class KelasInduk {
    public $data;
    
    public function __construct($data) {
        $this->data = $data;
    }
    
    public function hitungTotal() {
        return array_sum($this->data);
    }
    
    public function hitungRataRata() {
        return array_sum($this->data) / count($this->data);
    }
    
    public function cariNilaiTertinggi() {
        return max($this->data);
    }
    
    public function cariNilaiTerendah() {
        return min($this->data);
    }
}

class KelasAnak extends KelasInduk {
    public function __construct() {
        $data = [];
        for ($i = 0; $i < 50; $i++) {
            $data[] = rand(0, 100);
        }
        parent::__construct($data);
    }
}

// Contoh penggunaan kelas
$kelasAnak = new KelasAnak();
$dataNilai = $kelasAnak->data;

echo "Data Nilai: " . implode(', ', $dataNilai) . "<br>";
echo "Total Nilai: " . $kelasAnak->hitungTotal() . "<br>";
echo "Rata-rata Nilai: " . $kelasAnak->hitungRataRata() . "<br>";
echo "Nilai Tertinggi: " . $kelasAnak->cariNilaiTertinggi() . "<br>";
echo "Nilai Terendah: " . $kelasAnak->cariNilaiTerendah() . "<br>";

?>