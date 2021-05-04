<?php
    $advantages_title = get_sub_field('advantages_title');
    $advantages_bg = get_sub_field('advantages_bg');
    $advantages_item = get_row_layout('advantages_item');
?>

<section class="advantages" style="background: linear-gradient(0deg,rgba(16,16,16,.6),rgba(16,16,16,.6)),url(<?php echo $advantages_bg?>) 50%/cover no-repeat;">
	<div class="container">
		<div class="advantages__heading heading heading--500 aud _anim-items _anim-off">
            <?php echo $advantages_title ?>
		</div>

        <?php
        if( $advantages_item ) {
            echo '<div class="advantages__icons">';
            while( the_repeater_field('advantages_item') ) {
                $advantages_img = get_sub_field('advantages_img');
                $advantages_title = get_sub_field('advantages_title');
                $advantages_text = get_sub_field('advantages_text');

                echo '
                    <div class="advantages__item ascale _anim-items _anim-off">
                        <div class="advantages__icon icon">
                            <img class="icon__img" src="'. $advantages_img .'" alt="">
                        </div>
                        <div class="advantages__text">
                             '. $advantages_text .'
                        </div>
                    </div>
                    ';
            }
            echo '</div>';
        }
        ?>
	</div>
</section>