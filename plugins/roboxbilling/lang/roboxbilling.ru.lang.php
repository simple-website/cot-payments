<?php
/**
 * roboxbilling plugin
 *
 * @package roboxbilling
 * @version 1.0
 * @author Yusupov, esclkm
 * @copyright Copyright (c) CMSWorks Team 2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */
$L['cfg_mrh_login'] = array('Логин в Робокассе');
$L['cfg_mrh_pass1'] = array('Пароль #1 в Робокассе');
$L['cfg_mrh_pass2'] =  array('Пароль #2 в Робокассе');
$L['cfg_testmode'] = array('Тестовый режим');
$L['cfg_diablepost'] = array('Запретить post запросы');

$L['roboxbilling_title'] = 'Робокасса';

$L['roboxbilling_error_paid'] = 'Оплата прошла успешно. В ближайшее время услуга будет активирована!';
$L['roboxbilling_error_done'] = 'Оплата прошла успешно.';
$L['roboxbilling_error_incorrect'] = 'Некорректная подпись';
$L['roboxbilling_error_otkaz'] = 'Отказ от оплаты.';
$L['roboxbilling_error_title'] = 'Результат операции оплаты';
$L['roboxbilling_error_fail'] = 'Оплата не произведена! Пожалуйста, повторите попытку. Если ошибка повторится, обратитесь к администратору сайта';

?>