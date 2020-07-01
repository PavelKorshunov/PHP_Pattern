# Паттерны проектирования на примере языка PHP

Краткая справка по паттернам проектирования с примерами на языке PHP.

# Установка

Для установки зависимостей проекта запускаем:

```bash
$ composer install
```

Запуск unit тестов из корня проекта в Linux:

```bash
$ ./vendor/bin/phpunit
```

Запуск unit тестов через консоль OpenServer из корня проекта на Windows:

```bash
$ vendor\bin\phpunit
```

# Шаблоны проектирования

Классификация паттернов проектирования по назначению:

* Порождающие паттерны (Creational patterns) - паттерные связанные с процессом создания объектов
* Структурные паттерны (Structural patterns) - имеют отношение к композиции объектов и классов
* Паттерны поведения (Behavioral patterns) - характеризуют то, как классы и объекты взаимодействуют между собой

### [Creational](Creational)

* [Singleton](Creational/Singleton)

### [Structural](Structural)

* [ObjectPool](Structural/ObjectPool)

### [Behavioral](Behavioral)

* [Observer](Behavioral/Observer)
