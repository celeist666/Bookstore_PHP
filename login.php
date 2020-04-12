<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
<?php
error_reporting(E_ALL);

ini_set("display_errors", 1);
if (isset($_SESSION['id'])) {?>
    <?="<script>alert('이미 로그인 되어있습니다');location.href='index.php';</script>"; ?><?php
}
if (isset($_POST['id'])) {
    try {
        
        $pdo = new PDO('mysql:host=localhost;dbname=bookstore;
charset=utf8', 'root', '4885');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'select * from mem where id = :id and pwd = :pwd';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->bindValue(':pwd', $_POST['pwd']);
        $stmt->execute();
        
       $row = $stmt -> fetch();
        if (empty($row)) {?>
            <?="<script>alert('일치하는 계정이 없습니다');location.href='login.html';</script>"; ?><?php
        }
        else {?>
            <?="<script>alert('"?><?= $_POST['id']?><?="님, 환영합니다!!');location.href='index.php';</script>"; ?><?php
            $_SESSION['id'] = $_POST['id'];
        }
        
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    }
}
?>
    <meta charset="utf-8">
    <title>로그인</title>
  </head>
  <body>
  </body>
</html>
