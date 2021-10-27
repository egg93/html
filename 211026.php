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
        실 웹 페이지를 운영할 때는 쓰일 일 없지만 개발하는 과정에서느 수도 없이 활용될 함수<br><br>
        &lt;?php<br>
        var_dump(1==1);<br>
        ?&gt;<br><br>
        <?php
          var_dump(1==1);
        ?><br><br>
        &lt;?php<br>
        var_dump(1&gt;1);<br>
        ?&gt;<br><br>
        <?php
          var_dump(1>1);
        ?><br><br>
        &lt;?php<br>
        var_dump(1&gt;=1);<br>
        ?&gt;<br><br>
        <?php
          var_dump(1>=1);
        ?>
      </p>
      <h4>12. 조건문의 형식</h4>
      <p>
        추천 검색어: php conditional statements<br>
        => if(expr)<br>
        (expr: expression = 표현식)
      </p>
      <p>
        if(true){<br>
        a<br>
      }<br>
      => a 실행<br><br>
      if(false){<br>
      b<br>
    }<br>
    => b 실행 X
  </p>
  <p>
    &lt;?php<br>
    echo '1&lt;br&gt;';<br>
    if(true){<br>
    echo '2&lt;br&gt;';<br>
  } else {<br>
  echo '3&lt;br&gt;';<br>
}<br>
?&gt;<br><br>
<?php
  echo '1<br>';
  if(true){
    echo '2<br>';
  } else {
    echo '3<br>';
  }
?><br>
&lt;?php<br>
echo '1&lt;br&gt;';<br>
if(false){<br>
echo '2&lt;br&gt;';<br>
} else {<br>
echo '3&lt;br&gt;';<br>
}<br>
?&gt;<br><br>
<?php
  echo '1<br>';
  if(false){
    echo '2<br>';
  } else {
    echo '3<br>';
  }
?>
</p>
<h4>13. 조건문의 활용</h4>
<p>
  <a href = "gorago.php">gorago</a>
</p>
<p>
  &lt;?php<br>
  만약에 id 값이 있다면<br>
  echo $_GET['id'];<br>
  없다면<br>
  echo "GOGO RARA";<br>
  ?&gt;<br><br>
  추천 검색어: php check value exists<br>
  => isset()
