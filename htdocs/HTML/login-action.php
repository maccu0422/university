<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "database.php";

if (isset($_POST['user_id']) && isset($_POST['user_pw'])) {

    $statement = $DATABASE->prepare('SELECT username FROM user WHERE username = :username AND password = :password');
    $statement->bindValue("username", $_POST['user_id']);
    $statement->bindValue("password", $_POST['user_pw']);
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        
        $_SESSION['user_id'] = $result["username"];
        header("Location: /");
        exit;

    }

}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <script>
        alert("아이디와 비밀번호를 확인해주세요.");
        window.location.replace('login.php');
    </script>
</head>
</html>