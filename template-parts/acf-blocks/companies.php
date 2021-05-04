<?php
$companies_title = get_sub_field('companies_title');
$companies_logos = get_sub_field('companies_logos');
$companies_bg = get_sub_field('companies_bg');
?>

<section class="companies" style="background: linear-gradient(0deg, rgba(16, 16, 16, 0.6), rgba(16, 16, 16, 0.6)), url(<?php echo $companies_bg ?>) center center/cover no-repeat;">
    <div class="container">
        <div class="companies__heading heading heading--500 heading--white aud _anim-items _anim-off">
            <?php echo $companies_title ?>
        </div>
        <?php
        if ($companies_logos): ?>
            <div class="companies__slider ascale _anim-items _anim-off">
                <?php foreach ($companies_logos as $image): ?>
                    <div class="companies__slide">
                        <div class="companies__img" style="background: url('<?php echo esc_url($image); ?>') center/contain no-repeat" ></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>