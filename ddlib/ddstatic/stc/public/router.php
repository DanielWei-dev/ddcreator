<?php

// +----------------------------------------------------------------------
// | 版权所有 2014~2024 魏东 [ 54928382@qq.com]
// +----------------------------------------------------------------------

if (is_file($_SERVER['DOCUMENT_ROOT'] . $_SERVER['SCRIPT_NAME'])) {
    return false;
} else {
    $_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/index.php';
    require $_SERVER['SCRIPT_FILENAME'];
}