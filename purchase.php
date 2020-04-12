<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=bookstore;
charset=utf8', 'root', '4885');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO orders(book_no, quantity, customer) value(:no,:quantity,:customer)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':no', $_GET['no']);
$stmt->bindValue(':quantity', $_GET['quantity']);
$stmt->bindValue(':customer', $_SESSION['id']);
$stmt->execute();

 ?>
<script type="text/javascript">
  alert("<?php echo $_SESSION['id'].'님, '.$_GET['title'].'을 '.$_GET['quantity'].'권 구매하셨습니다.'  ?>");
  history.back();
</script>
