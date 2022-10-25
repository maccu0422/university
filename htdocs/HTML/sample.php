<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>

<title>스파르타 피디아</title>

<link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">

<style>
* {
font-family: 'Gowun Dodum', sans-serif;
}

.mytitle {
width: 100%;
height: 250px;

background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://movie-phinf.pstatic.net/20210715_95/1626338192428gTnJl_JPEG/movie_image.jpg');
background-position: center;
background-size: cover;

color: white;

display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
}

.mytitle > button {
width: 200px;
height: 50px;

background-color: transparent;
color: white;

border-radius: 50px;
border: 1px solid white;

margin-top: 10px;
}

.mytitle > button:hover {
border: 2px solid white;
}

.mycomment {
color: gray;
}

.mycards {
margin: 20px auto 0px auto;
width: 95%;
max-width: 1200px;
}

.mypost {
width: 95%;
max-width: 500px;
margin: 20px auto 0px auto;
padding: 20px;
box-shadow: 0px 0px 3px 0px gray;

display: none;
}

.mybtns {
display: flex;
flex-direction: row;
align-items: center;
justify-content: center;

margin-top: 20px;
}
.mybtns > button {
margin-right: 10px;
}
</style>
<script>
$(document).ready(function(){
listing();
});

function listing() {
$('#cards-box').empty()
$.ajax({
type: "GET",
url: "http://spartacodingclub.shop/web/api/movie",
data: {},
success: function(response){
let movies = response['movies']
for (let i = 0 ; i < movies.length; i++) {
let movie = movies[i]
let title = movie['title']
let desc = movie['desc']
let image = movie['image']
let comment = movie['comment']
let star = movie['star']

let star_image = '⭐'.repeat(star)

let temp_html = `<div class="col">
<div class="card h-100">
<img src="${image}"
class="card-img-top">
<div class="card-body">
<h5 class="card-title">${title}</h5>
<p class="card-text">${desc}</p>
<p>${star_image}</p>
<p class="mycomment">${comment}</p>
</div>
</div>
</div>`
$('#cards-box').append(temp_html)
}
}
})
}

function open_box(){
$('#post-box').show()
}
function close_box(){
$('#post-box').hide()
}
</script>
</head>

<body>
<div class="mytitle">
<h1>내 생애 최고의 영화들</h1>
<button onclick="open_box()">영화 기록하기</button>
</div>
<div class="mypost" id="post-box">
<div class="form-floating mb-3">
<input id="url" type="email" class="form-control" placeholder="name@example.com">
<label>영화URL</label>
</div>
<div class="input-group mb-3">
<label class="input-group-text" for="inputGroupSelect01">별점</label>
<select class="form-select" id="inputGroupSelect01">
<option selected>-- 선택하기 --</option>
<option value="1">⭐</option>
<option value="2">⭐⭐</option>
<option value="3">⭐⭐⭐</option>
<option value="4">⭐⭐⭐⭐</option>
<option value="5">⭐⭐⭐⭐⭐</option>
</select>
</div>
<div class="form-floating">
<textarea id="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
style="height: 100px"></textarea>
<label for="floatingTextarea2">코멘트</label>
</div>
<div class="mybtns">
<button type="button" class="btn btn-dark">기록하기</button>
<button onclick="close_box()" type="button" class="btn btn-outline-dark">닫기</button>
</div>
</div>
<div class="mycards">
<div class="row row-cols-1 row-cols-md-4 g-4" id="cards-box">
</div>
</div>
</body>

</html>