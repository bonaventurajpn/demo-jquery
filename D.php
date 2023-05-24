<?php
header('Content-Type: application/json');

$number = $_POST['number'];
$text = $_POST['text'];

$response = array();

for ($i = 0; $i < $number; $i++) {
  $response[] = $text . ' ' . ($i + 1);
}

echo json_encode($response);
?>
