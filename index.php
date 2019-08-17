<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-07-20
 * Time: 15:44
 */
?>


<?php get_header(); ?>

<div class="animsition" data-animsition-in-class="fade-in">

    <section id="js-breakPoint" class="hero">
        <div class="container">
            <div class="hero__title">
                <h1>I'm <span>Mie</span><span class="small">,</span></h1>
                <h2 class="slideUp__first">Front-End Developer</h2>
                <h2 class="slideUp__second">Based in Vancouver</h2>
            </div>
            <p class="scroll__guide">scroll down</p>
        </div>
    </section>
    <!--hero section-->

    <?php $the_query = new WP_Query(array('post-type' => 'post', 'post_per_page' => -1)); ?>
    <?php if ($the_query->have_posts()): ?>
    <section id="works" class="works container">
        <h1 class="section__title">Works</h1>
        <div class="works__items"">
                    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <div class=" works__items-item">
            <div class="text__hover">
                <a href="<?php the_permalink(); ?>">
                    <h2 class="color__change"
                        data-txt="<?php the_title(); ?>"><?php the_title(); ?>
                    </h2>
                </a>
                <p><?php the_tags('- ', ' / ', ' '); ?>
                </p>
            </div>
            <div class="hover__appear">
                <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail(); ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
</div>
</section>
<?php endif; ?>
<!--works section-->

<section id="values" class="about container">
    <h1 class="section__title">Values</h1>
    <div class="about__flex">
        <div id="slideLeft" class="intro__wrap values__animation1">
            <p class="intro__wrap--txt">
                Hello, I'm an <span>HUNGRY Front-End Developer</span> with thoughtfully designed and carefully coded
                projects with UI/UX considerations.
                I'm willing to continuous learning to stay up to date on the latest tech and design trends.
                <br>In my free time, I have <span>stroooong passionate about food</span> a lot. Always searching good or
                trend foodie in Vancouver.
            </p>
        </div>
        <div id="slideRight" class="values__flex values__animation2">
            <div class="values__flex-item">
                <img src="<?php echo get_template_directory_uri()?>/dist/images/icon__eye.png"
                    alt="icon eye">
                <p class="text__bold">Eye for pixel-perfect</p>
                <p class="text__hide">Design and development with a keen eye and attention to detail.</p>
            </div>
            <div class="values__flex-item">
                <img src="<?php echo get_template_directory_uri()?>/dist/images/icon__pen.png"
                    alt="icon pen">
                <p class="text__bold">Firm focus on concepts</p>
                <p class="text__hide">To clarify the target and the concept, and proceed with the design.</p>
            </div>
            <div class="values__flex-item">
                <img src="<?php echo get_template_directory_uri()?>/dist/images/icon__code.png"
                    alt="icon code">
                <p class="text__bold">Clear and clean code</p>
                <p class="text__hide">Believe the code is part of the design and should be reusable.</p>
            </div>
            <div class="values__flex-item">
                <img src="<?php echo get_template_directory_uri()?>/dist/images/icon__pingpong.png"
                    alt="icon ping-pong">
                <p class="text__bold">Share my energy</p>
                <p class="text__hide">Bring my energy to the team and to solve the problem.</p>
            </div>
        </div>
    </div>
</section>
<!--values section-->

</div>
<!--animsition-->

<?php get_footer();
