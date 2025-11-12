<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
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

           //メソッドを定義する
           public function set_price(int $price){
            $this->price = $price;
           }
           public function show_price(){
            echo $this->price. '<br>';
           }
       
       //コンストラクタを定義する
       function __construct(string $name, int $price){
        $this->name= $name;
        $this->price = $price;
       }
    }
       //インスタンス化する
       $food = new Food('patato', 250);

       //メソッドにアクセス
       $food->show_price();
       print_r($food);
    
       class Animal{
        //プロパティを定義する
        private $name;
        private $height;
        private $weight;

         //メソッドを定義する
         public function set_height(int $height){
         $this->height = $height;
           }
        public function show_height(){
            echo $this->height. '<br>';
           }
    
       //コンストラクタを定義する
       function __construct(string $name, int $height, int $weight){
        $this->name= $name;
        $this->height = $height;
        $this->weight = $weight;
       }

       }

       //インスタンス化する
       $animal = new Animal('dog', 60, 5000);

       //メソッドにアクセス
       $animal->show_height();
       print_r($animal);

       ?>
   </p>
</body>

</html>