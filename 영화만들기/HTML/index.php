<!DOCTYPE html>
<html lang="ko">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" typr="text/css" href="../CSS/style2.css">
    <title>영화 사이트 만들기</title>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding:wght@700&display=swap" rel="stylesheet">
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
                        
        </div>
        
            <div class="header">
                    

            
                <div class="PR">
                    
                </div>
                <div class="movie">
                  <iframe width="100%" height="500px" src="https://www.youtube.com/embed/GduEtmvwcI0?autoplay=1&mute=1"
                        title="YouTube video player" frameborder="1"
                        allow="accelerometer; autoplay=1; loop=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                    <div class="sub-movie">
                      <div class="first-line">
                      <h1 class="chart1">⨀ 이번 달 인기 영화👑 ⨀</h1>
                        <li class="img">
                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                  <div class="ranktitle" id="code1">
                                  <div class="card h-100">
                                    <img src="https://movie-phinf.pstatic.net/20220718_224/1658121739465fgRof_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="https://movie.naver.com/movie/bi/mi/mediaView.naver?code=218980&mid=52988">
                                  </div>
                                  </div>
                                  <div class="col1">
                                    <div class="card h-100">
                                      <img src="https://movie-phinf.pstatic.net/20220727_209/1658912961873lVd2W_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="...">
                                      
                                    </div>
                                  </div>
                                  <div class="col2">
                                    <div class="card h-100">
                                      <img src="https://movie-phinf.pstatic.net/20220708_75/16572722362230AyHS_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="...">
                                      
                                    </div>
                                  </div>
                                  <div class="col3">
                                    <div class="card h-100">
                                      <img src="https://movie-phinf.pstatic.net/20220805_227/1659685387586PIORG_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="...">
                                      
                                    </div>
                                  </div>
                                </div>
                                <h1 class="chart1">⨀ 상영 예정 영화🍿 ⨀</h1>
                                <li class="img">
                                    <div class="row row-cols-1 row-cols-md-4 g-4">
                                          <div class="ranktitle" id="code1">
                                          <div class="card h-100">
                                            <img src="https://movie-phinf.pstatic.net/20220718_224/1658121739465fgRof_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="https://movie.naver.com/movie/bi/mi/mediaView.naver?code=218980&mid=52988">
                                          </div>
                                          </div>
                                          <div class="col1">
                                            <div class="card h-100">
                                              <img src="https://movie-phinf.pstatic.net/20220727_209/1658912961873lVd2W_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="...">
                                              
                                            </div>
                                          </div>
                                          <div class="col2">
                                            <div class="card h-100">
                                              <img src="https://movie-phinf.pstatic.net/20220708_75/16572722362230AyHS_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="...">
                                              
                                            </div>
                                          </div>
                                          <div class="col3">
                                            <div class="card h-100">
                                              <img src="https://movie-phinf.pstatic.net/20220805_227/1659685387586PIORG_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="...">
                                              
                                            </div>
                                          </div>
                                        </div>
                                        <h1 class="chart1">⨀ 특별 상영😎 영화⨀</h1>
                                    <li class="img">
                                        <div class="row row-cols-1 row-cols-md-4 g-4">
                                              <div class="ranktitle" id="code1">
                                              <div class="card h-100">
                                                <img src="https://movie-phinf.pstatic.net/20220718_224/1658121739465fgRof_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="https://movie.naver.com/movie/bi/mi/mediaView.naver?code=218980&mid=52988">
                                              </div>
                                              </div>
                                              <div class="col1">
                                                <div class="card h-100">
                                                  <img src="https://movie-phinf.pstatic.net/20220727_209/1658912961873lVd2W_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="...">
                                                  
                                                </div>
                                              </div>
                                              <div class="col2">
                                                <div class="card h-100">
                                                  <img src="https://movie-phinf.pstatic.net/20220708_75/16572722362230AyHS_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="...">
                                                  
                                                </div>
                                              </div>
                                              <div class="col3">
                                                <div class="card h-100">
                                                  <img src="https://movie-phinf.pstatic.net/20220805_227/1659685387586PIORG_JPEG/movie_image.jpg?type=m203_290_2" onmouseenter="zoomIn(event)" onmouseleave="zoomOut(event)" class="card-img-top" alt="...">
                                                  
                                                </div>
                                              </div>
                                            </div>
                                  
                                  
                         
                              


                </div>
            </div>
        </div>





    </div>
    <script src="../JS/js.js">


    </script>


</body>

</html>