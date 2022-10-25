<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <script src="/public/script/signup.js"></script>
    <link href="signup.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <form method="post" action="/university/signup_action.php" onsubmit="signUpCheck(event)">
        <div class="wrap">
            <img src="DFBF.png" class="signup_img" alt="headerlogo" />
            <div class="wrapper">
                <div class="title">
                    
                    <h1 style="font-size: 21px;">회원가입</h1>
                </div>
                <div class="email">
                    <input id="username" name='username' type="text" placeholder="아이디를 입력해 주세요.">
                    <div id="usernamelError" class="error"></div>
                </div>
                <div class="email">
                    <input id="email" name='email' type="text" placeholder="이메일을 입력해 주세요.">
                    <div id="emailError" class="error"></div>
                </div>
                <div class="name">
                    <input id="name" name='name' type="text" placeholder="이름을 입력해 주세요.">
                    <div id="nameError" class="error"></div>
                </div>
                <div class="password">
                    <input id="password" name='password' type="password" placeholder="비밀번호를 입력해 주세요.">
                    <div id="passwordError" class="error"></div>
                </div>
                <div class="passwordCheck">
                    <input id="passwordCheck" name='passwordCheck' type="password" placeholder="비밀번호를 다시 입력해 주세요.">
                    <div id="passwordCheckError" class="error"></div>
                </div>
                <div class="signUp">
                    <button id="signUpButton" type="submit">가입하기</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>