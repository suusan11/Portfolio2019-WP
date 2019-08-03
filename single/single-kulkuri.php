<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-08-02
 * Time: 17:38
 */

get_header() ;
?>

<div class="animsition">
    <div class="sticky__container">
        <section id="js-breakPoint" class="work__intro--black sticky container">
            <h2>kulkuri</h2>
            <p>‘kulkuri’ means freedom traveller in Finnish.<br>
                This is a gallery site of my trip.
                I have introduced eight countries that have three contents about “attraction”, “food” and “scenery”.
                To show the photos with effect, using CSS Grid and assign theme color for each country.
            </p>
            <div class="detail-set">
                <p>#Web Design #Web Development</p>
                <p>HTML5, SCSS, JavaScript, XD, Illustrator, Photoshop</p>
                <p>Dec. 2018</p>
            </div>
            <a class="hover__link" href="https://kulkuriworld.com/">Visit Website</a>
        </section>

        <div class="scroll__container">
            <section class="work__image kulkuri scroll__item container">
                <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/whole.png" alt="whole page image">
            </section>
        </div>
        <!--right section available to scroll-->
    </div>
    <!--introduction of work-->

    <div class="sticky__container">
        <section class="work__color sticky container">
            <h1 class="section__title work__h1">Colors</h1>
            <div class="work__color--item">
                <h4>Theme color</h4>
                <p>Expressed a new world that I can meet on a trip.
                    Blue is the sea, orange is the sun, and red is the warmth of people.
                </p>
                <div class="work__color--item--flex-top kulkuri-color">
                    <div class="color--box">#C6FFDD</div>
                    <div class="color--box">#FBD786</div>
                    <div class="color--box">#F7797D</div>
                </div>
            </div>
            <div class="work__color--item">
                <h4>Countries color</h4>
                <p>Assigned a specific color to each country that is a general image or the mood I felt on a trip.</p>
                <div class="work__color--item--flex-middle kulkuri-color">
                    <div class="name-set">
                        <p>Australia</p>
                        <div class="color--box">#46509F</div>
                    </div>
                    <div class="name-set">
                        <p>German</p>
                        <div class="color--box">#E59948</div>
                    </div>
                    <div class="name-set">
                        <p>Taiwan</p>
                        <div class="color--box">#B77388</div>
                    </div>
                    <div class="name-set">
                        <p>Canada</p>
                        <div class="color--box">#B0272C</div>
                    </div>
                    <div class="name-set">
                        <p>Malaysia</p>
                        <div class="color--box">#938BFF</div>
                    </div>
                    <div class="name-set">
                        <p>Finland</p>
                        <div class="color--box">#3B91A6</div>
                    </div>
                    <div class="name-set">
                        <P>Thailand</P>
                        <div class="color--box">#FECC35</div>
                    </div>
                    <div class="name-set">
                        <p>USA</p>
                        <div class="color--box">#9FA9A2</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="scroll__container">
            <section class="work__image--color kulkuri scroll__item container">
                <div class="work__image--color--flex">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/color/color__australia.jpg" alt="color image australia">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/color/color__german.jpg" alt="color image german">
                </div>
                <img class="no__flex" src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/color/color__fin.jpg" alt="color image finland">
                <div class="work__image--color--flex">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/color/color__canada.jpg" alt="color image canada">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/color/color__malaysia.jpg" alt="color image malaysia">
                </div>
                <img class="no__flex" src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/color/color__thai.jpg" alt="color image thailand">
                <div class="work__image--color--flex">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/color/color__taiwan.jpg" alt="color image taiwan">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/color/color__usa.jpg" alt="color image usa">
                </div>
            </section>
        </div>
        <!--right section available to scroll-->
    </div>
    <!--introduction of color-->

    <div class="sticky__container">
        <section class="work__font sticky container">
            <h1 class="section__title work__h1">Fonts</h1>
            <div class="work__font--item">
                <h4>Base - Mukta</h4>
                <div class="flex">
                    <div class="work__font--item-each">
                        <img class="font-kulkuri" src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/font/fontMuktaLight.png" alt="font Mukta Light">
                        <p>Light</p>
                    </div>
                    <div class="work__font--item-each">
                        <img class="font-kulkuri" src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/font/fontMuktaRegular.png" alt="font Mukta Regular">
                        <p>Regular</p>
                    </div>
                </div>
            </div>
            <div class="work__font--item">
                <h4>Heading  - Signika Negative</h4>
                <div class="work__font--item-each">
                    <img class="font-kulkuri" src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/font/fontSignikaRegular.png" alt="font Signika Regular">
                    <p>Regular</p>
                </div>
            </div>
            <div class="work__font--item kulkuri__last">
                <h4>Country name on photo - Amatic SC</h4>
                <p class="description__p">Imagined a handmade album and made it look like handwriting.</p>
                <div class="work__font--item-each">
                    <img class="font-kulkuri" src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/font/fontAmaticRegular.png" alt="font Amatic Regular">
                    <p>Regular</p>
                </div>
            </div>
        </section>

        <div class="scroll__container">
            <section class="work__image--font kulkuri scroll__item container">
                <div class="work__image--font-item">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/font/font__header.png" alt="font image header">
                    <p>- Header</p>
                </div>
                <div class="work__image--font-item">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/font/font__description1.png" alt="font image description">
                    <p>- Travel guide to each county page</p>
                </div>
                <div class="work__image--font-item">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/font/font__description2.png" alt="font image description">
                    <p>- Description</p>
                </div>
                <div class="work__image--font-item">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/font/font__heading.png" alt="font image heading">
                    <p>- Heading</p>
                </div>
                <div class="work__image--font-item">
                    <div class="flex">
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/font/font__country1.jpg" alt="font image country name">
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/font/font__country2.jpg" alt="font image country name">
                    </div>
                    <p>- Photo frame</p>
                </div>
            </section>
        </div>
        <!--right section available to scroll-->
    </div>
    <!--introduction of fonts-->

    <div class="sticky__container">
        <section class="work__feature kulkuri sticky container">
            <h1 class="section__title work__h1">Grid</h1>
            <p>Placed the photos as if I was viewing an album using CSS Grid.
                It also supports responsiveness, and when the width becomes less 1000px, it becomes 1 column.
            </p>
        </section>
        <div class="scroll__container">
            <section class="work__image--feature kulkuri scroll__item container">
                <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/feature.png" alt="grid image">
            </section>
        </div>
        <!--right section available to scroll-->
    </div>
    <!--introduction of feature-->

    <section class="work__link">
        <div class="work__link--images">
            <img src="<?php echo get_template_directory_uri()?>/dist/images/kulkuri/device__image.jpg" alt="devices image">
        </div>
        <a class="common__button button__work--bottom" href="https://kulkuriworld.com/" target="_blank">Visit Website</a>
        <div class="pagenation container">
            <h4 class="prev"><?php previous_post_link('%link', '< previous'); ?></h4>
            <h4 class="next"><?php next_post_link('%link', 'next >'); ?></h4>
        </div>
    </section>
    <!--work image and link to Website-->
</div>
<!--animsition-->


<?php get_footer(); ?>
