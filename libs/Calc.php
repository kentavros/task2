<?php
class Calc
{
	private $num1;
	private $num2;
	private $ms;

	/**
	 * Set values1
	 * @param $num
	 * @return true
	 */
	public function setNum1($num)
	{
		if(is_numeric($num))
		{
			$this->num1=$num;
			return true;
		} else
		{
			return NOT_NUMERIC;
		}
	}
	/**
	 * Geting values1
	 * @return mixed
	 *
	 */
	public function getNum1()
	{
		if (isset($this->num1))
		{
            return $this->num1;
		}
		else
		{
			return NOT_SET;
		}
	}

	/**
	 * Set values2
	 * @param $num
	 * @return true
	 */
	public function setNum2($num)
	{
		if(is_numeric($num))
		{
			$this->num2=$num;
			return true;
		}
		else
		{
            return NOT_NUMERIC;
		}
	}
	/**
	 * Geting values2
	 * @return mixed
	 *
	 */
	public function getNum2()
	{
        if (isset($this->num2))
        {
            return $this->num2;
        }
        else
        {
            return NOT_SET;
        }
	}

	/**
	 * Plus method
	 * @return mixed
	 */
	public function plus()
	{
		$total = $this->num1+$this->num2;
		return $total;
	}

	/**
	 * Minus values
	 * @return array
	 */
	public function minus()
	{
		$total[1] = $this->num1 - $this->num2;
		$total[2] = $this->num2 - $this->num1;
		return $total;

	}

    /**
	 * Multiplication of values
     * @return mixed
     */
	public function multipl()
	{
		$total = $this->num1 * $this->num2;
		return $total;
	}


    /**
     * Division of values
	 * @return float|int
     */
	public function devide()
	{
		if ($this->num2 !== 0)
		{
			$total[1] = $this->num1 / $this->num2;
		} else
		{
            $total[1] = ERROR_DEVIDE;
		}
        if ($this->num1 !== 0)
        {
            $total[2] = $this->num2 / $this->num1;
        } else
        {
            $total[2] = ERROR_DEVIDE;
        }
        return $total;
	}

    /**
	 * Sqrt value
     * @param $num
     * @return array $total
     */
	public function sqrt()
	{
		if ($this->num1 > 0)
		{
			$total[1] = sqrt($this->num1);
		}
		else
		{
           $total[1]= NEGATIVE_NUM;
		}
        if ($this->num2 > 0)
        {
            $total[2] = sqrt($this->num2);
        }
        else
        {
            $total[2] = NEGATIVE_NUM;
        }
        return $total;
	}

    /**
	 * Percent value2 of value 1
     * @return array
     */
	public function percent()
	{
		$total[1] = $this->num2 * 100 / $this->num1;
		$total[2] = $this->num1 * 100 / $this->num2;
		return $total;
	}

	//MS
	public function setMS($save)
	{
		$this->ms = $save;
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
