<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-08-02
 * Time: 19:33
 */

get_header();
?>

    <div class="animsition">
        <div class="sticky__container">
            <section id="js-breakPoint" class="work__intro--black sticky container">
                <h2>Wordsworth Planner</h2>
                <p>This is a landing page design for campaign.<br>
                    In keeping with the client's request, thought about what they wanted to tell the most in this campaign and designed it.
                    To use purple in CTA as the theme color of them, it tries to urge click action. In addition, using gold as a key point and expressed the elegance that they have.
                </p>
                <div class="detail-set">
                    <p>#Web Design</p>
                    <p>XD, Photoshop</p>
                    <p>Feb. 2019</p>
                </div>
            </section>

            <div class="scroll__container">
                <section class="work__image wordsworth scroll__item container">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/whole.png" alt="whole page image">
                </section>
            </div>
            <!--right section available to scroll-->
        </div>
        <!--introduction of work-->

        <div class="sticky__container">
            <section class="work__color sticky container">
                <h1 class="section__title work__h1">Colors</h1>
                <div class="work__color--item wordsworth">
                    <h4>Theme color</h4>
                    <p>
                        As the campaign site, I chose the theme color so as not to destroy the image of the existing website.
                        <br><br><span class="gold">#BFAE8E</span> was used only as a hover on the website header,
                        but I thought it would match the prize of this campaign.
                        And it represent the brilliant women and the elegance of the Website.
                        <br><br><span class="purple">#552F65</span> was used in various places, so I used it mainly as a CTA button.
                    </p>
                    <div class="work__color--item--flex-top">
                        <div class="color--box">#BFAE8E</div>
                        <div class="color--box">#552F65</div>
                        <div class="color--box">#F1F1F1</div>
                    </div>
                </div>
            </section>

            <div class="scroll__container">
                <section class="work__image--color wordsworth scroll__item container">
                    <div class="image__wrapper wordsworth">
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/color/color__symbol.png" alt="color image symbol">
                        <p class="space__left">- Symbol</p>
                        <img class="big" src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/color/work-img1.png" alt="color image section">
                        <p>- Emphasis</p>
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/color/color__symbol2.png" alt="color image symbol">
                        <p class="space__left">- CTA button</p>
                        <img class="big" src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/color/color__countdown.png" alt="color image countdown">
                        <p>- Count down timer</p>
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/color/color__icons.png" alt="color image icons">
                        <p class="space__left">- Icons</p>
                    </div>
                </section>
            </div>
            <!--right section available to scroll-->
        </div>
        <!--introduction of color-->

        <div class="sticky__container">
            <section class="work__font sticky container">
                <h1 class="section__title work__h1">Fonts</h1>
                <p>Used the same font style to avoid breaking the existing client website worldview.
                    Both fonts are serif font is used, in order to show the difference,
                    I changed the weight and devised the space between letters and lines.
                </p>
                <div class="work__font--item">
                    <h4>Base - Georgia</h4>
                    <div class="work__font--item-each">
                        <img class="font-wordsworth" src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/font/fontGeogiaRegular.png" alt="font Georgia">
                        <p>Regular</p>
                    </div>
                </div>
                <div class="work__font--item">
                    <h4>Heading  - Hoefler Text</h4>
                    <div class="work__font--item-each">
                        <img class="font-wordsworth" src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/font/fontHoeflerRegular.png" alt="font Hoefler Text">
                        <p>Regular</p>
                    </div>
                </div>
            </section>

            <div class="scroll__container">
                <section class="work__image--font wordsworth scroll__item container">
                    <div class="image__wrapper wordsworth">
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/font/font__heading.png" alt="font image heading">
                        <p>- Heading</p>
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/font/font__form.png" alt="font image form">
                        <p>- Form</p>
                        <img class="small" src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/font/font__description.png" alt="font image description">
                        <p class="space__left">- Description text</p>
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/font/font__testimonial.png" alt="font image testimonial">
                        <p>- Testimonial</p>
                    </div>
                </section>
            </div>
            <!--right section available to scroll-->
        </div>
        <!--introduction of fonts-->

        <section class="work__link">
            <div class="work__link--images wordsworth">
                <img src="<?php echo get_template_directory_uri()?>/dist/images/wordsworth/device.jpg" alt="device image">
            </div>
            <div class="pagenation container">
                <h4 class="prev"><?php previous_post_link('%link', '< previous'); ?></h4>
                <h4 class="next"><?php next_post_link('%link', 'next >'); ?></h4>
            </div>
        </section>
        <!--work image and link to Website-->

    </div>
    <!--animsition-->


<?php get_footer(); ?>
