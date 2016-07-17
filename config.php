<?

$dbmsHost = 'localhost'; // 또는 127.0.0.1
$dbmsID = 'root';
$dbmsPw = 'apmsetup';
$dbName = 'blog';

//DB 연결
$link = mysqli_connect($dbmsHost, $dbmsID, $dbmsPw, $dbName) or die();

//DB연결을 utf-8 모드로 설정 
mysqli_query($link, "SET NAMES utf8;");

//사용법 : 
function getrows($sql){
 // 외부에 있는 $link 변수를 함수안에서 사용하겠다는 의미
	global $link;

	// 빈 배열선언
	$rows = array();

	//SELECT * FROM artile 쿼리 실행
	$result = mysqli_query($link, $sql);
	
	if ( $result === true) {
	
		return null;
	
	} 
	
	//쿼리 결과를 맵으로 받아오기
	while ( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}

	return $rows;
}

// 사용법 : execute("DELETE FROM article");
function execute($sql){
	getRows($sql);
}