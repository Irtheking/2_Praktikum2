
<?php
include "atas.php";
?>
<?php

$proses= $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$nilai_akhir = (30*$nilai_uts/100)+(35*$nilai_uas/100)+(35*$nilai_tugas/100);
//==============================================================================================//
if(!empty($proses)) {
    echo "<br/><br/>";
    echo "<center>";
    echo "<table  border =2>"; 

    echo "<tr>";
    echo "<td>NAMA</td>";
    echo "<td>$nama_siswa</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Mata Kuliah</td>";
    echo "<td>$mata_kuliah</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nilai UTS</td>";
    echo "<td>$nilai_uts</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nilai UAS</td>";
    echo "<td>$nilai_uas</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nilai Praktikum</td>";
    echo "<td>$nilai_tugas</td>";
    echo "</tr>";
    
    }
//==============================================================================================//

if ($nilai_akhir >= 85) {
    echo "<tr>";
    echo "<td>Grade</td>";
    echo "<td>A</td>";
    echo "</tr>";
} else if ($nilai_akhir >= 70){
    echo "<tr>";
    echo "<td>Grade</td>";
    echo "<td>B</td>";
    echo "</tr>";
} else if ($nilai_akhir >= 56){
    echo "<tr>";
    echo "<td>Grade</td>";
    echo "<td>C</td>";
    echo "</tr>";
} else if ($nilai_akhir >= 36){
    echo "<tr>";
    echo "<td>Grade</td>";
    echo "<td>D</td>";
    echo "</tr>";
} else if ($nilai_akhir >= 0){
    echo "<tr>";
    echo "<td>Grade</td>";
    echo "<td>E</td>";
    echo "</tr>";
}

switch ($nilai_akhir)
{
	case ($nilai_akhir >= 85) :
        echo "<tr>";
        echo "<td>Sangat Baik</td>";
        echo "<td></td>";
        echo "</tr>";
		break;
	case ($nilai_akhir >= 70) :
        echo "<tr>";
        echo "<td>Baik</td>";
        echo "<td></td>";
        echo "</tr>";
		break;
	case ($nilai_akhir >= 56) :
        echo "<tr>";
        echo "<td>Cukup</td>";
        echo "<td></td>";
        echo "</tr>";
		break;
    case ($nilai_akhir >= 36) :
        echo "<tr>";
        echo "<td>Kurang</td>";
        echo "<td></td>";
        echo "</tr>";
        break;
    case ($nilai_akhir >= 0) :
        echo "<tr>";
        echo "<td>Sangat Kurang</td>";
        echo "<td></td>";
        echo "</tr>";
        break;
}

//=============================================================================================//
if ($nilai_akhir >= 55 ){
    echo "<tr>";
    echo "<td>Selamat Anda Lulus!</td>";
    echo "<td></td>";
    echo "</tr>";
    
} else {
    echo "<tr>";
    echo '<center>';
    echo "<td> Anda Tidak Lulus!</td>";
    echo '</center>';
    echo "</tr>";
}
    echo "</table>";
    echo "</center>";
    echo "<br/><br/><br/>";
?>
<?php
include "bawah.php";
?>