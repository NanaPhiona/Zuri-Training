<?php
$_POST['first_name'] = "Phiona";
$_POST['last_name'] = "Nankya";
$_POST['email'] = "phiona@gmail.com";
$_POST['password'] = "Phiona";

echo "First Name: " . htmlspecialchars($_POST['first_name']) . "\n";
echo "Last Name: " . htmlspecialchars($_POST['last_name']) . "\n";
echo "Email: " . htmlspecialchars($_POST['email']) . "\n";
echo "Password: " . htmlspecialchars($_POST['password']) . "\n";


$data = array(
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
);

//Creating a json object
$json_data = json_encode($data, JSON_PRETTY_PRINT);

//handling file
$file_name = "database.json";
$handle = fopen($file_name, 'w');
fwrite($handle, $json_data);
fclose($handle);
