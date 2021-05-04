<?php
/**
 * The header for our theme
 *
 * @package termo-wood
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" href="./img/icons/favwood.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <title>УкрНеон</title>



</head>
<body>

<div class="page">
    <?php get_template_part( 'template-parts/header', 'navbar' ); ?>
