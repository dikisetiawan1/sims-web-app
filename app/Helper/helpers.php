<?php 

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	echo $hasil_rupiah;
 
}
function editrupiah($angka){
	
	$hasil_rupiah = number_format($angka,0,',','.');
	echo $hasil_rupiah;
 
}