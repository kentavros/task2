Calculator<br />
<hr>
Number 1:<?php  echo " ".$calc->getNum1()."<br />"; ?>
Number 2:<?php  echo " ".$calc->getNum2()."<br />"; ?>
Plus: 
<?php echo $calc->plus()."<br />"; ?>
Minus: 
<?php echo $calc->minus()."<br />"; ?>
Multiplication: 
<?php echo $calc->multipl()."<br />"; ?>
Devide: 
<?php echo $calc->devide()."<br />"; ?>
Sqrt number 1: 
<?php echo $calc->sqrt($calc->getNum1())."<br />"; ?>
Sqry number 2: 
<?php echo $calc->sqrt($calc->getNum2())."<br />"; ?>
Percent :
<?php echo $calc->percent()."%<br />"; ?>
Memory save 350:
<?php echo $calc->setMS(350)."<br />"; ?>
Memory read:
<?php echo $calc->getMR()."<br />"; ?>
Memory add 100:
<?php echo $calc->addM(100). "<br />"; ?> 
Memory minus 200: 
<?php echo $calc->minusM(200)."<br />"; ?> 
Memory clear:
<?php echo $calc->cleanM()."<br />"; ?>


