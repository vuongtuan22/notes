<?php
App::uses('Commentmetum', 'Model');

/**
 * Commentmetum Test Case
 *
 */
class CommentmetumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Commentmetum = ClassRegistry::init('Commentmetum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Commentmetum);

		parent::tearDown();
	}

}
