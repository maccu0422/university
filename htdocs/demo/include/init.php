<?php

ob_start();
session_start();

include_once $_SERVER["DOCUMENT_ROOT"] . "/demo/include/functions.php";

// INIT VAR.

$INIT_RENDER_HTML = isset($INIT_RENDER_HTML) ? $INIT_RENDER_HTML : true;
$INIT_RENDER_HEADER = isset($INIT_RENDER_HEADER) ? $INIT_RENDER_HEADER : true;
$INIT_DATABASE = isset($INIT_DATABASE) ? $INIT_DATABASE : true;
$INIT_AUTH_REQUIRED = isset($INIT_AUTH_REQUIRED) ? $INIT_AUTH_REQUIRED : false;

// DATABASE.

$DATABASE_DSN = "mysql:host=139.162.112.25;port=3306;dbname=app;charset=utf8mb4";
$DATABASE_USERNAME = "remote";
$DATABASE_PASSWORD = "remote!23";
$DATABASE = null;

if ($INIT_DATABASE) {

    try {

        $DATABASE = new PDO($DATABASE_DSN, $DATABASE_USERNAME, $DATABASE_PASSWORD);

    } catch (PDOException $e) {

        print_r($e);
        show_message("DATABASE ERROR");

    }

}

// USER INFO.

$USER = null;

if ($DATABASE !== null && isset($_SESSION["user_id"])) {

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
		    id = :id
	");
    $statement->bindValue(":id", $_COOKIE["user_id"]);
    $statement->execute();

	$result = $statement->fetch(PDO::FETCH_ASSOC);
    if ($result) $USER = $result;
	else session_destroy();

}

if ($INIT_AUTH_REQUIRED && $USER === null) {

    show_message("SIGNIN REQUIRED");

}

?>
<?php if ($INIT_RENDER_HTML) { ?>
<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php if ($INIT_RENDER_HEADER) { ?>
		<header>

		</header>
	<?php } ?>
<?php } ?>