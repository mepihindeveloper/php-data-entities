# php-data-entities

![release](https://img.shields.io/github/v/release/mepihindeveloper/php-data-entities?label=version)
[![Packagist Version](https://img.shields.io/packagist/v/mepihindeveloper/php-data-entities)](https://packagist.org/packages/mepihindeveloper/php-data-entities)
[![PHP Version Require](http://poser.pugx.org/mepihindeveloper/php-data-entities/require/php)](https://packagist.org/packages/mepihindeveloper/php-data-entities)
![license](https://img.shields.io/github/license/mepihindeveloper/php-data-entities)

![build](https://github.com/mepihindeveloper/php-data-entities/actions/workflows/php.yml/badge.svg?branch=stable)
[![codecov](https://codecov.io/gh/mepihindeveloper/php-data-entities/branch/development/graph/badge.svg?token=36PP7VKHKG)](https://codecov.io/gh/mepihindeveloper/php-data-entities)


Компонент для работы с пользовательскими константами в PHP. Данный компонент помогает оперировать константами и их
представлениями.

Например, в базу данных (БД) производится запись чего-го либо на английском языке. В то же время, пользователю
отражается эта информация уже на русском языке.

Данный класс предназначен для статической информации, которую нет смысла хранить в БД
(как описано в примере выше).

В пользовательских классах необходимо завести константы:

```php
CONST JUNIOR = 'junior';
CONST MIDDLE = 'middle';
CONST SENIOR = 'senior';
```

Далее составляется карта соответствия:

```php
protected static array $map = [
    self::JUNIOR => 'Начинающий',
    self::MIDDLE => 'Продвинутый',
    self::SENIOR => 'Эксперт',
];
```

Таким образом, можно обратиться как к самим константам класса (например, для сравнения), так и к методам класса для
получения информации о них.

# Структура

```
src/
--- interfaces/
--- Entity.php
```

В директории `interfaces` хранятся необходимые интерфейсы, которые необходимо имплементировать в при реализации
собственного класса `Entity`.

Класс `Entity` реализует интерфейс `EntityInterface` для управления пользовательскими константами.

# Доступные методы

| Метод                         | Аргументы | Возвращаемые данные | Исключения               | Описание                                             |
|-------------------------------|-----------|---------------------|--------------------------|------------------------------------------------------|
| has(string $key)              | Ключ      | bool                |                          | Проверяет наличие ключа в списке                     |
| getMap(string $key = '')      | Ключ      | array               | InvalidArgumentException | Возвращает список или массив [key => value] по ключу |
| getMapValueByKey(string $key) | Ключ      | mixed               | InvalidArgumentException | Возвращает значение из списка по ключу               |
| getConstants()                |           | array               |                          | Возвращает список всех констант класса               |

# Контакты

Вы можете связаться со мной в социальной сети ВКонтакте: [ВКонтакте: Максим Епихин](https://vk.com/maximepihin)

Если удобно писать на почту, то можете воспользоваться этим адресом: mepihindeveloper@gmail.com

Мой канал на YouTube, который посвящен разработке веб и игровых
проектов: [YouTube: Максим Епихин](https://www.youtube.com/channel/UCKusRcoHUy6T4sei-rVzCqQ)

Поддержать меня можно переводом на Яндекс.Деньги: [Денежный перевод](https://yoomoney.ru/to/410012382226565)
