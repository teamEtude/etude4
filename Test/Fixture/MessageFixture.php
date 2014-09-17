<?php
/**
 * MessageFixture
 *
 */
class MessageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'messageID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'from' => array('type' => 'integer', 'null' => false, 'default' => null),
		'to' => array('type' => 'integer', 'null' => false, 'default' => null),
		'message' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 511, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'groupMessage' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'time' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'messageID', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'messageID' => 1,
			'from' => 1,
			'to' => 1,
			'message' => 'Lorem ipsum dolor sit amet',
			'groupMessage' => 1,
			'time' => 1410937826
		),
	);

}
