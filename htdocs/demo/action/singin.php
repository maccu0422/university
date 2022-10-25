<?php

$INIT_RENDER_HTML = false;
include_once $_SERVER["DOCUMENT_ROOT"] . "/demo/include/init.php";

if (!isset($DATABASE)) show_message("DATABASE NULL");

// VALIDATION.

if (!isset($_POST["username"])) show_message("아이디를 입력해 주세요.");
if (!isset($_POST["password"])) show_message("비밀번호를 입력해 주세요.");

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

// CHECK.

$statement = $DATABASE->prepare("
	SELECT
		id,
		username,
		name,
		email,
		rank
	FROM
	    user
	WHERE
	    username = :username AND
	    password = PASSWORD(:password)
");
$statement->bindValue(":username", $username);
$statement->bindValue(":password", $password);
$statement->execute();

$result = $statement->fetch(PDO::FETCH_ASSOC);

if ($result) {

    $_SESSION["user_id"] = $result["id"];
    show_message("로그인 성공.", "/demo/index.php");

} else {

    show_message("로그인 실패.");

}