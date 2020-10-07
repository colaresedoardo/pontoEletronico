<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME,'PT_BR','pt_BR.utf-8','portuguese');

//Pastas
define('MODEL_PATH', realpath(dirname(__FILE__).'/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__).'/../view'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__).'/../view/template'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__).'/../controller'));
define('EXCEPTION_PATH', realpath(dirname(__FILE__).'/../exception'));
//Arquivos
require_once(realpath(dirname(__FILE__).'/database.php'));
require_once(realpath(dirname(__FILE__).'/loader.php'));
require_once(realpath(MODEL_PATH).'/Model.php');
require_once(realpath(EXCEPTION_PATH).'/AppException.php');
require_once(realpath(EXCEPTION_PATH).'/ValidationException.php');
