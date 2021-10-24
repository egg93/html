<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>로드맵 4. PHP: 211024</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-30NPPB5GV9"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-30NPPB5GV9');
  </script>
  <script src="colors.js"></script>
  <script>
  $(document).ready(function(){
    $('#grid_list').load("grid_list.html");
  });
  </script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1><a href = "index.html">입문자를 위한 생활코딩 WEB-N PHP 로드맵</a></h1>
  <div id="grid">
    <div id="grid_list">
    </div>
    <div id="article">
      <h3>PHP</h3>
      <h4>1. 수업 소개</h4>
      <h4>2. 수업의 목적</h4>
      <h3>PHP 기초</h3>
      <h4>3. PHP 설치</h4>
      <p>
        PHP => 기본적으로 컴퓨터에 들어 있는 소프트웨어 X<br>
        그러나 1. HTML 수업을 통해 이미 웹서버 bitnami wamp를 설치한 후라면 php 설치할 필요 X<br>
        WAMP: Window Apache Mysql Php
      </p>
      <h4>4. PHP의 원리</h4>
      <h4>5. PHP의 데이터 타입</h4>
      <h4>5.1. PHP와 숫자</h4>
      <p>Number & Operator</p>
      <?php
      echo 1;
      print(3.3);
      echo 1+1;
      echo 2*2;
      ?>
      나눗셈<br>
      echo 4/2;<br>
      <?php
      echo 4/2;
      ?>
      <h4>5.2. PHP와 문자열</h4>
      <p>
        String & String Operator
      </p>
      <p>
        <?php
        echo 'Hello World';
        echo 'Hello "W"orld';
        echo "Hello 'W'orld";
        echo "Hello \"W\"orld";
        ?>
      </p>
      <p>
        concatenation operation
      </p>
      <p>
        echo "Hello "."World";<br>
        <?php
        echo "Hello "."World";
        ?>
      </p>
      <p>String length function</p>
      <p>
        문자열의 길이를 알아내고 싶을 때<br>
        추천 검색어: php string length<br>
        $str = 'I\'m hungry';<br>
        echo strlen($str);<br>
        <?php
        $str = 'I\'m hungry';
        echo strlen($str);
        ?>
      </p>
      <h4>6. PHP의 변수</h4>
      <h4>7. PHP의 URL 파라미터</h4>
      <h4>8. PHP 함수의 사용</h4>
      <h4>9. PHP와 제어문 예고</h4>
    </div>
  </body>
  </html>
