<?php get_header();?>
<h1 class="text-center">Testing Theme</h1>

	<div class="row">	
		<div class="col">
			<h2 class="text-center" id="about">About</h2>
		</div>
	</div>
<div class="container">
	<div class="row">
			<span class="d-block d-sm-none">
			<img src="<?php echo get_template_directory_uri() ?>/img/tech.jpg" class="img-thumbnail" alt="test1" >
			</span>
		<div class="col-sm-6" id="text-lorem">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s </p>
		</div>
		<div class="col-sm-6">
			<span class="d-none d-sm-block">
			<img src="<?php echo get_template_directory_uri() ?>/img/tech.jpg" class="img-thumbnail" alt="test1" >
			</span>
		</div>

</div>

	<div class="row">
		<div class="col-sm-6">
			<img src="<?php echo get_template_directory_uri() ?>/img/man.jpg" class="img-thumbnail" alt="test2" >
		</div>
		<div class="col-sm-6" id="text_lorem1">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s </p>
		</div>
			
	<div class="row">
		<span class="d-block d-sm-none">
			<img src="<?php echo get_template_directory_uri() ?>/img/tablet.jpg" class="img-thumbnail" alt="test3" >
		</span>		
		<div class="col-sm-6" id="text_lorem2">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s </p>
		</div>
		<div class="col-sm-6">
			<span class="d-none d-sm-block">
			<img src="<?php echo get_template_directory_uri() ?>/img/tablet.jpg" class="img-thumbnail" alt="test3" >
			</span>
		</div>
			
	<div class="row">
		<div class="col-sm-6">
			<img src="<?php echo get_template_directory_uri() ?>/img/digital.jpg" class="img-thumbnail" alt="test4" >
		</div>
		<div class="col-sm-6">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s </p>
		</div>
</div>
<?php get_footer();?>
