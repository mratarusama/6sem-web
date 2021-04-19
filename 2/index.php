<?php

ini_set('display_errors', 1);
// подключаем файлы ядра
require_once 'application/core/model.php';
require_once 'application/core/view.php';
require_once 'application/core/controller.php';
require_once 'application/core/BaseActiveRecord.php';
require_once 'application/models/CustomFormValidation.php';
require_once 'application/models/TestActiveRecord.php';


/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/

require_once 'application/core/route.php';
Route::start(); // запускаем маршрутизатор
