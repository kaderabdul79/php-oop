<?php

class Customer
{
	private $name;

	public function getName()
	{
		return $this->name;
	}
    public function setName($name)
	{
		$this->name = $name;
	}
}

$customer = new Customer();
$customer->setName("kader");
echo $customer->getName();


