<?php
$lifestyle_bg = get_sub_field('lifestyle_bg');
$title = get_sub_field('lifestyle_title');
$gallery_doc = get_sub_field('lifestyle_gallery_doc');
$gallery = get_sub_field('lifestyle_gallery');
$title_second = get_sub_field('lifestyle_title_second');
?>

<section class="lifestyle" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?php echo $lifestyle_bg ?>) center center/cover no-repeat;
">
	<div class="container">
		<div class="lifestyle__inner">
            <div class="lifestyle__heading heading heading--white heading--500 aud _anim-items _anim-off">
                <?php echo $title ?>
            </div>

            <?php if ($gallery_doc): ?>
                <div class="lifestyle__docs js_docs_slider aud _anim-items _anim-off">
                    <?php foreach ($gallery_doc as $image): ?>
                        <a class="lifestyle__doc-inner" href="<?php echo $image['url']; ?>" >
                            <div class="lifestyle__doc" style="background: url('<?php echo $image['sizes']['thumbnail']; ?>') center center/contain no-repeat"></div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>


            <div class="lifestyle__heading heading heading--white heading--500 aud _anim-items _anim-off">
                <?php echo $title_second ?>
            </div>

            <div class="lifestyle__photos ascale _anim-items _anim-off">
                <?php
                for ($i = 0; $i < count($gallery); $i++) {
                    $increment_i = $i + 1;
                    if($i < 5){
                        echo '
                        <a class="lifestyle__photo img-' . $increment_i . ' " href=" ' . $gallery[$i] . ' ">
                            <img src="' . $gallery[$i] . '" alt="">
                        </a>
                    ';
                    } else{
                        echo '
                        <a class="lifestyle__photo" href=" ' . $gallery[$i] . ' ">
                            <img src="' . $gallery[$i] . '" alt="">
                        </a>
                    ';
                    }
                }
                ?>
            </div>
        </div>
	</div>
</section>