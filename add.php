<?php
include 'config.php';
?>
<meta charset="utf-8">
<h1>게시물 작성</h1>
<form action="perform_add.php" method="POST">
<input type="text" name="title" placeholder="제목">
<input type="submit" value="게시물 작성">
</form>
<div>
    <a href="list.php">리스트 페이지로 이동하기</a>
</div>
