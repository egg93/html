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
      <p>
        1990년 Web의 등장: 정보전달 수단, 종이에 담겨 있던 수많은 정보들이 웹페이지에 담겨지게 됨<br>
        처음엔 HTML만으로 만족, 인간의 욕심은 끝이 없다.<br>
        수많은 불만족 중 우리의 관심사는 HTML을 직접 타이핑해서 웹페이지를 수동으로 만드는 것에 지침.<br><br>
        사람이 직접 웹페이지를 하나하나 만들어야했기에 많아진 웹페이지들을 통합적으로 관리하는 게 불가능해짐.<br>
        방문자에게 웹 페이지가 보관된 폴더를 공개할 수 X, 웹 사이트의 소유자만이 콘텐츠 생산 가능.<br>
        몇몇 선구자들이 HTML 작성을 기계에게 시키고 싶다는 생각을 하게 됨 
      </p> 
      <p>
        이 욕망을 해소하기 위한 맥락으로 출현한 기술들<br>
        => <strong>PHP</strong>, JSP, ASP, Django, Ruby on Rails, Node.js
      </p>
      <p>
        HTML이 출현하고 5년 뒤, PHP 탄생. (1995.6.8)<br>
        (css 1994. 탄생, js 1995.12.4. 탄생)
      </p>
      <p>
        PHP => 웹 페이지 자동 생성 가능<br>
        사이트의 운영자가 콘텐츠의 내용을 작성해서 PHP로 넘기면 사용자 대신에 콘텐츠를 HTML로 자동으로 만들어 줌.<br>
        => 운영자는 콘텐츠에 전념할 수 있게 됨.
      </p>
      <h4>2. 수업의 목적</h4>
      <p>
        PHP가 없는 기존 HTML<br>
        웹 사이트의 리스트가 1억개인 웹 사이트에 웹 페이지를 하나 추가.<br>
        1억 개의 웹 페이지에 추가된 웹 페이지 리스트 하나를 하나하나 추가해야 함.
      </p>
      <p>
        예시)<br>
        http://127.0.0.1/<strong>index.php</strong>?id=HTML<br>
        http://127.0.0.1/<strong>index.php</strong>?id=CSS<br>
        http://127.0.0.1/<strong>index.php</strong>?id=JavaScript<br><br>
        index.php라는 단 하나의 파일로 3개의 웹 페이지 표시 가능<br>
        => 단 하나의 파일로 1억 개의 웹페이지를 단 한 번에 수정 가능
      </p>
      <h3>PHP 기초</h3>
      <h4>3. PHP 설치</h4>
      <p>
        PHP => 기본적으로 컴퓨터에 들어 있는 소프트웨어 X<br>
        그러나 1. HTML 수업을 통해 이미 웹서버 bitnami wamp를 설치한 후라면 php 설치할 필요 X<br>
        WAMP: Window Apache Mysql Php
      </p>
      <h4>4. PHP의 원리</h4>
      <p>
        컴퓨터A&mbsp;&mbsp;||&mbsp;&mbsp;컴퓨터B(서버 컴퓨터)<br>
        Web browser&mbsp;&mbsp;|index.html ->|&mbsp;&mbsp;Web server&mbsp;|&mbsp;PHP<br>
        &mbsp;&mbsp;&mbsp;&mbsp;|<- index.html|<br>
          &mbsp;&mbsp;&mbsp;&mbsp;|index.php ->|&mbsp;&mbsp;&mbsp;&mbsp;-><br>
          &mbsp;&mbsp;&mbsp;&mbsp;|<- index.html ->|&mbsp;&mbsp;&mbsp;&mbsp;<-
          </p>
          <p>
            확장자가 .php인 것은 웹 서버의 소관이 아님<br>
            (.html의 경우 web server에서 처리)<br><br>
            1. 웹 브라우저로부터 .php 파일의 요청이 올 경우, 웹 서버가 php 소프트웨어에게 해당 요청을 위임.<br>
            (웹 브라우저의 요청은 1차적으로 웹 서버가 담당.)<br><br>
            2. php 프로그램은 htdoc 디렉터리 안의 index.php 파일을 열어 컴퓨터 언어의 문법에 따라 해석, html 파일을 찍어 냄.<br><br>
            3. 웹 서버에게 다시 html 파일 전달, 웹 서버는 웹 브라우저에게 전달.<br><br>
            4. 웹 브라우저는 php의 코드가 없는 순수한 html만으로 이루어진 정보를 받을 수 있음. -> php가 아닌 html을 화면에 표시
          </p>
          <p>
            .html과 .php 소스 파일 비교<br><br>
            <?php 
            echo date('Y-m-d H:i:s');
          ?><br>
          html 소스 코드<br>
          <img src="211024_sourcecode_html.PNG" width="400" /><br><br>
          php 소스 코드<br>
          <img src="211024_sourcecode_php.PNG" width="400" />
        </p><br><br>
        .html의 경우 웹 서버의 소스 파일과 비교해서 차이 X,<br>
        .php의 경우 새로고침할 때마다 소스 코드가 동적으로 변하는 것을 확인할 수 있음.<br><br>
        html은 정적, php는 동적<br>
        (css는 디자인, java script는 반응형)
        <h4>5. PHP의 데이터 타입</h4>
        <p>
          새로운 언어를 배울 때 매우 중요한 것은 어떤 데이터 타입을 제공하는가, 그리고 각각의 데이터 타입 별로 어떻게 처리하는가, 그것을 언어가 어떠한 방식으로 제공하는가를 알아가고 파악하는 것.<br><br>
          php 데이터 타입에는 어떠한 것들이 있는가<br>
          추천 검색어: php data types<br><br>
          1차적으로 살펴볼 데이터 타입<br>
          숫자 / 문자 => int, float / string
        </p>
        <h4>5.1. PHP와 숫자</h4>
        <p>
          원래 컴퓨터는 계산을 하는 사람, 계산을 하는 직업을 의미. (르네상스 시대에)<br>
          => 컴퓨터라는 기계는 계산을 위해 고안된 기계. 그러므로 데이터 타입 중 숫자를 먼저 살펴보는 것은 역사적으로도 자연스로운 수순일 수도 있음
        </p>
        <p>
          int(integer): 정수 / float: 실수(부동소수점)
        </p>
        <p>
          &lt;?php<br><br>
          ?&gt;<br>
          php 기본 문법. 코드가 저 안에 들어있지 않으면 php가 건드리지 않고 그대로 표현<br><br>
          echo: 화면 출력. print() 또한 같은 효과
        </p>
        <p>
          php의 모든 코드는 최종적으로 사라진다.
        </p>
        <p>
          1<strong>+</strong>1의 + => 연산자(Operator)<br>
          <strong>1+1</strong>은 2를 표현 => 1+1은 숫자 2에 대한 표현식
        </p>
        <p>Number & Operator</p>
        출력<br>
        echo 1;<br>
        print(3.3);<br>
        <?php
        echo 1;
        print(3.3);
      ?><br><br>
      덧셈<br>
      echo 1+1;<br>
      <?php
      echo 1+1;
    ?><br><br>
    곱셈<br>
    echo 2*2;<br>
    <?php
    echo 2*2;
  ?><br><br>
  나눗셈<br>
  echo 4/2;<br>
  <?php
  echo 4/2;
  ?>
  <h4>5.2. PHP와 문자열</h4>
  <p>
    string literal => string을 사용할 때 쓰이는 기호들<br>
    - single quoted<br>
    - double quoted<br>
    - heredoc syntax<br>
    - nowdoc sybtax
  </p>
  <p>
    String & String Operator<br><br>
    echo 'Hello World';<br>
    echo 'Hello "W"orld';<br>
    echo "Hello 'W'orld";<br>
    echo "Hello \"W\"orld";<br><br>
    <?php
    echo 'Hello World<br>';
    echo 'Hello "W"orld<br>';
    echo "Hello 'W'orld<br>";
    echo "Hello \"W\"orld<br>";
  ?><br>
  escaping => 일시적으로 기능 해제, 순수한 문자로 사용<br>
  \: 역슬래시
