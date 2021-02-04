<?php
/**
 * 
 * @package Vidaay
 */

get_header();
 ?>
<div class="container">

<!-- ----------------- Custom Select Radio Exemple -------------- -->
  <div class="row">
  	<h2 class="title_row">Custom Control Select Radio </h2>
  	<p class="info_row">Selecione no personalizador o item a exibir !</p>
  	<div class="alert alert-primary" role="alert">
	  Este é apenas um exemplo de uso
	</div>
	<?php 
		$select_element = get_theme_mod('occ_custom_select_radio_control');
		if($select_element == 'div1'):
	 ?>
		<div class="card">
			<div class="card-header">
				Elemento 01
			</div>
			<div class="card-body">
				<blockquote class="blockquote mb-0">
					<p>Você pode consultar a documentação deste controle em <a href="https://ocodigocris.com/occ-custom-controls">O código Cris - OCC Custom Controls</a></p>
					<div class="blockquote-footer">Desenvolvido por <cite title="Source Title">Cris Rocha</cite></div>
				</blockquote>
			</div>
		</div>
		<?php else: ?>
		<div class="card-header">
			<ul class="nav nav-tabs card-header-tabs">
				<li class="nav-item">
					<a class="nav-link active" aria-current="true" href="#">Active</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li>
			</ul>
		</div>
		<div class="card-body">
			<h5 class="card-title">Elemento 02</h5>
			<p class="card-text">Você pode consultar a documentação deste controle em.</p>
			<a href="https://ocodigocris.com/occ-custom-controls" class="btn btn-primary">O código Cris </a>
		</div>
	<?php endif; ?>
	</div>
<!-- ----------------- End Custom Select Radio Exemple -------------- -->
<!-- ----------------- Custom Checkbox Exemple -------------- -->
	<div class="row">
	  	<h2 class="title_row">Custom Control Checkbox </h2>
	  	<p class="info_row">Marque no personalizador se deseja exibir este elemento !</p>
	  	<div class="alert alert-primary" role="alert">
		  Este é apenas um exemplo de uso
		</div>
		<?php  
			$show_element = get_theme_mod('occ_custom_checkbox_control');
			if($show_element):
		?>
			<div class="card" style="width: 18rem;">
				<img src="/bannerSlide3.jpg" class="card-img-top" alt="imagem">
				<div class="card-body">
					<h5 class="card-title">Mostrando Elemento</h5>
					<p class="card-text">Este elemento só éxibido caso seja ativado no personalizador, consulte a documentação.</p>
					<a href="https://ocodigocris.com/occ-custom-controls" class="btn btn-primary">O código Cris</a>
				</div>
			</div>
		<?php  endif; ?>
	</div>
<!-- ----------------- End Custom Checkbox Exemple -------------- -->
</div>
<?php  get_footer(); ?>