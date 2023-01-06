<?php
require 'config.php';

if (isset($_POST['lead'])) {
	echo file_get_contents('http://crm.wbooster.ru/index.php?controller=seolead&token='.$token.
		'&metrika_client_id='.(isset($_POST['metrika_client_id'])?urlencode($_POST['metrika_client_id']):'').
		'&comment='.(isset($_POST['comment'])?urlencode($_POST['comment']):'').
		'&description='.(isset($_POST['description'])?urlencode($_POST['description']):'').
		'&name='.(isset($_POST['name'])?urlencode($_POST['name']):'').
		'&phone='.(isset($_POST['phone'])?urlencode($_POST['phone']):'').
		'&email='.(isset($_POST['email'])?urlencode($_POST['email']):'').
		'&city='.(isset($_POST['city'])?urlencode($_POST['city']):'').
		'&product='.(isset($_POST['product'])?urlencode($_POST['product']):'').
		'&url='.(isset($_POST['url'])?urlencode($_POST['url']):'')
	);
}

?>