<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-07-20
 * Time: 15:44
 */
?>


<?php get_header(); ?>

<div class="animsition">

    <section id="js-breakPoint" class="hero">
        <div class="container">
            <div class="hero__title">
                <h1>I'm Mie.</h1>
                <p>Front-End Developer - Based on Vancouver</p>
            </div>
            <img id="about" class="hero__img" src="<?php echo get_template_directory_uri()?>/dist/images/profile.png" alt="my image">
            <div class="text__change">
                <p>who loves</p>
                <p class="text__change--word">Coding <span>👩🏻‍💻</span></p>
                <p class="text__change--word">Design <span>🎨</span></p>
                <p class="text__change--word">Food <span>🥟💓</span></p>
                <p class="text__change--word">Travel <span>✈️</span></p>
            </div>
        </div>
    </section>
    <!--hero section-->

    <section class="values container">
        <h1 class="section__title">Values</h1>
        <div class="values__item">
            <div class="values__item--flex">
                <img src="<?php echo get_template_directory_uri()?>/dist/images/icon__eye.png" alt="icon eye">
                <p>Design and development <span>with a keen eye and attention to detail</span> is my strength. Working with caution that an error of 1px will change the impression of the website.</p>
            </div>
            <div class="values__item--flex">
                <img src="<?php echo get_template_directory_uri()?>/dist/images/icon__pen.png" alt="icon pen">
                <p>To <span>clarify the target and the concept</span>, and proceed with the design so that the axis does not move. The presence of an axis prevents directional blurring when making corrections.</p>
            </div>
            <div class="values__item--flex">
                <img src="<?php echo get_template_directory_uri()?>/dist/images/icon__code.png" alt="icon code">
                <p><span>Coding is part of the design</span> and trying to keep the clear and clean code. Keep in mind the code which can be used repeatedly paying attention to the component.</p>
            </div>
        </div>
    </section>
    <!--values section-->

<!--    <section id="works" class="works container">-->
<!--        <h1 class="section__title">Works</h1>-->
<!--        <div class="works__flex">-->
<!--            <div class="work">-->
<!--                <a class="animsition-link" href="dist/html/work-kulkuri.html"><img src="--><?php //echo get_template_directory_uri()?><!--/dist/images/kulkuri/thumbnail.jpg" alt="thumbnail kulkuri"></a>-->
<!--                <p><span>kulkuri</span> - HTML / SCSS / JavaScript</p>-->
<!--            </div>-->
<!--            <div class="work">-->
<!--                <a class="animsition-link" href="dist/html/work-mogu.html"><img src="--><?php //echo get_template_directory_uri()?><!--/dist/images/mogu/thumbnail.png" alt="thumbnail mogu"></a>-->
<!--                <p><span>mogu</span> - WordPress</p>-->
<!--            </div>-->
<!--            <div class="work">-->
<!--                <a class="animsition-link" href="dist/html/work-wordworth.html"><img src="--><?php //echo get_template_directory_uri()?><!--/dist/images/wordsworth/thumbnail.jpg" alt="thumbnail wordsworth"></a>-->
<!--                <p><span>Wordsworth Planner</span> - Adobe XD</p>-->
<!--            </div>-->
<!--            <div class="work">-->
<!--                <a class="animsition-link" href="dist/html/work-uidesign.html"><img src="--><?php //echo get_template_directory_uri()?><!--/dist/images/ui/thumbnail.png" alt="thumbnail ui"></a>-->
<!--                <p class="text__center"><span>DailyUI</span> - Illustlator / Photoshop</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!--works section-->

<!--    --><?php //$the_query = new WP_Query( array('post-type' => 'post', 'post_per_page' => -1)); ?>
    <?php if ( have_posts() ): ?>
        <section id="works" class="works container">
            <h1 class="section__title">Works</h1>
                <div class="works__flex">
                    <div class="work">
                        <?php while ( have_posts() ): the_post(); ?>
                        <a class="animsition-link" href="">
                            <?php
                            if(has_post_thumbnail()) :
                                the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </a>
                        <p><span><?php the_title(); ?></span> <?php the_tags($before, '/', ' '); ?></p>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>
        </section>
    <?php endif; ?>
    <!--works section-->

    <section id="contact" class="contact container">
        <h1 class="section__title">Contact</h1>
        <div class="contact__info">
            <p>I am seeking a job as a
                <span>Front-End Developer</span>.
                <br>If you are interested me,
                please send an email to me.
            </p>
        </div>
        <a class="common__button" href="mailto:miesuzuki107@gmail.com">Send an E-mail</a>
    </section>
    <!--contact section-->

</div>
<!--animsition-->

<?php get_footer(); ?>
