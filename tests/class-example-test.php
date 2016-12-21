<?php

namespace HM\ExamplePlugin\Tests;

use HM\ExamplePlugin;
use PHPUnit_Framework_TestCase;
use WP_UnitTestCase;

class Example_Test extends PHPUnit_Framework_TestCase {
	public function test_cast_int_to_bool() {
		$should_be_true = (bool) 1;
		$this->assertTrue( $should_be_true );
	}

	public function test_plugin_loaded() {
		$this->assertTrue( defined( 'HM\\ExamplePlugin\\VERSION' ) );
	}
}
