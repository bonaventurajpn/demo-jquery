<?php
header('Content-Type: application/json');
// Menerima data dari request dengan metode POST
$numericInput = $_POST['numericInput'];
$textInput = $_POST['textInput'];

// Membuat array dengan jumlah elemen sesuai dengan nilai numericInput
$dataArray = array();
for ($i = 0; $i < $numericInput; $i++) {
  $dataArray[] = $textInput . ' ' . $i;
}

// Mengirimkan response dalam format JSON
echo json_encode($dataArray);
exit; // Pastikan keluar dari skrip PHP setelah mengirim respons JSON
?>