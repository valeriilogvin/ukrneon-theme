<?php
$section_title = get_sub_field( 'infoblock_section_title' );
$positionLeft  = get_sub_field( 'infoblock_second') == 'left';
$left          = $positionLeft ? 'arl _anim-items _anim-off' : 'alr _anim-items _anim-off';
$position         = get_sub_field( 'infoblock_second' );
$title         = get_sub_field( 'infoblock_title' );
$subtitle      = get_sub_field( 'infoblock_subtitle' );
$description   = get_sub_field( 'infoblock_description' );
$types         = get_sub_field( 'infoblock_types' );
$installation  = get_sub_field( 'infoblock_installation' );
$gallery       = get_sub_field( 'infoblock_gallery' );
$btnId         = get_sub_field( 'infoblock_btn_id' );
$anchor_id     = get_sub_field( 'infoblock_anchor_id' );
?>

<section class="infoblock <?php echo $position ?>" id="<?php echo $anchor_id ?>">
    <div class="container">

		<?php
		if ( $section_title ): ?>
            <div class="infoblock__heading heading heading--black heading--600 aud _anim-items _anim-off">
				<?php echo $section_title ?>
            </div>
		<?php endif; ?>

        <div class="infoblock__inner <?php echo $left ?> <?php echo $position ?> ">
            <div class="infoblock__slides infoblock__item">

                <div class="infoblock__title">
					<?php echo $title ?>
                </div>

				<?php
				if ( $subtitle ): ?>
                    <span> <?php echo $subtitle ?></span>
				<?php endif; ?>

				<?php
				if ( $gallery ): ?>
                    <div class="infoblock__slider">
						<?php foreach ( $gallery as $image ): ?>
                            <div class="infoblock__slide">
                                <div class="infoblock__slide-img" style="background: url(<?php echo $image ?>) center center/cover no-repeat"></div>
                            </div>
						<?php endforeach; ?>
                    </div>
				<?php endif; ?>

            </div>
            <div class="infoblock__wrapper infoblock__item">
                <div class="infoblock__tabs">
                    <div data-tab="0" class="infoblock__tab active">
                        ????????????????
                    </div>
                    <div data-tab="1" class="infoblock__tab">
                        ???????? ??????????
                    </div>
                    <div data-tab="2" class="infoblock__tab">
                        ???????????? ?? ????????????????????????
                    </div>
                </div>
                <div class="infoblock__text">
                    <div data-tab="0" class="infoblock__descr active">
						<?php echo $description ?>
                    </div>
                    <div data-tab="1" class="infoblock__descr">
						<?php echo $types ?>
                    </div>
                    <div data-tab="2" class="infoblock__descr">
						<?php echo $installation ?>
                    </div>
                </div>
                <div class="infoblock__footer">
                    <div class="infoblock__footer_text">???????????????? ???????????????????? ???????????????????????? ?????????????????????? ?????????? ???? ??????????????
                    </div>
                    <button id="<?php echo $btnId?>" onclick="infoInputSet('<?php echo $title ?>')" data-modal="modal-form" class="md-trigger btn infoblock__btn">???????????????? ????????????????????????</button>
                </div>
            </div>
        </div>
    </div>
</section>