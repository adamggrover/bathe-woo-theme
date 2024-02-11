<?php
/**
 * The header
 *
 * @package Bathe
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>

<body <?php body_class( 'antialiased flex flex-col min-h-screen' ); ?>>
<div id="outer-conatiner" class="max-w-5xl flex-col mx-auto px-4 w-full">
	<?php wp_body_open(); ?>

	<header class="header">
		<h1>
			<a class="font-bold text-blue-500 hover:underline" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
	</header>

	<div class="lg:flex grow">
		<main id="primary" class="grow" role="main">
