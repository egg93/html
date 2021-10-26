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
      <h3>조건문</h3>
      <h4>10. 조건문 예고</h4>
      <p>
        .php? 뒤에 id 파라미터가 없다면 Welcome 문구를,<br>
        id 파라미터가 있다면 id 값에 해당되는 파일의 콘텐츠를 조건문을 활용해 표시하는 것이 이번 수업의 목적
      </p>
      <h4>11. Boolean과 비교연산자</h4>
      <p>
        Boolean & Comparison Operators<br>
        => 제어문에서 아주 유용한 data type
      </p>
      <p>
        boolean => true, false / 2개의 데이터 타입 / 비교 연산자와 관련 있는 데이터 타입
      </p>
      <p>
        var_dump() => 입력값, 입력값의 데이터 타입 출력 함수<br>
        <br><br>
        &lt;?php<br>
          var_dump(1==1);<br>
        ?&gt;<br><br>
        <?php
          var_dump(1==1);
        ?>
      </p>
      <h4>12. 조건문의 형식</h4>
      <h4>13. 조건문 활용</h4>
      <h3>반복문</h3>
      <h4>14. 반복문 예고</h4>
      <h4>15. 반복문 형식</h4>
      <h4>16. 배열의 형식</h4>
      <h4>17.1 반복문과 배열의 활용 1</h4>
      <h4>17.2 반복문과 배열의 활용 2</h4>
      <h4>17.3 반복문과 배열의 활용 3</h4>
      <h3>함수</h3>      
      <h4>18. 함수 만들기 예고</h4>
      <h4>19. 함수의 형식</h4>
      <h4>20. 함수의 활용</h4>
</div>
</body>
</html>
