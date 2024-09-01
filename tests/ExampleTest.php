<?php
/**
 * Class ExampleTest
 *
 * @created      08.03.2024
 * @author       steinhaug <steinhaug@gmail.com>
 * @copyright    2024 smiley
 * @license      MIT
 */
declare(strict_types=1);

namespace kista\LibraryTemplateTest;

use kista\LibraryTemplate\Example;
use PHPUnit\Framework\TestCase;

/**
 *
 */
class ExampleTest extends TestCase{

	public function testInstance():void{
		$obj = new Example;

		$this::assertInstanceOf(Example::class, $obj);
		$this::assertSame('hi', $obj->hello());
	}

}
