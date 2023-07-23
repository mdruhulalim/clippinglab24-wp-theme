<?php
    get_header();
    $directory = get_template_directory_uri();
    the_post();
    // get the image path
    $imagepath = wp_get_attachment_image_src(
        get_post_thumbnail_id(),'large'
    );
?>
<!-- HEADER AREA END   -->

<div class="breadcrumb_area">
      <div class="breadcrumb-shapes">
        <img
          class="shape_01 position-absolute"
          src="<?=$directory?>/assets/img/slide/sl-1.png"
          alt="shape_01"
        />
        <img
          class="shape_02 position-absolute"
          src="<?=$directory?>/assets/img/slide/sl-2.png"
          alt="shape_02"
        />
        <img
          class="shape_03 position-absolute"
          src="<?=$directory?>/assets/img/slide/sl-3.png"
          alt="shape_03"
        />
        <img
          class="shape_04 position-absolute"
          src="<?=$directory?>/assets/img/slide/sl-4.png"
          alt="shape_04"
        />
        <img
          class="shape_05 position-absolute"
          src="<?=$directory?>/assets/img/slide/sl-5.png"
          alt="shape_05"
        />
        <img
          class="shape_06 position-absolute"
          src="<?=$directory?>/assets/img/slide/sl-6.png"
          alt="shape_06"
        />
        <img
          class="shape_07 position-absolute"
          src="<?=$directory?>/assets/img/slide/sl-7.png"
          alt="shape_07"
        />
        <img
          class="bc-01 position-absolute"
          src="<?=$directory?>/assets/img/about/breadcrumb/bread.png"
          alt="shape_07"
        />
        <img
          class="shape_10 position-absolute"
          src="<?=$directory?>/assets/img/shapes/header_left.png"
          alt="shape_10"
        />
        <img
          class="shape_11 position-absolute"
          src="<?=$directory?>/assets/img/shapes/header_middle.png"
          alt="shape_11"
        />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb_content">
              <h3>Our Blog</h3>
              <ul>
                <li>
                  <a href="<?=site_url();?>"
                    >Home<i class="far fa-chevron-right"></i
                  ></a>
                </li>
                <li><a href="<?=site_url();?>/blog">blog</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- breadcrumb_area end  -->

      <!-- .services area start  -->
      <div class="service_area custom_animation mb-60 mobile-res-mb pt-50">
        <div class="service_shapes">
          <img
            src="<?php echo $directory;?>/assets/img/shapes/service_right.png"
            class="position-absolute service_01"
            alt="service_shapes"
          />
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <h1>Title: <?=the_title();?></h1>
                <H6>Author: <?=the_author();?></H6>
                <img src="<?=$imagepath[0]?>" alt="<?=$imagepath?>" width="50%">
                <p class="light_color">
                    Excerpt: <?=the_excerpt();?>
                </p>
                <p><?=the_content();?></p>
                <p>Date: <?=the_date();?></p>
            </div>
            <?=comment_form();?>
          </div>
        </div>
      </div>
      <!-- .services area end  -->


      <!-- footer area start  -->

<?php
    get_footer();
?>