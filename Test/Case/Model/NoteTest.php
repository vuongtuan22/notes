<?php
App::uses('Note', 'Model');

/**
 * Note Test Case
 *
 */
class NoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.note',
		'app.user',
		'app.group',
		'app.usermeta',
		'app.comment',
		'app.commentmeta',
		'app.notemeta',
		'app.category',
		'app.notes_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Note = ClassRegistry::init('Note');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Note);

		parent::tearDown();
	}

}
