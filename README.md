# Landing Project Template
**Шаблон проекта для быстрого старта.**

## Структура папок и файлов

`В разработке`


## Старт проекта

* Режим разработки: npm run dev 

```bash
npm run dev 
```
### Настройка Title и description
Данный код указан в index.php
```php
  @@include('partials/head.php',{
		"title" : "Сборка для создания лендингов",
		"description" : "а тут нужно указать description лендинга"
	})
```
Необходимо указать правильный title и description



## Яндекс.Метрики
### Подключение Яндекс.Метрики
- Создать счетчик на [metrika.yandex.ru](https://metrika.yandex.ru/)
- Ввести его номер в файле `/src/resources/config.php` в перменную `$ymCounter` (~7 строка)
### Настройка целей для отправки форм
У каждого тега `<form>` есть параметр `data-goal`, например `data-goal="formHeader"`, `formHeader` - будт являться идентификатором цели (JavaScript-событие) его необходимо добавить в [metrika.yandex.ru](https://metrika.yandex.ru/), данный параметр задается в моделях у каждой формы, файлы находяться в `/src/resources/inc/form/model/model*.json`
### Другие цели (зашитые в код)
- `click_phone` - клик по номеру телефона
- `click_email` - клик по Email
### Настройка целей при клике
```php
  onclick="ym(<?php echo $ymCounter;?>, 'reachGoal', 'click_email', {'place': 'header-scroll'})"
  или
  onclick="ym(<?php echo $ymCounter;?>, 'reachGoal', 'click_email')"
```
- `<?php echo $ymCounter;?>` - номер счетчика (подтягивается из `/src/resources/config.php`)
- `click_email` - идентификатор цели (JavaScript-событие) 
- `{'place': 'header-scroll'}` - дополнительный параметр который отправляется в Яндекс.Метрику

## Секции
### Структцра секции для разметки на сайте
```html
  <div class="section" id="anchor-1">
    <div class="wrapper">
      <div class="section__title">Заголовок секции</div>
    </div>
  </div>
```
в id указывается анкер для ссылки
### Служебные классы
- `.section` - Задается для всех секций где необходимы отсупы сверху и снизу
- `.section-bg` - Задается для cекций где используется фоновое изображение
- `.section-bg-color` - Задается для секций где фоновый цвет (задается в _setings)
- `.section__title` - Стили для заголовков секций

## Формы
- `viewX.php` - в нем задается html код формы (как правило его не нужно править) 
- `modelX.json` - в нем задаются поля для формы, заголовки, кнопки 

### Создание форм
- Для начала нам неоходимо посмотреть какие формы у нас на сайте используются


### Вывод на сайте 
Формы выводяться php кодом  `<?php form(1,1); ?>`, где: 
1 параметр это -  view (вид формы)
2 параметр это  - model (данные формы)