<?php

require_once dirname(__FILE__).'/db_connection.php';

$sql = 'select * from articles';
//if (empty($pod)) {
//    print 'err';
//    return;
//}
$prepare = $pod->query($sql);
print $prepare;
