<?php 
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
// $mpdf->Output('daftar mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);
$mpdf->Output('daftar mahasiswa.pdf', 'I');
?>