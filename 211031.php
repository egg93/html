<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>로드맵 4. PHP: 211027</title>
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
    <div id="grid_list"></div>
    <div id="article">
      <h3>웹 애플리케이션</h3>
      <h4>21. 웹 애플리케이션 완성 예고</h4>
      <p>
        추가하고 싶은 파일 수동으로 추가 -> 웹 페이지를 이용하는 사용자도 추가 가능</p>
      <p>
        목표:<br> 
        1. write 버튼 누르고 제목, 타이틀 작성하고 저장 누르면 파일 및 글 목록 생성 가능<br>
        2. modify 버튼 및 기능 추가<br>
        3. 삭제 버튼 및 기능 추가<br>
      </p>
      <p>
        CRUD<br>
        <strong>Create</strong>, <strong>Read</strong>, Update, Delete<br>
        (CR이 제일 중요)
      </p>
      <h4>22. FORM과 POST</h4>
      <p>
        CRUD 중 create 하기 전 form 정리 먼저
      </p>
      <p>
        정보를 입력하고 싶을 때: text<br>
        &lt;input type="text" placeholder="title"&gt;<br>
        (placeholder: The short hint is displayed in the input field before the user enters a value. 사용자가 값을 입력하기 전에 제공되는 짧은 힌트.)<br><br>
        <input type="text" placeholder="title"><br><br>
        정보를 전송하고 싶을 때: submit<br>
        &lt;input type="submit"&gt;<br><br>
        <input type="submit"><br><br>
      </p>
      <p>
        &lt;<strong>form</strong> action="form.php"&gt;<br>
          &lt;input type="text" name="title" placeholder="Title"&gt;&lt;br&gt;<br>
          &lt;textarea name="description" placeholder="Description"&gt;&lt;/textarea&gt;&lt;br&gt;<br>
          &lt;input type="text" name="submit"&gt;<br>
        &lt;<strong>/form</strong>&gt;<br><br>
        <form action="form.php">
          <input type="text" name="title" placeholder="Title"><br>
          <textarea name="description" placeholder="Description"></textarea><br>
          <input type="submit">
        </form><br><br>
        전달하고자 하는 정보를 submit 타입과 함께 form 태그로 감싸야 한다.<br>
        form tag: 사용자가 입력한 정보를 url parameter로 만들어내는 태그<br><br>
        name: 서버 쪽에 전달하고자 하는 이름<br>
        textarea: text보다 큰 텍스트 상자
      </p>
      <p>
        file_put_contents(): php에서 파일을 저장할 때 사용되는 메서드<br>
        file_put_contents('파일의 경로','파일의 내용');
      </p>
      <p>
        url에 파라미터 정보(제목 또는 내용)가 포함되는 방식: 데이터를 서버 쪽에 전송할 때는 좋은 방식이 X<br>
        데이터를 보낼 때 또는 지울 때는 사용 X<br>
        일례로, 친구가 링크를 보냄 -> 받은 친구는 링크를 클릭한 것 뿐인데 본인이 원치 않는 글이 써짐<br><br>
        &lt;form action="porm.php" method=<strong>"post"</strong>&gt;
      </p>
      <h4>23. 글 생성 기능 구현하기</h4>
      <h4>24. 글 수정 기능 구현하기</h4>
      <h4>25. 글 삭제 기능 구현하기</h4>
    </div>
  </div>
</body>
</html>
