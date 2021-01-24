<?php

require_once dirname(__FILE__).'/../db_connection.php';

const sql = 'select * from articles';
if (empty($pdo)) {
    print 'err';
    return;
}
$prepare = $pdo->query(sql);
$result = $prepare->fetchAll();
echo(json_encode($result));