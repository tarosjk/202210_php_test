<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  
  <?php
  echo 'Hello, world!';
  ?>
  <?= 'こんにちは'; ?>
  <br>
  <?php
  $name = 'ケンシロウ';
  $name = 'ラオウ';
  echo $name;
  ?>
  <br>
  <?php
  define('NAME', 'トキ');
  echo NAME;
  ?>
  <br>
  <?php
  $strOne = '私の名前は';
  $strTwo = 'ケンシロウです。';
  echo $strOne . $strTwo;
  ?>
  <br>
  <?php
  echo "私の名前は{$strTwo}よろしく";
  ?>
  <br>
  <?php
  echo "私の好きな野菜はキャベツです。\n";
  echo "\t私の好きな果物はぶどうです。";
  ?>

  <br>

  <?php
  var_dump(true);
  var_dump(false);
  var_dump('りんご');
  var_dump(['りんご','ばなな','なし']);
  echo '<br>';
  var_dump(5 == '5');
  var_dump(5 === '5');
  ?>

  <br>

  <?php
  if("あ") {
    echo 'trueです';
  }
  ?>

  <br>

  <?php
  $fruits = [
    ['name' => 'りんご', 'price' => 100],
    ['name' => 'なし', 'price' => 120],
    ['name' => 'みかん', 'price' => 90],
  ];
  foreach($fruits as $fruit) {
    if( $fruit['price'] >= 110 ){
      continue;
    }
    echo "{$fruit['name']}は{$fruit['price']}円です。";
  }
  ?>

  <br>

  <?php
  $price = 1000;

  function formatYenPrice($price = 500){
    return number_format($price) . '円';
  }

  echo formatYenPrice(2000);

  ?>

  <br>

  <?php
  $name = 'ケンシロウ';

  function outputName() {
    global $name;
    echo $name;
  }

  outputName();

  function outputName2(&$name) {
    $name = 'ラオウ';
  }
  outputName2($name);
  echo $name;

  ?>

</body>

</html>


