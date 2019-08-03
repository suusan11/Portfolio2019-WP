<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-08-02
 * Time: 19:36
 */
?>

    <div class="animsition">

        <div class="work__intro--flex">
            <section id="js-breakPoint" class="work__intro--black container ui">
                <h2>DailyUI</h2>
                <p>Challenging “Daily UI”. During designing 100 of theme, I have improved my skill of design and using those tool.</p>
                <div class="detail-set">
                    <p>#UI Design</p>
                    <p>Illustrator, Photoshop, XD</p>
                    <p>Jun 2018</p>
                </div>
            </section>

            <section class="work__intro container ui">
                <div class="work__intro-top">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/ui/thumbnail.png" alt="ui design thumbnail">
                </div>
            </section>
        </div>
        <!--introduction of work-->

        <section class="work__ui container">
            <div class="work__description">
                <h1 class="section__title work__h1">#11<br>- Flash Message</h1>
                <p>Added playfulness by showing success and errors in a puzzle.</p>
                <img src="<?php echo get_template_directory_uri()?>/dist/images/ui/work-img1.png" alt="work image ui">
            </div>
            <div class="work__color">
                <h1 class="section__title work__h1">Colors</h1>
                <div class="work__color--item">
                    <h4>Success</h4>
                    <div class="work__color--item--flex-top ui-color">
                        <div class="color--box">#BADFB7</div>
                        <div class="color--box">#45D274</div>
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/ui/component1-1.png" alt="component success ui">
                    </div>
                </div>
                <div class="work__color--item">
                    <h4>Error</h4>
                    <div class="work__color--item--flex-bottom ui-color">
                        <div class="color--box">#FDC0B7</div>
                        <div class="color--box">#D5413D</div>
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/ui/component1-2.png" alt="component error ui">
                    </div>
                </div>
            </div>
        </section>
        <!--first ui section-->

        <section class="work__ui container">
            <div class="work__description">
                <h1 class="section__title work__h1">#31<br>- File Upload</h1>
                <p>Used a cloud which is generally used for the file upload icon to convey visual clarity.
                    Added the loading bar below it to make it possible to see the progress visually.</p>
                <img class="work__img--small" src="<?php echo get_template_directory_uri()?>/dist/images/ui/work-img2.png" alt="work image ui">
            </div>
            <div class="work__color">
                <h1 class="section__title work__h1">Colors</h1>
                <div class="work__color--item">
                    <div class="work__color--item--flex ui-color">
                        <div class="color--box">#160F73</div>
                        <div class="color--box">#A5E5ED</div>
                    </div>
                </div>
            </div>
        </section>
        <!--second ui section-->

        <section class="work__link">
            <div class="pagenation container">
                <h4 class="prev"><?php previous_post_link('%link', '< previous'); ?></h4>
                <h4 class="next"><?php next_post_link('%link', 'next >'); ?></h4>
            </div>
        </section>

    </div>
    <!--animsition-->