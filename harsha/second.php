<!DOCTYPE html>
<html>
<body>

<?php
class student{
public $studid;
public $studname;
public function __construct($studid,$studname)
{ $this->studid=$studid;
  $this->studname=$studname;
  }
 public function details(){
  return "the student name is". $this->studname . " and student id is ". $this->studid . "!";
  }
}

$studobj = new student("12","vignesh");
echo $studobj->details();
?>
</body>
</html>
