<?php

namespace G;

class GTest extends \PHPUnit_Framework_TestCase {
	public function testBasicGenerator() {
		$items = iterator_to_array(function() {
			for($i = 0; $i<10; $i++) {
				yield $i;
			}
		});

		$this->assertEquals(array(0,1,2,3,4,5,6,7,8,9), $items);
	}
}