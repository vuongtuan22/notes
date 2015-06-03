<?php
App::uses('Usermetum', 'Model');

/**
 * Usermetum Test Case
 *
 */
class UsermetumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Usermetum = ClassRegistry::init('Usermetum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usermetum);

		parent::tearDown();
	}

}
