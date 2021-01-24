<?php
phpinfo();
//preg_match('|' . dirname($_SERVER['SCRIPT_NAME']) . '/([\w%/]*)|', $_SERVER['REQUEST_URI'], $matches);
//$paths = explode('/', $matches[1]);
//$id = isset($paths[1]) ? htmlspecialchars($paths[1]) : null;
//switch (strtolower($_SERVER['REQUEST_METHOD']) . ':' . $paths[0]) {
//    case 'get:user':
//        if ($id) echo "ユーザー #{$id} 取得";
//        else  phpinfo();
//        break;
//    case 'post:user':
//        echo 'ユーザー 登録';
//        break;
//    case 'put:user':
//        echo "ユーザー #{$id} 更新";
//        break;
//    case 'delete:user':
//        echo "ユーザー #{$id} 削除";
//        break;
//}