</p>
<p>
  concatenation operation<br><br>
  .이라는 연산자를 통해 좌항과 우항을 결합해 하나의 문자열을 만들어낼 수 있음<br><br>
  echo "Hello "."World";<br>
  <?php
  echo "Hello "."World";
  ?>
</p>
<p>String length function<br>
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
<p>
  추천 검색어: php variables<br>
  $a=10;<br>
  echo $a+1;<br><br>
  <?php
  $a=10;
  echo $a+1;
?><br><br>
php는 변수 이름 앞에 무조건 $를 붙인다.<br><br>
lorem => 아무 의미 없는 샘플 타이핑<br><br>
$name="nana";<br>
"Lorem ipsum<strong>".$name."</strong> dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud<strong>".$name."</strong>exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat."<br><br>
<?php
$name="nana";
"Lorem ipsum".$name." dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud".$name."exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat."
?>
</p>
<h4>7. PHP의 URL 파라미터</h4>
<p>
  .php?name=nana<br>
  .php?name=gogo<br><br>
  안녕하세요. &lt;?php echo <strong>url로 넘어온 name의 값</strong> ?&gt;님<br>
  안녕하세요. &lt;?php echo <strong>$_GET['name'];</strong> ?&gt;님<br><br>
  안녕하세요. <?php echo $_GET['name']; ?>님<br><br>
  안녕하세요. &lt;?php echo <strong>$_GET['address'];</strong> ?&gt;에 사시는 &lt;?php echo <strong>$_GET['name'];</strong> ?&gt;님<br><br>
  안녕하세요. <?php echo $_GET['address']; ?>에 사시는 <?php echo $_GET['name']; ?>님<br><br>
  php?name=gogo&address=고양시<br>
  ? 뒤 => 파라미터라는 입력값<br>
  & => 파라미터에서 입력값 사이를 구분해주는 구분자
