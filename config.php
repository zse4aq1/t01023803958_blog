<?

$dbmsHost = 'localhost'; // �Ǵ� 127.0.0.1
$dbmsID = 'root';
$dbmsPw = 'apmsetup';
$dbName = 'blog';

//DB ����
$link = mysqli_connect($dbmsHost, $dbmsID, $dbmsPw, $dbName) or die();

//DB������ utf-8 ���� ���� 
mysqli_query($link, "SET NAMES utf8;");

//���� : 
function getrows($sql){
 // �ܺο� �ִ� $link ������ �Լ��ȿ��� ����ϰڴٴ� �ǹ�
	global $link;

	// �� �迭����
	$rows = array();

	//SELECT * FROM artile ���� ����
	$result = mysqli_query($link, $sql);
	
	if ( $result === true) {
	
		return null;
	
	} 
	
	//���� ����� ������ �޾ƿ���
	while ( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}

	return $rows;
}

// ���� : execute("DELETE FROM article");
function execute($sql){
	getRows($sql);
}