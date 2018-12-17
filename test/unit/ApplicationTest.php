<?php

// require_once '../../authorization/Posts.php';

use \PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
	// public function setUpBeforeClass ()
	// {
	// 	print_r('setUpBeforeClass');
	// }
	
	// public function setUp () //здесь можно занести нового польз-лля в базу для последующего тестирования
	// {


	// 	// print_r('setUp');
	// }
	
	public function testRun() {

		$myposts = new Posts();
		$array = ['a', 'b', 'c'];
		$res = $myposts->isNotEmpty($array);
		$this->assertTrue($res);


		// $this->assertTrue(true); //ожидал в результате true
		// $this->assertFalse(fase); 
		// $this->assertEquals('a', 'a'); //
		// $this->assertNotEquals('a', 'b');
		// //assertCount
		// // $this->assertNull(null);
		// $this->expectException(Throwable::class);
		// $this->expectExceptionMessage('text');


	}
	// public function testRun2() {
	// 	$this->markTestSkipped();
	// }

	// public function tearDown () //здесь удаляем того созданного для теста пользователя
	// {
	// 	print_r('tearDown');
	// }
	// public function tearDownAfterClass ()
	// {
	// 	print_r(__METHOD__);
	// }
}
?>