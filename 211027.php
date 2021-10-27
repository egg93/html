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
      <h3>함수</h3>      
      <h4>18. 함수 만들기 예고</h4>
      <p>
        함수는 크게 2가지 측면으로 나뉨<br>
        1. 언어에 기본적으로 내장되어 있는, 언어를 이용하는 개발자들이 사용할 수 있도록 제공되는 함수<br>
        => 내장 함수 (built-in function)<br>
        2. 언어를 사용하는 개발자(내)가 직접 만드는 함수<br>
        => user definded functions
      </p>
      <p>
        print_list();<br>
        print_title();<br>
        print_description();<br><br>
        함수의 이름만으로 해당 함수가 실행할 내용을 직관적으로 파악하기 쉽다.<br>
      </p>
      <p>
        최종적으로 개발이란 복잡도를 낮추는 것에 모든 것을 갈아 넣는다.
      </p>
      <h4>19.1. 함수의 형식 1</h4>
      <p>
        function 기본 문법 익히기 - Syntax
      </p>
      <p>
        &lt;?php<br>
        function basic(){<br>
        print ("yop !&lt;br&gt;");<br>
      }<br>
      basic();<br>
      basic();<br>
    }<br>
    ?&gt;<br>
    <?php
      function basic(){
        print ("yop !<br>");
      }
      basic();
      basic();
    }
  ?><br>
  위의 예제를 통해 확인할 수 있는 함수의 이점 1. 어떤 로직에 이름을 부여 2. 재사용
</p>
<p>
  # 번외: JS와 PHP의 차이점 & 용도<br><br>
  PHP와 JS는 경쟁적인 관계임과 동시에 협력적인 관계<br><br>
  JS: black 버튼을 클릭했을 때 웹페이지 배경색을 까맣게 만들어주고 white 버튼을 클릭하면 배경색을 하얗게 만들어주는 역할.<br>
  클라이언트 측 스크립트<br>
  <strong>클라이언트의 특정 동작으로 화면이 바뀌도록 함</strong><br><br>
  PHP: <br>
  서버 측 스크립트<br>
  <strong>하나의 html로 여러 정보를 표현할 수 있는 방법, 이게 php가 할 수 있는 일</strong><br>
  MYSQL과 연동으로 사용, 주로 블로그,SNS,쇼핑몰,일정관리 등을 만들 때 이용,
  후에 python을 배우는데 도움<br>
  개인적으로 공부할 거라면 Golang, Rust, Python, JavaScript/TypeScript를 배우는 걸 추천 => 꾸준한 성장세
</p>
<h4>19.2. 함수의 형식 2</h4>
<p>
  function에 입력값 주기 => parameter & argument
</p>
<p>
  &lt;?php<br>
  function sum($left, $right){<br>
  print($left+$light);<br>
  print("&lt;br&gt;");<br>
}<br>
sum(2,4);<br>
sum(4,6);<br>
?&gt;<br><br>
<?php
  function sum($left, $right){
    print($left+$light);
    print("<br>");
  }
  sum(2,4);
  sum(4,6);
?>
</p>
<p>
  함수에 들어가는 매개변수 => parameter<br>
  함수에 쓰이는 구체적인 표현식 => argument<br>
  (cf. 객체에서 함수: method, 객체에서 변수: property)
</p>
<h4>19.3. 함수의 형식 3</h4>
<p>
  function에 출력값 주기 => return
</p>
<p>
  하나의 함수는 하나의 기능만 담는 것 권장
</p>
<p>
  &lt;?php
  function sum2($left, $right){
    $result = $left+$right;
    return $result;
  }
  print(sum2(2,4));
  file_put_contents('result.txt',sum(2,4));
  ?&gt;
  <?php
    function sum2($left, $right){
      $result = $left+$right;
      return $result;
    }
    print(sum2(2,4));
    file_put_contents('result.txt',sum(2,4));
  ?>
</p>
<h4>20. 함수의 활용</h4>
&lt;!DOCTYPE html&gt; 위에 php 언어로 함수 작성, 바디 안에 각 함수 배치 실습<br>
실습 파일: gorago.php
<h3>웹 애플리케이션</h3>      
<h4>21. 웹 애플리케이션 완성 예고</h4>
<h4>22. FORM과 POST</h4>
<h4>23. 글 생성 기능 구현하기</h4>
<h4>24. 글 수정 기능 구현하기</h4>
<h4>25. 글 삭제 기능 구현하기</h4>
</div>
</body>
</html>
