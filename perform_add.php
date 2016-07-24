<?php
include 'config.php';

$sql = "
INSERT INTO article
SET regDate = NOW(),
title = '{$_POST['title']}'
";
execute($sql);

$sql = "SELECT LAST_INSERT_ID() AS newId";
$row = getRow($sql);

$link = "detail.php?id=" . $row['newId'];
?>
<script>
location.replace('<?=$link?>');
</script>