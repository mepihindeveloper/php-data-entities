<?php

declare(strict_types = 1);

namespace mepihindeveloper\components\interfaces;

use InvalidArgumentException;

/**
 * Интерфейс EntityInterface
 *
 * Декларирует методы обязательные для реализации компонента Entity
 */
interface EntityInterface {
	
	/**
	 * Проверяет наличие ключа в списке
	 *
	 * @param string $key Ключ
	 *
	 * @return bool
	 */
	public static function has(string $key): bool;
	
	/**
	 * Возвращает список или массив [key => value] по ключу
	 *
	 * @param string $key Ключ
	 *
	 * @return array
	 *
	 * @throws InvalidArgumentException
	 */
	public static function getMap(string $key = ''): array;
	
	/**
	 * Возвращает значение из списка по ключу
	 *
	 * @param string $key Ключ
	 *
	 * @return mixed
	 *
	 * @throws InvalidArgumentException
	 */
	public static function getMapValueByKey(string $key);
	
	/**
	 * Возвращает список всех констант класса
	 *
	 * @return array
	 */
	public static function getConstants(): array;
}