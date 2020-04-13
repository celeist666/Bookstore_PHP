<?php
error_reporting(E_ALL);

ini_set("display_errors", 1);
if (isset($_POST['id'])) {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=bookstore;
charset=utf8', 'root', '4885');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'INSERT INTO mem SET id = :id, pwd = :pwd, email = :email, address = :address, num =:num';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->bindValue(':pwd', $_POST['pwd']);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':address', $_POST['address']);
        $stmt->bindValue(':num', $_POST['num']);
        $stmt->execute();
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    }
}
?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>회원가입</title>
    <script type="text/javascript">alert('회원가입을 축하드립니다!!');
    location.href="login.html";</script>
  </head>
  <body>

  </body>
</html>
