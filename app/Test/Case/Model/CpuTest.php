<?php
App::uses('Cpu', 'Model');

/**
 * Cpu Test Case
 *
 */
class CpuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cpu',
		'app.item',
		'app.order',
		'app.items_cpus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cpu = ClassRegistry::init('Cpu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cpu);

		parent::tearDown();
	}

}
