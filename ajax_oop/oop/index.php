<?php
  // class teacher {
  //   public $name;
  //   public $age;
  //   public $address;

  //   public function teacher_name() {
  //     echo "teacher name is Bob";
  //   }

  //   public function teacher_address() {
  //     echo "Bob from Shanghai";
  //   }

  //   // public function __construct($name, $address)
  //   // {
  //   //   echo $name,"<br>";
  //   //   echo $address;
  //   // }

  //   public static $newname = 'Bob';
  // }

  // $obj = new teacher;
  // $obj->teacher_name();
  // $obj = new teacher("Bob", "Shanghai");
  // $obj = new teacher;
  // $obj->newname;

  // include
  // include 'classes/teacher.php';
  // include 'classes/student.php';
  // include 'classes/employee.php';

  // PHP魔术方法之自动加载类 __autoload()函数
  // function __autoload($class_name) {
  //   include "classes/$class_name.php";
  // }

  // 替代__autoload()的方法
  spl_autoload_register(function($class_name) {
    include "classes/$class_name.php";
  });


  $teacher = new teacher;
  $student = new student;
  $employee = new employee;

  $teacher->teacher_name();
?>