<?php 
  require('template/dbconnect.php');

  // エラーメッセージ用配列
  $errors = [
    'pizza-name' => '',
    'chef-name' => '',
    'toppings' => '',
  ];

  $pizzaname = $chefname = $toppings = '';

  if( isset($_POST['submit']) ){
    
    // 必須入力チェック
    if( empty($_POST['pizza-name']) ) {
      $errors['pizza-name'] = 'ピザの名前は必須です';
    } else {
      $pizzaname = $_POST['pizza-name'];
    }

    if( empty($_POST['chef-name']) ) {
      $errors['chef-name'] = 'シェフの名前は必須です';
    } else {
      $chefname = $_POST['chef-name'];
    }

    if( empty($_POST['toppings']) ) {
      $errors['toppings'] = 'トッピングは必須です';
    } else {
      $toppings = $_POST['toppings'];
    }

    // エラー最終チェック
    if( !array_filter($errors) ) {
      // pizza.phpにリダイレクト
      header('location:pizza.php');
      exit; //処理をストップ
    }

  }
?>
<?php require('template/header.php'); ?>

<div class="container">
  <h1 class="h4 text-center my-5">ピザの追加</h1>

  <div class="row justify-content-center">
    <!-- 768以上で8カラム、768未満は12カラム -->
    <div class="col-md-8 bg-white p-4 rounded">
      <form action="add.php" method="post">
        <!-- ピザの名前, シェフの名前, トッピング -->
        <div class="mb-3">
          <label for="pizza-name" class="form-label">ピザの名前</label>
          <input type="text" class="form-control" id="pizza-name" name="pizza-name" value="<?= htmlspecialchars($pizzaname); ?>">
          <small class="text-danger"><?= $errors['pizza-name']; ?></small>
        </div>
        <div class="mb-3">
          <label for="chef-name" class="form-label">シェフの名前</label>
          <input type="text" class="form-control" id="chef-name" name="chef-name" value="<?= htmlspecialchars($chefname); ?>">
          <small class="text-danger"><?= $errors['chef-name']; ?></small>
        </div>
        <div class="mb-3">
          <label for="toppings" class="form-label">トッピング</label>
          <input type="text" class="form-control" id="toppings" name="toppings" value="<?= htmlspecialchars($toppings); ?>">
          <small class="text-danger"><?= $errors['toppings']; ?></small>
        </div>
        <div class="text-center">
          <button class="btn btn-primary" name="submit" value="submit">追加する</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require('template/footer.php'); ?>