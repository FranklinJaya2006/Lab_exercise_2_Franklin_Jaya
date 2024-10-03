<?php
class Student {
    public $name;
    public $age;
    public $sex;
    public $gpa;

    function __construct($name, $age, $sex, $gpa) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->gpa = $gpa;
    }

    function tunjukkanpesona () {
        echo "Nama: ". $this->name. "<br>";
        echo "Tanggal Lahir: ". $this->age. "<br>";
        echo "Jenis Kelamin: ". $this->sex. "<br>";
        echo "GPA: ". $this->gpa. "<br>";
    }
}
$isstudent = true;

if ($isstudent) {
    $datetime1 = date_create('2006-02-08');
    $datetime2 = date_create('2024-10-03');
    $interval = date_diff($datetime1, $datetime2);
    $taun = $interval->format('%y years');
    $bulan = $interval->format('%m month');
    $tgl = $interval->format('%d days');
    $siswa = new Student("Franklin Jaya", "Umur :  $taun, Bulan : $bulan , Tanggal : $tgl","male", "3.70");
    $siswa->tunjukkanpesona();

    echo "<br>";
    
} else {
    echo "Maaf, Anda bukan siswa.";
}



?>
