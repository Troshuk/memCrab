<?php
// class Model1 {
//    public static $table='table';
// }
// class User1 extends Model1 {
//       public static $table='users';
//    public static function getTable() {
//       return self::$table;
//   }
// }
// echo User1::getTable() . "\n"; //выведет 'table' 
// class User_1 extends User1{
//       public static $table='users_1';
// }
// echo User_1::getTable() . "\n"; //выведет 'table' 


// class Model2 {
//    public static $table='table2';
//    public static function getTable() {
//       return static::$table;
//   }
// }
// class User2 extends Model2{
//   public static $table='users2';
// }
// echo User2::getTable() . "\n"; //выведет 'users'
// class User_2 extends User2{
//   public static $table='users_2';
// }
// echo User_2::getTable() . "\n"; //выведет 'users'







class Model3 {
   public static $table='table3';
   public static function foo() {
      echo "1_test3";
      }
    }
class User3 extends Model3{
       public static function foo() {
      echo "2_test3";
      parent::foo();
      }
   }
echo User3::foo() . "\n"; //выведет '2_test1_test'
class User_3 extends User3{
       public static function foo() {
      echo "2_test_3";
      parent::foo();
      }
   }
echo User_3::foo() . "\n"; //выведет '2_test1_test'