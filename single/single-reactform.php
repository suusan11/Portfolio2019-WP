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
    <section class="work__reactform sticky container">
      <h1 class="section__title work__h1">Input</h1>
      <div class="work__reactform--item">
        <p>It has validated not to accept type letters since this input is assumed for number input.
          And it has a limit to input depends on the type of input.
          The month can type 01 to 12, the day can type 01 to 31 and the year can type 4 digits and doesn’t allow
          starting with 0. Adding a placeholder leads to an improvement in user experience.
        </p>
      </div>
    </section>

    <div class="scroll__container">
      <section class="work__image--reactform single scroll__item container">
        <div class="image__wrapper">
          <img
            src="<?php echo get_template_directory_uri()?>/dist/images/react_form/input.png"
            alt="input image">
          <p>- Number input</p>
        </div>
      </section>
    </div>
    <!--right section available to scroll-->
  </div>
  <!--introduction of input-->

  <div class="sticky__container">
    <section class="work__reactform sticky container">
      <h1 class="section__title work__h1">Click Event</h1>
      <div class="work__reactform--item">
        <h4>- Expecting Baby section</h4>
        <p>When the user clicks on [Yes], the BabyDue input will be displayed and it uses the same logic with Birthday
          month and year input.</p>
      </div>
      <div class="work__reactform--item">
        <h4>- Importance section</h4>
        <p>When the user clicks on [Others], extra input box will be displayed and up to 8 can be added.</p>
      </div>
    </section>

    <div class="scroll__container">
      <section class="work__image--reactform scroll__item container">
        <div class="image__wrapper">
          <video
            src="<?php echo get_template_directory_uri()?>/dist/images/react_form/babydue.mp4"
            loop autoplay muted playsinline></video>
          <p>- Show another component</p>
        </div>
        <div class="image__wrapper">
          <video
            src="<?php echo get_template_directory_uri()?>/dist/images/react_form/others.mp4"
            loop autoplay muted playsinline></video>
          <p>- Show another component and add input box</p>
        </div>
    </div>
    </section>
  </div>
  <!--right section available to scroll-->
</div>
<!--introduction of click event-->

<div class="sticky__container">
  <section class="work__reactform sticky container">
    <h1 class="section__title work__h1">Input Search</h1>
    <div class="work__reactform--item">
      <p>Stores can be added by searching by users. When a user clicks on a suggested store, it will be selected and
        added.
      </p>
    </div>
  </section>
  <div class="scroll__container">
    <section class="work__image--reactform scroll__item container">
      <div class="image__wrapper">
        <video
          src="<?php echo get_template_directory_uri()?>/dist/images/react_form/search.mp4"
          loop autoplay muted playsinline></video>
        <p>- Input Search</p>
      </div>
    </section>
  </div>
  <!--right section available to scroll-->
</div>
<!--introduction of input search-->

<div class="sticky__container">
  <section class="work__reactform sticky container">
    <h1 class="section__title work__h1">Error Handling</h1>
    <div class="work__reactform--item">
      <p>If there is no change in the required fields, the text and a red frame appear. Required items are given
        required
        props to control the style when errors occur.
      </p>
    </div>
  </section>
  <div class="scroll__container">
    <section class="work__image--reactform scroll__item container">
      <div class="image__wrapper">
        <video
          src="<?php echo get_template_directory_uri()?>/dist/images/react_form/error.mp4"
          loop autoplay muted playsinline></video>
        <p>- Error</p>
      </div>
    </section>
  </div>
  <!--right section available to scroll-->
</div>
<!--introduction of error handling-->

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