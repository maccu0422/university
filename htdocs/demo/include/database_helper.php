<?php

$DATABASE_DSN = "mysql:host=139.162.112.25;port=3306;dbname=app;charset=utf8mb4";
$DATABASE_USERNAME = "remote";
$DATABASE_PASSWORD = "remote!23";
$DATABASE = new PDO($DATABASE_DSN, $DATABASE_USERNAME, $DATABASE_PASSWORD);

// 로그인.

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

// 회원가입.

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

$result = $statement->fetch(PDO::FETCH_ASSOC);

// 영화관 가져오기.

$statement = $DATABASE->prepare("
	SELECT
		*
	FROM
		theater
");
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// 영화관에 연결된 상영관 가져오기.

$statement = $DATABASE->prepare("
	SELECT
		*
	FROM
		theater_screen
	WHERE
		id_theater = :id_theater
");
$statement->bindValue("id_theater", $id_theater);
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// 영화관 좌석 가져오기.

$statement = $DATABASE->prepare("
	SELECT
		*
	FROM
		theater_seat
	WHERE
		id_theater = :id_theater AND
		id_screen = :id_screen
");
$statement->bindValue("id_theater", $id_theater);
$statement->bindValue("id_screen", $id_screen);
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// 영화 가져오기.

$statement = $DATABASE->prepare("
	SELECT
		*
	FROM
		movie
");
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// 영화 리뷰 가져오기.

$statement = $DATABASE->prepare("
	SELECT
		*
	FROM
		movie_review
	WHERE
		id_movie = :id_movie
");
$statement->bindValue("id_movie", $id_movie);
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// 영화 상영 시간 가져오기.
// JOIN 때문에 필드는 직접 선택해야 하는게 좋음.

$statement = $DATABASE->prepare("
	SELECT
		*
	FROM
		movie_available JOIN
		movie ON
		movie_available.id_movie = movie.id
	WHERE
		movie_available.id_movie = :id_movie AND
		movie_available.id_theater = :id_theater AND
		movie_available.id_screen = :id_screen
");
$statement->bindValue("id_movie", $id_movie);
$statement->bindValue("id_theater", $id_theater);
$statement->bindValue("id_screen", $id_screen);
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// 좌석 가져오기.

$statement = $DATABASE->prepare("
	SELECT
		*
	FROM
		theater_seat
	WHERE
		id_theater = :id_theater AND
		id_screen = :id_screen
");
$statement->bindValue("id_theater", $id_theater);
$statement->bindValue("id_screen", $id_screen);
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// 영화 상영 시간에 예약된 좌석 가져오기.

$statement = $DATABASE->prepare("
	SELECT
		*
	FROM
		ticket_seat JOIN
		theater_seat ON
		ticket_seat.id_seat = theater_seat.id
	WHERE
		ticket_seat.id_movie = :id_movie AND
		ticket_seat.id_movie_available = :id_movie_available AND
		ticket_seat.id_theater = :id_theater AND
		ticket_seat.id_screen = :id_screen
");
$statement->bindValue("id_movie", $id_movie);
$statement->bindValue("id_movie_available", $id_movie_available);
$statement->bindValue("id_theater", $id_theater);
$statement->bindValue("id_screen", $id_screen);
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// 티켓 가져오기.

$statement = $DATABASE->prepare("
	SELECT
		*
	FROM
		ticket
			JOIN theater ON
				ticket.id_theater = theater.id
			JOIN theater_screen ON 
				ticket.id_tscreen = theater_screen.id
			JOIN movie ON
				ticket.id_movie = movie.id
			JOIN movie_available ON
				ticket.id_movie_available = movie_available.id
	WHERE
		ticket.id_user = :id_user
");
$statement->bindValue("id_user", $id_user);
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// 예약된 티켓 좌석 가져오기.

$statement = $DATABASE->prepare("
	SELECT
		*
	FROM
		ticket_seat
			JOIN theater_seat ON 
				ticket_seat.id_seat = theater_seat.id
	WHERE
		ticket_seat.id_ticket = :id_ticket
");
$statement->bindValue("id_user", $id_user);
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

