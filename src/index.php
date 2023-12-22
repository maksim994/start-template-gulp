<?php require './config.php'; ?>
<?php require 'inc/form/form.php'; ?>

<!DOCTYPE html>
<html lang="ru">

	@@include('partials/head.php')

	<body data-yandex-metrica="<?php echo $ymCounter;?>">
		<div style="display: none;">
			<?php echo file_get_contents('./assets/img/icons/icons.svg');?>
		</div>

		@@include('partials/header/header-mobile.php')
		@@include('partials/header/header-clone.php')
		@@include('partials/header/header.php')

		@@include('partials/section-promo.php')
		@@include('partials/application.php')

		@@include('partials/advantages.php')
		@@include('partials/selection.php')
		@@include('partials/technologies.php')
		@@include('partials/slider.php')
		@@include('partials/hygge.php')
		@@include('partials/faq.php')
		@@include('partials/footer.php')

    @@include('partials/element/cookie.html')

		<div id="modal-callback" class="modals" style="display: none;">
			<?form(1,2);?>
		</div>



		<script src="./assets/js/vendor.js?<?php echo time();?>"></script>
		<script src="./assets/js/main.js?<?php echo time();?>"></script>

		<script>document.addEventListener('DOMContentLoaded', () => {

			// new WOW().init();
			wow = new WOW(
				{
					boxClass:     'wow',      // default
					animateClass: 'animated', // default
					offset:       0,          // default
					mobile:       true,       // default
					live:         true        // default
				}
			)
			wow.init();


		});</script>

		
		<script type="text/javascript" src="./inc/form/js/jquery.validate.min.js?<?php echo time();?>"></script>
		<script type="text/javascript" src="./inc/form/js/messages_ru.js?<?php echo time();?>"></script>
		<script type="text/javascript" src="./inc/form/js/form.js?<?php echo time();?>"></script>


		
	</body>
</html>