<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $reason = $_POST['reason'];

    // Simpan data ke database atau file
    // Contoh menyimpan ke file JSON
    $data = [
        'fullname' => $fullname,
        'email' => $email,
        'phone' => $phone,
        'class' => $class,
        'reason' => $reason
    ];

    $jsonData = json_encode($data) . PHP_EOL;
    file_put_contents('data.json', $jsonData, FILE_APPEND);

    // Redirect ke grup WhatsApp
    header("Location: https://chat.whatsapp.com/DJU8BIXKM3rKq5ZPq4m4PN?mode=r_c");
    exit();
}
?>
