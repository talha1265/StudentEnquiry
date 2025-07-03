<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $data = "$name,$phone\n";
    file_put_contents("data/registrations.csv", $data, FILE_APPEND);

    // You can redirect or keep user on the same page
    echo "<script>window.location.href = 'index.html#qr-section';</script>";
}
?>
