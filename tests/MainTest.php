<?php

class MainTest extends \PHPUnit_Framework_TestCase
{
	public function test_convertToDenominations()
	{
		ob_start();
		require '/../app/main.php';
		ob_end_clean();
		
		$this->assertEquals(convertToDenominations('135'), 4);
		$this->assertEquals(convertToDenominations('686'), 7);
		$this->assertEquals(convertToDenominations('1372'), 9);
		$this->assertNull(convertToDenominations('a'));
		$this->assertNull(convertToDenominations('23.2'));
	}
}