<?php

$INIT_RENDER_HTML = false;
include_once $_SERVER["DOCUMENT_ROOT"] . "/demo/include/init.php";

if (!isset($DATABASE)) show_message("DATABASE NULL");

// VALIDATION.

if (!isset($_POST["username"])) show_message("아이디를 입력해 주세요.");
if (!isset($_POST["password"])) show_message("비밀번호를 입력해 주세요.");
if (!isset($_POST["email"])) show_message("이메일을 입력해 주세요.");
if (!isset($_POST["name"])) show_message("이름을 입력해 주세요.");

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$email = trim($_POST["email"]);
$name = trim($_POST["name"]);

// INSERT.

$statement = $DATABASE->prepare("
	INSERT INTO user
	    (
            username,
            password,
            name,
            email,
            rank            
        )
	VALUES
	    (
            :username,
            PASSWORD(:password),
            :name,
            :email,
            'BRONZE'
        )
");
$statement->bindValue(":username", $username);
$statement->bindValue(":password", $password);
$statement->bindValue(":name", $name);
$statement->bindValue(":email", $email);
$statement->execute();

if ($statement->rowCount()) {

    show_message("가입 성공.", "/demo/signin.php");

} else {

    show_message("가입 실패.");

}