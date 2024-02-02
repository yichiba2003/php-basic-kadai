<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta cherset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
        <p>
             <?php
             // クラスを定義する
             class Food {
                 // プロパティを定義する                        
                 private $name;
                 private $price;

                 public function __construct(string $name, int $price){
                  $this ->name = $name; 
                  $this ->price = $price;
                 }
 
                 public function set_price(string $name) {
                     $this->name = $name;
                 }
                 public function show_price() {
                     echo $this->price . '<br>';
                 }
             }
     
             $food = new Food('potato' , 250);

             print_r ($food);


             class Animal {                    
                 private $name;
                 private $height;
                 private $weight;
     
                 public function __construct(string $name, int $height, int $weight) {
                     $this->name = $name;
                     $this->height = $height;
                     $this->weight = $weight;
                  }
                public function set_height(string $height) {
                    $this->height = $height;
                }
                public function show_height() {
                    echo $this->height . '<br>';
                }
             }
     
             $animal = new Animal('dog', 60 , 5000);
     
             print_r($animal);


             $food -> show_price();

             $animal -> show_height();
     



      ?>
    </p>
  </body>
</html>
