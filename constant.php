<?php 

// define('NAMA', 'GUGI IMAMUDIN');
// echo NAMA;

// echo "<br>";

//tipe Constant const bisa digunakan didalam kelas.
// const UMUR = 22;
// echo UMUR;



// class Coba {
// 	const NAMA = 'GUGI IMAMUDIN';

// }
//pemanggilan static
// echo Coba::NAMA;

// echo __LINE__;

// function coba(){
// 	return __FUNCTION__;
// }
// echo coba();

class Coba {
	public $kelas = __CLASS__;
}
$obj = new Coba;

echo $obj->kelas;


 ?>