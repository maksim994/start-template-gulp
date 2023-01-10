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

		@@include('partials/header/header-mobile.php',{
			"btn" : "Главная",
			"btn-description" : "Главная"
		})

		@@include('partials/header/header-clone.php',{
			"btn" : "Главная",
			"btn-description" : "Главная"
		})

		@@include('partials/header/header.php',{
			"btn" : "Бесплатная консультация",
			"btn-description" : "Главная"
		})

		@@include('partials/block/section-promo/section-promo-1.php')

		

		<div class="wrapper">
			<!-- @@include('partials/block/tabs.html') -->
			<!-- @@include('partials/block/accordion.html') -->
			<?php //form('qwiz', 'qwiz');?>
		</div>

		<!-- @@include('partials/block/advantages/advantages-1.html') -->
		

		<!-- @@include('partials/section-promo.php') -->
		<!-- @@include('partials/slider.html') -->

		@@include('partials/block/advantages/advantages-1.html')

    

		<div id="modal-callback" style="display: none;">
			<?form(1,1);?>
		</div>

		@@include('partials/block/cookie.html')
		@@include('partials/block/modal-result.html')

		<script src="./assets/js/vendor.js"></script>
		<script src="./assets/js/main.js"></script>
		<script type="text/javascript" src="./inc/form/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="./inc/form/js/messages_ru.js"></script>
		<script type="text/javascript" src="./inc/form/js/form.js"></script>
		<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>