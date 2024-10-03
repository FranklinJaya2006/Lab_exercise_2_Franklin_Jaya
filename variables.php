<?php
class Student {
    public $name = "Franklin Jaya";
    public $age;
    public $sex = "male";
    public $gpa = 3.70;


    function get_age() {
        $datetime1 = date_create('2006-02-08');
        $datetime2 = date_create('2024-10-03');
        $interval = date_diff($datetime1, $datetime2);
        $this->age = $interval->format('%y years, %m months, %d days');
        return $this->age;
    }

    function tunjukkanpesona () {
        echo "Nama: ". $this->name. "<br>";
        echo "Tanggal Lahir: ". $this->get_age(). "<br>";
        echo "Jenis Kelamin: ". $this->sex. "<br>";
        echo "GPA: ". $this->gpa. "<br>";
    }
}
$isstudent = true;

if ($isstudent) {
    $siswa = new Student();
    $siswa->tunjukkanpesona();

    echo "<br>";

} else {
    echo "Maaf, Anda bukan siswa.";
}



?>