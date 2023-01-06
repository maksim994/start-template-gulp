<?php 
	require './config.php';
	require 'inc/form/form.php';
?>

<!DOCTYPE html>
<html lang="ru">
	@@include('partials/head.php',{
		"title" : "Сборка для создания лендингов",
		"description" : "а тут нужно указать description лендинга"
	})

	<body data-yandex-metrica="<?php echo $ymCounter;?>">
		<div style="display: none;">
			<?php echo file_get_contents('./assets/img/icons/icons.svg');?>
		</div>

	<div style="margin-bottom: 20px;">
		@@include('partials/block/footer/footer-1.php')
	</div>

	<div style="margin-bottom: 20px;">
	
		@@include('partials/block/footer/footer-2.php',{
			"btn" : "Оставить заявку",
			"btn-description" : "Главная"
		})
	</div>
		

		

		<script src="./assets/js/vendor.js"></script>
		<script src="./assets/js/main.js"></script>
		<script type="text/javascript" src="./inc/form/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="./inc/form/js/messages_ru.js"></script>
		<script type="text/javascript" src="./inc/form/js/form.js"></script>
		<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>