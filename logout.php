<?php
session_start();
session_destroy();

error_reporting(E_ALL);

ini_set("display_errors", 1);?>
<?="<script>alert('로그아웃 되었습니다');location.href='index.php';</script>"; ?>