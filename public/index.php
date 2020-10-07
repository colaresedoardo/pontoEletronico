

<?php
//retorna o 'papai' do 'papai'
require_once(dirname(__FILE__,2).'/src/config/config.php');
//  require_once(CONTROLLER_PATH . '/login.php');
// require_once(VIEW_PATH . '/login.php');
// require_once(CONTROLLER_PATH . '/day_records.php');
// loadView('login',['texto'=>'abc34']);

$uri= urldecode(
    // index.php?a=3&b=c -> pega só index.php
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
    

);
// precisa mudar no httpd_conf para o projeto ficar na parte inicial
// Precesia do .htaccess configurado para redirecionar todas 
// as conexões para o index e apartir da $uri redircionar para o controller;
if($uri==='/' || $uri==='' || $uri==='/index.php'){
     $uri ='/login.php';
 }

require_once(CONTROLLER_PATH ."/{$uri}");