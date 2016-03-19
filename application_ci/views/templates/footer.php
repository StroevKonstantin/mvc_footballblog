<script src="<?php echo base_url();?>assets/js/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets/js/imagesloaded.js"></script>
<script src="<?php echo base_url();?>assets/js/classie.js"></script>
<script src="<?php echo base_url();?>assets/js/AnimOnScroll.js"></script>
<script>
	new AnimOnScroll( document.getElementById( 'grid' ), {
	minDuration : 0.4,
	maxDuration : 0.7,
	viewportFactor : 0.2
	} );
</script>

<div class="row footer">
	<div class="container">
		<div class="col-md-12 col-xs-12 text-left ">
			<p class="text_footer_type_one">Copyright 2016, RusMatch. All Rights Reserved</p>
			<p class="text_footer_type_one"><?php echo $email_author ?></p>
		</div>
	</div>	
</div>
</body>
</html>