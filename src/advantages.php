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

	
    <!-- <div style="margin-bottom: 20px;">
		@@include('partials/block/advantages/advantages-1.html')
    </div>
    <div style="margin-bottom: 20px;">
    @@include('partials/block/advantages/advantages-2.html')
    </div>
    <div style="margin-bottom: 20px;">
    @@include('partials/block/advantages/advantages-3.html')
    </div> -->
    <div style="margin-bottom: 20px;">
    @@include('partials/block/advantages/advantages-4.html')
    </div>
    <!-- <div style="margin-bottom: 20px;">
    @@include('partials/block/advantages/advantages-5.html')
    </div>
    <div style="margin-bottom: 20px;">
    @@include('partials/block/advantages/advantages-6.html')
    </div>
    <div style="margin-bottom: 20px;">
    @@include('partials/block/advantages/advantages-7.html')
    </div>
    <div style="margin-bottom: 20px;">
    @@include('partials/block/advantages/advantages-8.html')
    </div>
    <div style="margin-bottom: 20px;">
    @@include('partials/block/advantages/advantages-9.html')
    </div>
    <div style="margin-bottom: 20px;">
    @@include('partials/block/advantages/advantages-10.html')
    </div> -->

		<script src="./assets/js/vendor.js"></script>
		<script src="./assets/js/main.js"></script>
		<script type="text/javascript" src="./inc/form/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="./inc/form/js/messages_ru.js"></script>
		<script type="text/javascript" src="./inc/form/js/form.js"></script>
		<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>