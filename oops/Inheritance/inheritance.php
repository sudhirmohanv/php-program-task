<?php
class parentClass
{
   public function display()
   {
       echo "This is parent class display.<br />";
   }
}

class childClass extends parentClass
{
    public function display()
    {
        echo "This child class sudhir mohan";
    }
}
$pObj = new parentClass();
 $pObj->display();

$cObj = new childClass();
$cObj->display();
?>