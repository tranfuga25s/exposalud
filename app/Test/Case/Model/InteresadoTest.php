<?php
App::uses('Interesado', 'Model');

/**
 * Interesado Test Case
 *
 */
class InteresadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.interesado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Interesado = ClassRegistry::init('Interesado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Interesado);

		parent::tearDown();
	}

}
