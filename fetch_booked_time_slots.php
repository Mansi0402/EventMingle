<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

$data = json_decode(file_get_contents('php://input'), true);
$date = $data['date'];

$query = "SELECT time FROM book_form WHERE date = '$date'";
$result = mysqli_query($connection, $query);

$bookedTimeSlots = [];
while ($row = mysqli_fetch_assoc($result)) {
    $bookedTimeSlots[] = $row['time'];
}

echo json_encode(['bookedTimeSlots' => $bookedTimeSlots]);
?>
