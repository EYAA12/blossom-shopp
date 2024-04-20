<?php
include "./connect.php";

$email = $_POST["email"];
$password = $_POST["password"];
$passwordHash  = hash("sha256", $password);

$stmt = $conn->prepare("SELECT passwordHash FROM user WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if ($passwordHash == $user['passwordHash']){
        http_response_code(200);
    } else {
        http_response_code(401);
    }
} else {
    http_response_code(404);
}

?>