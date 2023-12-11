<?php
    $host = 'localhost';
    $db = 'db1';
    $user = 'root';
    $password = '';

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $voivodeship = $_POST['voivodeship'];
    $gender = $_POST['gender'];
    $newsletter = isset($_POST['newsletter']) ? 1 : 0;

    $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, dob, email, phone, voivodeship, gender, newsletter) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$firstName, $lastName, $dob, $email, $phone, $voivodeship, $gender, $newsletter]);

    echo 'Dane zostały pomyślnie zapisane w bazie danych.';
?>
