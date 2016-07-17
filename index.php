<?
include 'config.php';
include 'header.php';

$name = "김건우";

$articles = getRows("SELECT * FROM article ORDER BY id DESC");

?>

<h1><?=$name?> 블로그 메인 페이지입니다.</h1>

<h1>ㅇㅇㅇㅇ </h1>


<?
include 'footer.php';
?>