</p>
<p>
 &lt;?php<br>
 if (isset($_GET['id'])) {<br>
 echo $_GET['id'];<br>
} else <br>
echo "GOGO RARA";<br>
?&gt;<br><br>
&lt;?php<br>
if (isset($_GET['id'])) {<br>
echo file_get_contents("gorago/".$_GET['id'];<br>
} else <br>
echo "11/07 PM 14:00 Park. Jamwon Hangang";<br>
?&gt;<br><br>
</p>
<h3>반복문</h3>
<h4>14. 반복문 예고</h4>
<p>
  &lt;?php<br>
  gorago 디렉터리에 있는 파일 목록을 가져가세요, PHP님.<br>
  파일의 목록 하나하나를 li와 a태그를 이용해서 글 목록을 만드세요.<br>
  ?&gt;<br><br>
  <strong>문법보다 중요한 것은 우리가 무얼 하고자 하는가를 논리적으로 설명할 수 있는 것</strong>
</p>
<h4>15. 반복문 형식</h4>
<p>
  추천 검색어: php loop statements<br>
  공식 문서만 조회하고 싶을 때 추천 검색어: <strong>site:php.net</strong> php loop statements<br>
  => while(expr) { statement }<br><br>
  expression: 값이 올 수 있음<br>
  statemnet: if문, while문 등 값이 아닌 것
</p>
<p>
  while(true){ 실행 } (while(false) { 비실행 })<br>
  <a href="infinite_loop.php">CLICK, LUCKY !</a>
  &lt;?php<br>
  echo '1&lt;br&gt;';<br>
  while (true){<br>
  echo '2&lt;br&gt;';<br>
}<br>
echo '3&lt;br&gt;';<br>
?&gt;<br>
=> 무한 루프 걸린다
</p>
<p>
  &lt;?php 
  echo '시작&lt;br&gt;';
  $i = 0;
  while ($i<3){
    echo '반복'+$i+'&lt;br&gt;';
    $i= $i+1;
  }
  echo '끝&lt;br&gt;'
  ?&gt;
  <?php 
    echo '시작<br>';
    $i = 0;
    while ($i<3){
      echo '반복'+$i+'<br>';
      $i= $i+1;
    }
    echo '끝<br>'
  ?>
</p>
<h4>16. 배열의 형식</h4>
<p>
  정리정돈의 필요성 => 정리정돈이 되어 있지 않으면 더 큰 복잡도에 도전하지 못한다.<br><br>
  정리정돈 수단 첫번째 => 배열<br><br>
  추천 검색어: site:php.net array<br>
  => data type 중 array<br><br>
  compound(합체) type: <strong>array, object</strong>, collable, iterable
</p>
<p>
  &lt;?php
  $colors = array('blue','orange','lemon');
  echo $colors[0].'&lt;br&gt;';
  echo $colors[2].'&lt;br&gt;';
  ?&gt;<br><br>
  <?php
    $colors = array('blue','orange','lemon');
    echo $colors[0].'<br>';
    echo $colors[2].'<br>';
  ?><br>
  배열은 순서가 있음
</p>
<p>
  배열에 들어가 있는 값의 개수<br>
  추천 검색어: php array total count<br>
  => count(): return the number of elements in an array<br><br>
  &lt;?php
  var_dump(count($colors));
  ?&gt;
  <?php
    var_dump(count($colors));
  ?>
</p>
<p>
  배열에 데이터를 추가하고 싶을 때<br>
  추천 검색어: php array add value<br>
  => array.push()<br><br>
  <?php
    array_push($colors, "purple");
    var_dump($colors);
  ?>
</p>
<p>
  특정 자리에 있는 값을 지우고 싶을 때는, php array 메뉴얼에서 function들 살펴보기
</p>
<h4>17.1 반복문과 배열의 활용 1</h4>
<p>
  어떤 문제는 1년, 5년, 평생동안 해결 방법을 찾아가기도 한다.
</p>
<p>
  gorago 디렉터리 밑의 파일들의 리스트 정보를 배열에 담기<br>
  추천 검색어: site:php.net php get file list in directory<br>
  => scandir()<br><br>
  &lt;?php<br>
  $list = scandir("./gorago"); (=scandir('gorago');)<br>
  var_dump($list);<br>
  ?&gt;<br><br>
  <?php
    $list = scandir("./gorago");
    var_dump($list);
  ?>
</p>
<p>
  서로 연관된 데이터를 담는 그릇으로써 배열이 많이 쓰임
</p>
<h4>17.2 반복문과 배열의 활용 2</h4>
<p>
  &lt;?php
    $list=scandir('./gorago');
    echo "&lt;li&gt;$list&lt;/li&gt;";
    $i=0;
    while($i&lt;count($list)){
      echo "&lt;li&gt;&lt;a href=\"gorago.php?id=$list[$i]\"&gt;$list[$i]&lt;/li&gt;\n";
        $i = $i=1;
      }
    ?&gt;
    <?php
      $list=scandir('./gorago');
      echo "<li>$list</li>";
      $i=0;
      while($i<count($list)){
        echo "<li><a href=\"gorago.php?id=$list[$i]\">$list[$i]</li>\n";
          $i = $i=1;
        }
      ?>
    </p>
    <p>
      .: 현재 디렉터리<br>
      ..: 부모 디렉터리<br>
      /* */: 주석 => 메모 또는 특정 코드 비활성화
    </p>
    <h4>17.3 반복문과 배열의 활용 3</h4>
    <?php
      $list = scandir('./gorago');
      $i = 0;
      while ($i<count($list)){
        if($list != '.'){
          if($list != '..'){
            echo "<li><a href=\"gorago.php?id=$list[$i]\">$list[$i]</a><li>";
              $i = $i+1;
          }
        }
      }
    ?>
  </div>
</body>
</html>
