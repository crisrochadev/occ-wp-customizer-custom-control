<?php
/**
 * 
 * @package Vidaay
 */

get_header();
 ?>

 <div class="occ_custom_customizer">
 	<h3>Testando Custom Control em Customizer</h3>

<!-- ********************* Control Select Radio ******************* -->

 	<div class="select_radio">
 		<h3 class="title_controls">Occ Custom Select Radio Control</h3>
 		<?php 
 			$showDiv = get_theme_mod('occ_custom_control');
 			if($showDiv == 'div1'):
	 	?>
	 	<div class="div1">
	 		<p>Item - 01 - Show !</p>
	 	</div>
	 	<?php else: ?>
	 	<div class="div2">
	 		<p>Item - 02 - Show !</p>
	 	</div>
	 	<?php endif; ?>
 	</div>
<!-- ********************* End Control Select Radio ******************* --> 	

 </div>
 
<?php  get_footer(); ?>