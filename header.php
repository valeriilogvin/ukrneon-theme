<?php
/**
 * The header for our theme
 *
 * @package ukrneon
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="Shortcut Icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() ?>/img/ukrneon/favicon.ico">

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>"/>
    <?php wp_head(); ?>

</head>
<body>

<div class="page">
    <?php get_template_part( 'template-parts/header', 'navbar' ); ?>
