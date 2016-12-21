<?php

namespace HM\ExamplePlugin\Tests;

use HM\ExamplePlugin;
use WP_UnitTestCase;

class Plugin_Test extends WP_UnitTestCase {
	/**
	 * Don't back up global variables (in particular, wpdb) by default.
	 *
	 * @link https://core.trac.wordpress.org/ticket/39327
	 */
	protected $backupGlobals = false;

	public function setUp() {
		parent::setUp();

		$this->author_id = $this->factory->user->create([
			'role' => 'author',
		]);
		wp_set_current_user( $this->author_id );
	}

	public function test_author_defaults_to_current_user() {
		$post_id = $this->factory->post->create();
		$post = get_post( $post_id );

		$this->assertEquals( $this->author_id, $post->post_author );
	}
}
