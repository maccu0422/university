<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "database.php";

function validate() {

    if (!isset($_POST['username'])) return "아이디를 입력해 주세요.";
    if (!isset($_POST['name'])) return "이름을 입력해 주세요.";
    if (!isset($_POST['email'])) return "이메일을 입력해 주세요.";
    if (!isset($_POST['password'])) return "비밀번호를 입력해 주세요.";
    if (!isset($_POST['passwordCheck'])) return "비밀번호 확인을 입력해 주세요.";

    if ($_POST['password'] != $_POST['passwordCheck']) return "비밀번호가 일치하지 않습니다.";
}

$message = validate();

if (!$message) {
    
    $stmt = $DATABASE->prepare("INSERT INTO user (username, password, name, email) values (:username, :password, :name, :email)");
    $stmt->bindValue(":username", $_POST['username']);
    $stmt->bindValue(":name", $_POST['name']);
    $stmt->bindValue(":email", $_POST['email']);
    $stmt->bindValue(":password", $_POST['password']);
    $result = $stmt->execute();

    $message = $result ? "회원가입을 성공하였습니다." : "회원가입을 실패하였습니다.";

}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <script>
        alert("<?= $message ?>");
        <?php if ($result) { ?>
            window.location.href = "/";
        <?php } else { ?>
            window.history.back();
        <?php } ?>
    </script>
</head>
</html>