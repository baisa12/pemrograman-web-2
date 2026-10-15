<?php


if (!defined('MYSQL_BOTH'))  define('MYSQL_BOTH', MYSQLI_BOTH);
if (!defined('MYSQL_NUM'))   define('MYSQL_NUM', MYSQLI_NUM);
if (!defined('MYSQL_ASSOC')) define('MYSQL_ASSOC', MYSQLI_ASSOC);

global $__compat_link;
$__compat_link = null;

if (!function_exists('mysql_connect')) {

    function mysql_connect($server = 'localhost', $user = 'root', $pass = '') {
        global $__compat_link;
        mysqli_report(MYSQLI_REPORT_OFF);
        $link = @mysqli_connect($server, $user, $pass);
        if ($link) { $__compat_link = $link; return $link; }
        return false;
    }

    function mysql_select_db($db, $link = null) {
        global $__compat_link;
        return mysqli_select_db($link ?: $__compat_link, $db);
    }

    function mysql_query($q, $link = null) {
        global $__compat_link;
        return mysqli_query($link ?: $__compat_link, $q);
    }

    function mysql_db_query($db, $q, $link = null) {
        global $__compat_link;
        $c = $link ?: $__compat_link;
        mysqli_select_db($c, $db);
        return mysqli_query($c, $q);
    }

    function mysql_fetch_row($r) {
        return ($r instanceof mysqli_result) ? mysqli_fetch_row($r) : false;
    }

    function mysql_fetch_array($r, $type = MYSQLI_BOTH) {
        return ($r instanceof mysqli_result) ? mysqli_fetch_array($r, $type) : false;
    }

    function mysql_num_rows($r) {
        return ($r instanceof mysqli_result) ? mysqli_num_rows($r) : false;
    }

    function mysql_close($link = null) {
        global $__compat_link;
        $c = $link ?: $__compat_link;
        if ($c instanceof mysqli) { $res = mysqli_close($c); if ($c === $__compat_link) $__compat_link = null; return $res; }
        return false;
    }

    function mysql_error($link = null) {
        global $__compat_link;
        $c = $link ?: $__compat_link;
        return ($c instanceof mysqli) ? mysqli_error($c) : mysqli_connect_error();
    }
}
