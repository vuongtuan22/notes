<?php
App::uses('Notemetum', 'Model');

/**
 * Notemetum Test Case
 *
 */
class NotemetumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Notemetum = ClassRegistry::init('Notemetum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Notemetum);

		parent::tearDown();
	}

}
