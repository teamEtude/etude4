<?php
App::uses('GroupMember', 'Model');

/**
 * GroupMember Test Case
 *
 */
class GroupMemberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group_member'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroupMember = ClassRegistry::init('GroupMember');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroupMember);

		parent::tearDown();
	}

}
