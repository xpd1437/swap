<?php
/**
 * PSS 请求入口
 */
require_once __DIR__ . '/../path.php';
if (is_readable(swap\root_dir . '/close.php')) {
    header('Content-Type: text/css');
    exit('');
}
require_once swap\swap_dir . '/swap.php';
swap\framework::serve_pss_request();
