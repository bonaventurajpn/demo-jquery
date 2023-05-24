<?php
// Mendapatkan data yang dikirimkan melalui metode POST
$name = $_POST['name'];
$email = $_POST['email'];

// Mengambil angka terakhir dari email (misalnya, jika email adalah "user1234@example.com", maka angka terakhirnya adalah 1234)
$lastNumber = intval(substr(strrchr($email, '@'), 1));

// Membuat array dengan jumlah elemen sesuai dengan angka terakhir dari email
$data = array();
for ($i = 0; $i < $lastNumber; $i++) {
  $data[] = $name . ' ' . $i;
}

// Mengatur header sebagai JSON
header('Content-Type: application/json');

// Mengembalikan data dalam format JSON
echo json_encode($data);
?>