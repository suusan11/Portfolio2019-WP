<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-08-02
 * Time: 17:38
 */
?>

<div class="animsition">
  <div class="sticky__container">
    <section id="js-breakPoint" class="work__intro--black sticky container">
      <h2>Portfolio</h2>
      <p>All my technology and passion on this portfolio site. In particular, with an emphasis on the work section, the
        concept of design and tools used for development are introduced.
      </p>
      <div class="detail-set">
        <p>#Web Design #Web Development</p>
        <p>WordPress, HTML5, SCSS, JavaScript, XD, Illustrator, Photoshop</p>
        <p>July. 2019</p>
      </div>
      <a class="hover__link" href="https://suzukimie.com/" target="_blank">Visit Website</a>
    </section>

    <div class="scroll__container">
      <section class="work__image portfolio scroll__item container">
        <img
          src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/whole.png"
          alt="whole page image">
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
        <p>The contrasting black and white colors express a wide range of flexibility and added my own color pink to
          express myself.
        </p>
        <div class="work__color--item--flex-top portfolio-color">
          <div class="color--box">#2d3133</div>
          <div class="color--box">#FFFFFF</div>
          <div class="color--box">#F28888</div>
        </div>
      </div>
    </section>

    <div class="scroll__container">
      <section class="work__image--color portfolio scroll__item container">
        <div class="image__wrapper portfolio">
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/color/color__header.png"
            alt="color image header">
          <p>- Header</p>
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/color/color__header2.png"
            alt="color image header">
          <p>- Header for mobile device</p>
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/color/color__icons.png"
            alt="color image icons">
          <p>- Icons</p>
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/color/color__text.png"
            alt="color hover text">
          <p>- Hover effect</p>
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/color/color__button.png"
            alt="color hover text">
          <p>- Button</p>
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/color/color__hero.png"
            alt="color hover text">
          <p>- Hero</p>
        </div>
      </section>
    </div>
    <!--right section available to scroll-->
  </div>
  <!--introduction of color-->

  <div class="sticky__container">
    <section class="work__font sticky container">
      <h1 class="section__title work__h1">Fonts</h1>
      <p>Chose to focus on readability on any device and browser. Even if the font size is reduced with the smartphone
        size, it does not feel difficult to read.</p>
      <div class="work__font--item">
        <h4>Base - Robot</h4>
        <div class="flex">
          <div class="work__font--item-each">
            <img class="font-portfolio"
              src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/font/fontRobotRegular.png"
              alt="font Robot Regular">
            <p>Regular</p>
          </div>
          <div class="work__font--item-each">
            <img class="font-portfolio"
              src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/font/fontRobotBold.png"
              alt="font Robot Bold">
            <p>Bold</p>
          </div>
        </div>
      </div>
      <div class="work__font--item">
        <h4>Specially - Roboto Slab</h4>
        <div class="work__font--item-each">
          <img class="font-portfolio"
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/font/fontRobotSlab.png"
            alt="font Roboto Slab Regular">
          <p>Regular</p>
        </div>
      </div>
    </section>

    <div class="scroll__container">
      <section class="work__image--font portfolio scroll__item container">
        <div class="image__wrapper portfolio">
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/font/font__heading.png"
            alt="font image heading">
          <p>- Heading</p>
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/font/font__values.png"
            alt="font image values">
          <p>- Values</p>
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/font/font__works.png"
            alt="font image description of work detail">
          <p>- Description of work detail</p>
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/font/font__hero.png"
            alt="font image hero">
          <p>- Hero</p>
        </div>
      </section>
    </div>
    <!--right section available to scroll-->
  </div>
  <!--introduction of fonts-->

  <div class="sticky__container">
    <section class="work__feature portfolio sticky container">
      <h1 class="section__title work__h1">Grid</h1>
      <p>Placed the photos as if I was viewing an album using CSS Grid.
        It also supports responsiveness, and when the width becomes less 1000px, it becomes 1 column.
      </p>
    </section>
    <div class="scroll__container">
      <section class="work__image--feature portfolio scroll__item container">
        <img
          src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/feature.png"
          alt="grid image">
      </section>
    </div>
    <!--right section available to scroll-->
  </div>
  <!--introduction of feature-->

  <section class="work__link">
    <div class="work__link--images">
      <img
        src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/devices__image.jpg"
        alt="devices image">
    </div>
    <a class="common__button button__work--bottom" href="https://suzukimie.com/" target="_blank">Visit
      Website</a>
    <div class="pagenation container">
      <h4 class="prev"><?php previous_post_link('%link', '< previous'); ?>
      </h4>
      <h4 class="next"><?php next_post_link('%link', 'next >'); ?>
      </h4>
    </div>
  </section>
  <!--work image and link to Website-->
</div>
<!--animsition-->