<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP16章課題</title>
</head>
<body>
  <p>
  <?php
  class Food{
    public $name;
    public $price;

    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
      }
    public function show_price(){
        echo $this->name , '<br>';
      }
  }
$food = new Food('potato', 250);
  class Animal{
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
  }
  }
$animal = new Animal('dog', 60, 5000);

  print_r($price);
  print_r($animal);
  ?>
  </p>
</body>
</html>