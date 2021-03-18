<?php

declare(strict_types = 1);

namespace mepihindeveloper\components;

use InvalidArgumentException;
use mepihindeveloper\components\interfaces\EntityInterface;
use ReflectionClass;

/**
 * Класс Entity
 *
 * Реализует управление списком констант
 */
class Entity implements EntityInterface {
	
	/**
	 * @var array Список
	 */
	protected static array $map;
	
	/**
	 * @inheritDoc
	 */
	public static function getConstants(): array {
		$reflectionClass = new ReflectionClass(__CLASS__);
		
		return $reflectionClass->getConstants();
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getMapValueByKey(string $key)
	{
		if (!self::has($key))
		{
			throw new InvalidArgumentException("Ключ {$key} отсутствует.");
		}
		
		return self::$map[$key];
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getMap(string $key = ''): array
	{
		if (empty($key))
		{
			return self::$map;
		}
		
		if (!self::has($key))
		{
			throw new InvalidArgumentException("Ключ {$key} отсутствует.");
		}
		
		return [$key => self::$map[$key]];
	}
	
	/**
	 * @inheritDoc
	 */
	public static function has(string $key): bool
	{
		return array_key_exists($key, self::$map);
	}
}