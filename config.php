<?
$dbmsHost = 'localhost'; // 또는 127.0.0.1
$dbmsId = 'root';
$dbmsPw = 'apmsetup';
$dbName = 'school';

// DB 연결
$link = mysqli_connect($dbmsHost,
$dbmsId, $dbmsPw, $dbName) or die();

// DB 연결을 UTF-8 모드로 설정
mysqli_query($link, "SET NAMES utf8;");

// 사용법 : $rows = getRows("SELECT * FROM article");
function getRows($sql) {
	// 외부에 있는 $link 변수를 함수안에서 사용하겠다는 의미
	global $link;

    // 빈 배열선언
	$rows = array();

	// SELECT * FROM article 쿼리 실행
	$result = mysqli_query($link, $sql);

	if ( $result === true ) {
		return null;
	}
	
	// 쿼리 결과를 맵으로 받아오기
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}

function getRow($sql) {
	list($row) = getRows($sql);

	return $row;
}

// 사용법 : execute("DELETE FROM article");
function execute($sql) {
	getRows($sql);
}
