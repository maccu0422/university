<!DOCTYPE html>
<html lang="ko">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" typr="text/css" href="../CSS/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/53a8c415f1.js" crossorigin="anonymous"></script>
    <title>로그인</title>
</head>
<body>
    <div class="wrap">
        <div class="main-header">

            <div class="header-container">

                <a aria-label="버드" class="icon" href="index.php">
                    </a>
                <ul class="seri">
                    
                    <li class="tab">
                        <a class="se2" href="Theater.php">극장</a>
                    </li>
                    <li class="tab">
                        <a class="se3" href="ticket.php">예매</a>
                    </li>
                    <li class="tab">
                        <a class="sei1" href="login.php">로그인/회원가입</a>
                    </li>
                    <li class="tab">
                        <a class="sei3" href="mypage.php">마이페이지</a>
                    </li>
                </ul>

            </div>
                <?php if (!isset($_SESSION['user_id'])) { ?>
                <form method="post" action="login-action.php">
                    <div class="main">
                        
                        <h1 class="login">Login</h1>
                        <div class="container">
                            <div class="input2">
                            <input type="text" placeholder="ID(email)" name="user_id" id="id" class="account">
                            <input type="password" placeholder="Password" name="user_pw" id="password" class="account">
                        </div>
                        <div class="btn2">
                            <button id="login-submit" class="account" type="submit" value="로그인">로그인</button>
                            <button id="login-signup" class="account" type="button" onclick="location.href='signup.php'">회원가입</button>
                        </div>
                    </div>
                </form>
            <?php } else { ?>
                <p>이미 로그인 상태 입니다.</p>
                <p>
                    <a href="/">[돌아가기]</a> 
                    <a href="logout.php">[로그아웃]</a>
                </p>
            <?php } ?>     
        </div>
               
</body>
</html>