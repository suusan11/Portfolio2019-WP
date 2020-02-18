<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2020-02-17
 * Time: 17:38
 */
?>

<div class="animsition">
  <div class="sticky__container">
    <section id="js-breakPoint" class="work__intro--black sticky container">
      <h2>React Form</h2>
      <p>This is a profile page that users register their personal information and the categories they are interested
        in.
        The form that can be applied to any platform that has inputs, radio buttons, and checkboxes.
        The state is managed in the parent component using Hooks, and passed as props to the child component.

      </p>
      <div class="detail-set">
        <p>#Web Development</p>
        <p>React.js, Grommet</p>
        <p>Feb. 2020</p>
      </div>
      <a class="hover__link" href="https://suusan11.github.io/React_Form/" target="_blank">View Demo</a>
    </section>

    <div class="scroll__container">
      <section class="work__image portfolio scroll__item container">
        <img
          src="<?php echo get_template_directory_uri()?>/dist/images/react_form/whole.png"
          alt="whole page image">
      </section>
    </div>
    <!--right section available to scroll-->
  </div>
  <!--introduction of work-->

  <div class="sticky__container">
    <section class="work__color sticky container">
      <h1 class="section__title work__h1">Input</h1>
      <div class="work__color--item">
        <p>It has validated not to accept type letters since this input is assumed for number input.
          And it has a limit to input depends on the type of input.
          The month can type 01 to 12, the day can type 01 to 31 and the year can type 4 digits and doesn’t allow
          starting with 0. Adding a placeholder leads to an improvement in user experience.
        </p>
      </div>
    </section>

    <div class="scroll__container">
      <section class="work__image--color react_form scroll__item container">
        <div class="image__wrapper portfolio">
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/react_form/input.png"
            alt="input image">
          <p>- Number input</p>
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
      <h1 class="section__title work__h1">Sticky Layout</h1>
      <p>In consideration of UX, the sentences were fixed to the left for easy reading, and the related images were
        placed to the right so that they could be seen by scrolling.
      </p>
    </section>
    <div class="scroll__container">
      <section class="work__image--feature portfolio scroll__item container">
        <div class="image__wrapper">
          <video
            src="<?php echo get_template_directory_uri()?>/dist/images/portfolio/scroll__video.mp4"
            loop autoplay muted playsinline></video>
        </div>
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