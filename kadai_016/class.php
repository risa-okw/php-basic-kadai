<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>PHP基礎編</title>
</head>

<body>
  <p>
     <?php
     // クラスを定義する
     class Food {
      //プロパティを定義する
      public $name;
      public $price;
       //メソッドを定義する
      public function show_price(int $price){
        $this->price = $price;
      }
      //コンストラクタを定義する
      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
     }
      //インスタンス化する
      $food = new Food('onion', 100);

      //インスタンス$userの各プロパティの値を出力する
      print_r($food);
    ?>
  </p>
  <p>
    <?php
       // クラスを定義する
      class Animal {
       //プロパティを定義する
        public $name;
        public $height;
        public $weight;

         //メソッドを定義する
        public function show_height(int $height){
         $this->height = $height;
        }
        //コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight){
         $this->name = $name;
         $this->height = $height;
         $this-> weight = $weight;
        }
      }
        //インスタンス化する
        $animal = new Animal('dog', 25, 1700);

        //インスタンス$userの各プロパティの値を出力する
        print_r($animal);

        echo '<br>' . $food->price . '<br>';
        echo $animal->height;
    ?>
  </p>
</body>

</html>