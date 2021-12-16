<?php

use Codeception\Test\Unit;
use mepihindeveloper\components\Entity;

/**
 * Класс EntityTest
 *
 * Реализует тестирование управление списком констант
 */
class EntityTest extends Unit {
	
	/**
	 * @var UnitTester
	 */
	protected $tester;
	protected ?Entity $entity;
	protected array $mapValues = ['a' => 'aa'];
	
	public function testKeyIsString() {
		$key = 'a';
		$this->assertIsString($key);
		
		return $key;
	}
	
	/**
	 * @depends testKeyIsString
	 */
	public function testHas(string $key) {
		$this->assertTrue($this->entity::has($key));
	}
	
	public function testGetMap() {
		$this->assertGreaterThanOrEqual(1, $this->entity::getMap());
	}
	
	/**
	 * @depends testKeyIsString
	 */
	public function testGetMapWithKey(string $key) {
		$this->assertSame($this->mapValues, $this->entity::getMap($key));
	}
	
	public function testGetMapWithKeyWithException() {
		$key = 'b';
		$this->expectException(InvalidArgumentException::class);
		$this->entity::getMap($key);
	}
	
	/**
	 * @depends testKeyIsString
	 */
	public function testGetMapValueByKey(string $key) {
		$this->assertSame('aa', $this->entity::getMapValueByKey($key));
	}
	
	public function testGetMapValueByKeyWithException() {
		$key = 'b';
		$this->expectException(InvalidArgumentException::class);
		$this->entity::getMapValueByKey($key);
	}
	
	public function testGetConstants() {
		$this->assertSame([], $this->entity::getConstants());
	}
	
	protected function _before() {
		$this->entity = $this->make(Entity::class, ['map' => $this->mapValues]);
	}
	
	protected function _after() {
		$this->entity = null;
	}
}