<?php

$iconbgcolor 	= esc_html( $sy_options['s-icon-bgcolor'] );
$iconcolor 		= esc_html( $sy_options['s-icon-color'] );
$iconsize 		= esc_html( $sy_options['s-icon-size'] );
$iconwidth 		= esc_html( $sy_options['s-icon-width'] );
$iconborcolor	= esc_html( $sy_options['s-icon-borcolor'] );
$fieldmargin 	= esc_html( $sy_options['s-field-bmargin'] );
$inputbgcolor 	= esc_html( $sy_options['s-input-bgcolor'] );
$inputtxtcolor 	= esc_html( $sy_options['s-input-txtcolor'] );
$focusbgcolor 	= esc_html( $sy_options['s-input-focusbgcolor'] );
$focustxtcolor 	= esc_html( $sy_options['s-input-focustxtcolor'] );

?>

.xoo-aff-input-group .xoo-aff-input-icon{
	background-color: <?php echo $iconbgcolor ?>;
	color: <?php echo $iconcolor ?>;
	max-width: <?php echo $iconwidth ?>px;
	min-width: <?php echo $iconwidth ?>px;
	border: 1px solid <?php echo $iconborcolor ?>;
	border-right: 0;
	font-size: <?php echo $iconsize ?>px;
}
.xoo-aff-group{
	margin-bottom: <?php echo $fieldmargin ?>px;
}

.xoo-aff-group input[type="text"], .xoo-aff-group input[type="password"], .xoo-aff-group input[type="email"], .xoo-aff-group input[type="number"], .xoo-aff-group select, .xoo-aff-group select + .select2{
	background-color: <?php echo $inputbgcolor ?>;
	color: <?php echo $inputtxtcolor ?>;
}

.xoo-aff-group input[type="text"]::placeholder, .xoo-aff-group input[type="password"]::placeholder, .xoo-aff-group input[type="email"]::placeholder, .xoo-aff-group input[type="number"]::placeholder, .xoo-aff-group select::placeholder{
	color: <?php echo $inputtxtcolor ?>;
	opacity: 0.7;
}

.xoo-aff-group input[type="text"]:focus, .xoo-aff-group input[type="password"]:focus, .xoo-aff-group input[type="email"]:focus, .xoo-aff-group input[type="number"]:focus, .xoo-aff-group select:focus, .xoo-aff-group select + .select2:focus{
	background-color: <?php echo $focusbgcolor ?>;
	color: <?php echo $focustxtcolor ?>;
}


<?php if( $sy_options['s-show-icons'] !== "yes" ): ?>

	.xoo-aff-input-group .xoo-aff-input-icon{
		display: none!important;
	}

<?php else: ?>

	.xoo-aff-group input[type="text"], .xoo-aff-group input[type="password"], .xoo-aff-group input[type="email"], .xoo-aff-group input[type="number"], .xoo-aff-group select{
		border-bottom-left-radius: 0;
		border-top-left-radius: 0;
	}

<?php endif; ?>