<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=bookstore;
charset=utf8', 'root', '4885');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "delete from orders where order_no = :order_no";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':order_no', $_GET['order_no']);
$stmt->execute();

 ?>
<script type="text/javascript">
  alert("<?php echo $_GET['order_no'].'번 주문을 배송처리하였습니다'  ?>");
  location.href="admin_order_list.php"
</script>
