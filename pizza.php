<?php
  require('template/dbconnect.php');

  $sql = 'SELECT * FROM pizzas ORDER BY created_at DESC';
  $result = $db->query($sql);
  $pizzas = $result->fetchAll();

  echo '<pre>';
  // var_dump($result);
  // var_dump($result->fetchAll());
  // var_dump($pizzas);
  echo '</pre>';

?>
<?php require('template/header.php'); ?>

<div class="container">
  <h2 class="text-center my-5 display-4">Our Special Pizzas</h2>

  <div class="row">
    <?php foreach($pizzas as $pizza): ?>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?= $pizza['pizzaname']; ?></h3>
          <p class="card-text"><?= $pizza['toppings']; ?></p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">詳細を見る</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

</div>

<?php require('template/footer.php'); ?>