</p>
<h4>8.1. PHP 함수의 사용</h4>
<p>
  생산자가 되기 전에 소비자가 먼저 되어봐라.
</p>
<p>
  함수는 프로그래밍의 기본적인 원자 또는 부품
</p>
<p>
  $str="아 퇴근퇴근퇴근 월요병<br><br>
  아 졸려졸려졸려 월요병<br><br>
  아 김미김미김미 카페인";<br>
  echo $str;<br>
  echo strlen($str);<br>
  echo nl2br($str);<br><br>
  <?php 
  $str="아 퇴근퇴근퇴근 월요병

  아 졸려졸려졸려 월요병

  아 김미김미김미 카페인";
  echo $str;
  echo strlen($str);
  echo nl2br($str);
  ?><br><br>
  문자열이 몇 개의 문자로 이루어져 있는지 알려주는 함수<br>
  추천 검색어: php string length<br>
  => strlen();<br><br>
  문자열에서 줄바꿈을 자동으로 &lt;br&gt;로 바꾸어주는 함수<br>
  추천 검색어: php new line to br<br>
  => nl2br();
</p>
<h4>8.2. PHP 함수의 사용</h4>
<p>
  웹 브라우저 파라미터를 통해 웹 서버에 있는 파일의 내용을 불러올 수 있는 방법<br><br>
   우선 new directory 생성<br><br>
  &lt;?php<br>
  echo gorago/id 값에 해당하는 파일의 내용;<br>
  ?&gt;<br><br>
  추천 검색어: php file read function<br>
  => file.get.contents<br><br>
  &lt;?php<br> 
  echo file.get.contents("gorago/gogo");<br>
  ?&gt;<br><br>
  echo file.get.contents("gorago/".$_GET['id']);<br><br>
  <?php 
  echo file.get.contents("gorago/".$_GET['id']);
  ?>
</p>
<p>
  우리가 살펴본 예제는 공부하기엔 나쁘지 않지만 실질적으로 해당 함수들로 코드할 경우 보안성 등 여러 부분에서 위험하다. 이대로 코드하는 것은 절대 금물
</p>
<h4>9. PHP와 제어문 예고</h4>
<p>
  프로그래밍 => 순서<br>
  일 => 작업과 시간의 순서
</p>
<p>
  조건문: 시간의 흐름 + 조건에 따라 다르게<br>
  반복문: 시간의 흐름 + 조건에 따라 반복
</p>
</div>
</body>
</html>
