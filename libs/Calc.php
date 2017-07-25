<?php

class Calc
{
private $num1;
private $num2;
private $ms;

 

public function setNum1($num)
{
	if(is_numeric($num))
	{
		$this->num1=$num;
	} else
	{
		echo "it's not numeric"; 
	}	
}

public function getNum1()
{

	return $this->num1;

}

public function setNum2($num)
{
	if(is_numeric($num))
	{
	 	$this->num2=$num;
	} else	
	{
		echo "It's not numeric";
	}
}

public function getNum2()
{

	return $this->num2;

}

public function plus()
{
	$total = $this->getNum1()+$this->getNum2(); 
	return $total;
}
public function minus()
{
	$total = $this->getNum1() - $this->getNum2();
	return $total;

}

public function multipl()
{
	$total = $this->getNum1() * $this->getNum2();
	return $total;
}


public function devide()
{
	if ($this->getNum2() !== 0)
	{
		$total = $this->getNum1() / $this->getNum2();
		return $total;
	} else 
	{
		echo "Error devide by zero!";	
	}
}

public function sqrt($num)
{
	$total = sqrt($num);
	return $total;
}

public function percent()
{
	$total = $this->getNum2() * 100 / $this->getNum1();
	return $total;
}
//MS
public function setMS($total)
{
	$this->ms = $total;	
}
//MR

public function getMR()
{
	return $this->ms;
}

//M+
public function addM($num)
{
	$this->ms += $num;
	return $this->ms;
}
//M-
public function minusM($num)
{
	$this->ms -=$num;
	return $this->ms;
}
//MC
public function cleanM()
{
	unset($this->ms);
	return $this->ms;
}



}



?>
