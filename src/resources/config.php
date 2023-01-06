<?php 

$phone_site = "+7 (908) 999-99-99"; // Номер телефона который отображается на сайте
$email_site = 'site@domains.ru'; // Email который отображается на сайте

$ymCounter = '85740505'; // Номер счетчика Yandex.Metrika 
$token = '#'; // Токен для отправки заявок в личный кабинет (предоставляет менеджер)

//Список email куда должны приходить заявки с форм
$admin_email = array(
    'm.molkov@wbooster.ru',
    'maksim994@yandex.ru'
);

$aMenuLinks = Array(
    Array(
        "Для кого мы работаем", 
        "#anchor-1"
    ),
    Array(
        "Каталог", 
        "#anchor-2"
    ),
    Array(
        "Производители", 
        "#anchor-3"
    ),
    Array(
        "Сертификаты", 
        "#anchor-4"
    ),
    Array(
        "Доставка", 
        "#anchor-5"
    ),
    Array(
        "FAQ", 
        "#anchor-5"
    ),
);

/* 
*
* Переменные необходимые для работы 
* НЕ РЕДАКТИРОВАТЬ 
*
*/

$url_site = $_SERVER['HTTP_HOST'];