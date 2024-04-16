<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['send'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $cuisine = $_POST['cuisine'];

    // Check if the selected time slot is already booked in the database
    $query = "SELECT time FROM book_form WHERE date = '$date'";
    $result = mysqli_query($connection, $query);

    $bookedTimeSlots = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $bookedTimeSlots[] = $row['time'];
    }

    if (in_array($time, $bookedTimeSlots)) {
        // Time slot already booked, handle accordingly (e.g., show message)
        echo 'This time slot is already booked. Please select another time.';
    } else {
        // Insert into database
        $request = "INSERT INTO book_form (name, email, phone, event, date, time, guests, cuisine) VALUES ('$name', '$email', '$phone', '$event', '$date', '$time', '$guests', '$cuisine')";
        mysqli_query($connection, $request);

        header('location:book.php');
    }
} else {
    echo 'Something went wrong, Try Again!';
}
?>