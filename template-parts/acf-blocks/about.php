<?php
    $about_img = get_sub_field('about_img');
    $about_title = get_sub_field('about_title');
    $about_text = get_sub_field('about_text');
?>

<section class="about" id="about">
	<div class="container">
		<div class="about__inner flex">
            <div class="about__video alr _anim-items _anim-off" style="background: url(<?php echo $about_img?>) 50%/cover no-repeat;">
                <!--			<a href="https://youtu.be/d243ssZzTdU" target="_blank" class="about__video_btn">-->
                <!--                <svg width="57" height="79" viewBox="0 0 57 79" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                    <path d="M56.3984 39.3984L0.148434 78.3696L0.148437 0.427293L56.3984 39.3984Z" fill="url(#paint0_linear)"/>-->
                <!--                    <defs>-->
                <!--                        <linearGradient id="paint0_linear" x1="47.8984" y1="14.3984" x2="-2.10156" y2="74.3984" gradientUnits="userSpaceOnUse">-->
                <!--                            <stop stop-color="#BCBBBB"/>-->
                <!--                            <stop offset="1" stop-color="white"/>-->
                <!--                        </linearGradient>-->
                <!--                    </defs>-->
                <!--                </svg>-->
                <!--            </a>-->
                <!--            <a class="about__video-btn js_hero_video_btn" >-->
                <!--                <svg class="hero__video-btn__svg" viewBox="0 0 167 167" xmlns="http://www.w3.org/2000/svg">-->
                <!--                    <path class="path-play" d="M109.697 84.3953L71.7422 106.308L71.7422 62.4822L109.697 84.3953Z"/>-->
                <!--                    <path class="path-pause" fill-rule="evenodd" clip-rule="evenodd"-->
                <!--                          d="M78 61H68V107H78V61ZM100 61H90V107H100V61Z"/>-->
                <!--                </svg>-->
                <!--            </a>-->
            </div>
            <div class="about__info arl _anim-items _anim-off">
                <p class="about__heading heading heading--500 color--black"><?php echo $about_title?></p>
                <div class="about__text"><?php echo $about_text?></div>
            </div>
        </div>
	</div>
</section>