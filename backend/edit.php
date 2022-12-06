<?php 
require 'koneksi.php';
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$pesan = [];
$no = $data['no'];
$tanggal = $data['tanggal'];
$peminjaman = $data['peminjaman'];
$lama = $data['lama'];
$total = $data['total'];
$nama = $data['nama'];

$query = mysqli_query($con,"update rent set tanggal='$tanggal', peminjaman='$peminjaman', lama='$lama', total='$total', nama='$nama' where no='$no'");
// if ($query) {
// 	http_response_code(201);
// 	$pesan['status'] = 'sukses';
// }else{
// 	http_response_code(422);
// 	$pesan['status'] = 'gagal';

// }

echo json_encode($pesan);
echo mysqli_error($con);


?>