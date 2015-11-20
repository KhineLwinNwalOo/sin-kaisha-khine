<?php
App::uses('CategoriesCreate', 'Model');

/**
 * CategoriesCreate Test Case
 *
 */
class CategoriesCreateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categories_create'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoriesCreate = ClassRegistry::init('CategoriesCreate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoriesCreate);

		parent::tearDown();
	}

}
