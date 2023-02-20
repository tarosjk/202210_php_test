<?php
require('template/dbconnect.php');

// echo $_GET['id'];
if( isset($_GET['id']) ) {

  $stmt = $db->prepare('SELECT * FROM pizzas WHERE id = ?');
  $stmt->bindValue(1, $_GET['id']);

  if( $stmt->execute() ) {
    // データベースへの要求成功
    $pizza = $stmt->fetch(); //１件のみ取得

  }

} else {
  // ?id=番号 が設定されていないリクエストの場合
  header('location:pizza.php');
  exit;
}

?>
<?php require('template/header.php'); ?>

<div class="container">
  <h2 class="text-center display-4 my-5">Pizza Detail</h2>

  <h3 class="text-center mb-5"><?= $pizza['pizzaname']; ?></h3>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <p>トッピング: <?= $pizza['toppings']; ?></p>
        <p>シェフ: <?= $pizza['chefname']; ?></p>
        <p>登録日: <?= $pizza['created_at']; ?></p>
      </div>
    </div>
  </div>

</div>

<?php require('template/footer.php'); ?>