<?php
include 'config.php';

$articleId = $_GET['id'];

execute("UPDATE article SET viewCnt = viewCnt + 1 WHERE id = '{$articleId}'");
$row = getRow("SELECT * FROM article WHERE id = '{$articleId}'");
?>
<meta charset="utf-8">
<h1>상세 페이지</h1>
ID : <?=$row['id']?><br>
등록날짜 : <?=$row['regDate']?><br>
조회수 : <?=$row['viewCnt']?><br>
제목 : <?=$row['title']?><br>
<div>
    <a href="list.php">리스트 페이지로 이동하기</a>
	<a href="add.php">생성</a>
	<a href="modify.php?id=<?=$row['id']?>">수성</a>
</div>
