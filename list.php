<?php
include 'config.php';

$rows = getRows("SELECT * FROM article ORDER BY id DESC LIMIT 100");
?>
<meta charset="utf-8">
<h1>리스트 페이지</h1>
<? foreach ( $rows as $row ) { ?>
ID : <?=$row['id']?><br>
등록날짜 : <?=$row['regDate']?><br>
조회수 : <?=$row['viewCnt']?><br>
제목 : <?=$row['title']?><br>
<a href="detail.php?id=<?=$row['id']?>">상세페이지로 이동</a>
<a href="perform_delete.php?id=<?=$row['id']?>">삭제</a>
<hr>
<? } ?>
<a href="add.php">생성</a>