<?php
    $reviews_title = get_sub_field('reviews_title');
    $reviews_repeater = get_row_layout('reviews_repeater');
?>

<section class="reviews" id="reviews">
	<div class="container">
		<div class="reviews__title aud _anim-items _anim-off"><?php echo $reviews_title?></div>
            <?php

            if( $reviews_repeater ) {
                echo '<div class="reviews__slider">';
                while( the_repeater_field('reviews_repeater') ) {
                    $reviews_bg = get_sub_field('reviews_bg');
                    $reviews_text = get_sub_field('reviews_text');
                    $reviews_name = get_sub_field('reviews_name');
                    $reviews_company = get_sub_field('reviews_company');
                    $reviews_photo = get_sub_field('reviews_photo');

                    echo '
                        <div class="reviews__slide">
                            <div class="reviews__slide_img alr _anim-items _anim-off" style="background: url( '. $reviews_bg .' ) center center/cover no-repeat"></div>
                            <div class="reviews__slide_card arl _anim-items _anim-off">
                                <div class="reviews__slide_photo"><img src="'. $reviews_photo .'" alt="reviewsphoto"></div>
                                <div class="reviews__slide_descr">'. $reviews_text .'</div>
                                <div class="reviews__slide_name">'. $reviews_name .'</div>
                                <div class="reviews__slide_company">'. $reviews_company .'</div>
                            </div>
                        </div>
                    ';
                }
                echo '</div>';
            }

            ?>
		</div>
</section>