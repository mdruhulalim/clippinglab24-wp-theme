<?php
// Template Name:Home
  get_header();
  $directory = get_template_directory_uri();
  // for codestar framework
  $codestar = get_option('clippinglab');
?>
<!-- HEADER AREA END   -->

      <div class="sidebar">
        <div class="wrap d-flex">
          <div class="logo mb-30">
            <img src="<?php echo $directory;?>/assets/img/slide/whitelogo.png" alt="" />
          </div>
          <div class="close_btn_sidebar">
            <span class="searchClose sidebarClose">
              <i class="fal fa-times-circle"></i
            ></span>
          </div>
        </div>
        <div class="paragraph mb-40">
          <p>
            Sed ut perspiciatis unde omnis iste natus error voluptatem Sed ut
            perspiciatis unde omnis iste natus error voluptatem. Sed ut
            perspiciatis, Sed ut perspiciatis unde omnis iste natus error
            voluptatem Sed ut perspiciatis unde omnis iste natus error
            voluptatem. Sed ut perspiciatis
          </p>
        </div>
        <h4 class="project_title">Beautiful Projects</h4>

        <div class="show_projects">
          <!-- project area start  -->
          <div class="project_slider text-center">
            <div class="project_activitionn">
              <div class="project_items">
                <img src="<?php echo $directory;?>/assets/img/home_two_ass/projects/p1.png" alt="" />
              </div>
              <div class="project_items">
                <img src="<?php echo $directory;?>/assets/img/home_two_ass/projects/p3.png" alt="" />
              </div>
              <div class="project_items">
                <img src="<?php echo $directory;?>/assets/img/home_two_ass/projects/p1.png" alt="" />
              </div>
              <div class="project_items">
                <img src="<?php echo $directory;?>/assets/img/home_two_ass/projects/p3.png" alt="" />
              </div>
              <div class="project_items">
                <img src="<?php echo $directory;?>/assets/img/home_two_ass/projects/p1.png" alt="" />
              </div>
            </div>
          </div>
          <!-- project area end  -->
        </div>
        <div class="contact_us pt-70">
          <h4 class="contact-title mb-20">contact us</h4>
          <ul class="inline_list">
            <li>
              <img src="<?php echo $directory;?>/assets/img/slide/mailblue.png" alt="" /><a
                href="https://themeim.com/cdn-cgi/l/email-protection"
                class="__cf_email__"
                data-cfemail="3c55525a53125f50554c594e7c59515d5550125f5351"
                >[email&#160;protected]</a
              >
            </li>
            <li>
              <img src="<?php echo $directory;?>/assets/img/slide/phonblue.png" alt="" />+1 225 365 03
            </li>
          </ul>
          <div class="social_link pt-20 mb-20">
            <ul>
              <li>
                <a href="#"><i class="fab fa-facebook-f icon"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter icon"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-instagram icon"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-youtube icon"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- mobile menu -->
      <div class="activemobile">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-2">
              <div class="mobile-logo">
                <a href="index.html"
                  ><img src="<?php echo $directory;?>/assets/img/logo/logo.png" alt=""
                /></a>
              </div>
            </div>
            <div class="col-8 text-end">
              <div class="icon">
                <a href="#" class="open-mobile-menu"
                  ><i class="far fa-bars"></i
                ></a>
                <!-- <div class="mobile-menu">
                            </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="fix">
        <div class="side-info">
          <button class="side-info-close"><i class="fal fa-times"></i></button>
          <div class="side__logo mb-25">
            <a href="index.html">
              <img src="<?php echo $directory;?>/assets/img/logo/log.png" alt="logo" />
            </a>
          </div>
          <div class="mobile-menu"></div>
          <div class="contact-infos mt-30 mb-30">
            <div class="contact-list mb-30">
              <h4>Contact Info</h4>
              <ul>
                <li>
                  <i class="fal fa-map"></i>
                  <a href="#">12/A, Mirnada City Tower, NYC</a>
                </li>

                <li>
                  <i class="fal fa-clock"></i>
                  <a href="#">Mon - Fri: 9.00am - 11.00pm</a>
                </li>

                <li>
                  <i class="fal fa-phone"></i
                  ><a href="tell:+876864764764"> +876 864 764 764 </a>
                </li>

                <li>
                  <i class="far fa-envelope"></i
                  ><a
                    href="https://themeim.com/cdn-cgi/l/email-protection#157c7b737a5562707778747c793b767a78"
                  >
                    <span
                      class="__cf_email__"
                      data-cfemail="5a33343c351a2d3f38373b333674393537"
                      >[email&#160;protected]</span
                    >
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="offcanvas-overlay"></div>

      <!-- slide area start  -->
      <div class="slide_area">
        <div class="slide_shape">
          <img
            class="shape_01 position-absolute"
            src="<?php echo $directory;?>/assets/img/slide/sl-1.png"
            alt="shape_01"
          />
          <img
            class="shape_02 position-absolute"
            src="<?php echo $directory;?>/assets/img/slide/sl-2.png"
            alt="shape_02"
          />
          <img
            class="shape_03 position-absolute"
            src="<?php echo $directory;?>/assets/img/slide/sl-3.png"
            alt="shape_03"
          />
          <img
            class="shape_04 position-absolute"
            src="<?php echo $directory;?>/assets/img/slide/sl-4.png"
            alt="shape_04"
          />
          <img
            class="shape_05 position-absolute"
            src="<?php echo $directory;?>/assets/img/slide/sl-5.png"
            alt="shape_05"
          />
          <img
            class="shape_06 position-absolute"
            src="<?php echo $directory;?>/assets/img/slide/sl-6.png"
            alt="shape_06"
          />
          <img
            class="shape_07 position-absolute"
            src="<?php echo $directory;?>/assets/img/slide/sl-7.png"
            alt="shape_07"
          />
          <img
            class="shape_08 position-absolute"
            src="<?php echo $directory;?>/assets/img/hero-one.png"
            alt="shape_07"
          />
          <img
            class="shape_09 position-absolute"
            src="<?php echo $directory;?>/assets/img/slide/face.png"
            alt="shape_07"
          />
          <img
            class="shape_10 position-absolute"
            src="<?php echo $directory;?>/assets/img/shapes/header_left.png"
            alt="shape_10"
          />
          <img
            class="shape_11 position-absolute"
            src="<?php echo $directory;?>/assets/img/shapes/header_middle.png"
            alt="shape_11"
          />
          <img
            class="shape_12 position-absolute"
            src="<?php echo $directory;?>/assets/img/shapes/slider_under.png"
            alt="shape_11"
          />
          <img
            class="shape_13 position-absolute"
            src="<?php echo $directory;?>/assets/img/shapes/slider_right.png"
            alt="shape_11"
          />
        </div>
        <div class="custom-width">
          <div class="row">
            <div class="col-sm-12">
              <div class="slide_img beforelsiee xlnone d-xl-none">
                <img
                  src="<?php echo $directory;?>/assets/img/slide/slide_main.png"
                  class="img-1"
                  alt="slide_shape_01"
                />
                <img
                  src="<?php echo $directory;?>/assets/img/slide/p1.png"
                  class="img-2 position-absolute"
                  alt="slide_shape_02"
                />
                <img
                  src="<?php echo $directory;?>/assets/img/slide/p2.png"
                  class="img-3 position-absolute"
                  alt="slide_shape_03"
                />
                <img
                  src="<?php echo $directory;?>/assets/img/slide/p3.png"
                  class="img-4 position-absolute"
                  alt="slide_shape_04"
                />
                <img
                  src="<?php echo $directory;?>/assets/img/slide/p4.png"
                  class="img-5 position-absolute"
                  alt="slide_image"
                />
              </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-6">
              <div class="slide_content">
                <h4
                  class="animated wow animate__fadeIn"
                  data-animation="fadeInUp"
                  data-delay="2s"
                  data-wow-duration="2s"
                >
                  <?=$codestar['hs1-top-text']?>
                </h4>
                <h2
                  class="wow animate__fadeIn"
                  data-animation="fadeInUp"
                  data-delay="2.5s"
                  data-wow-duration="2.5s"
                >
                <?=$codestar['hs1-header']?>
                </h2>
                <p
                  class="wow animate__fadeIn"
                  data-animation="fadeInUp"
                  data-delay="3s"
                  data-wow-duration="3s"
                >
                  <?=$codestar['hs1-sub-heading']?>
                </p>
                <div class="site_button site_button-two">
                  <a class="cmn_btn slide_btn slide_btn_01" href="<?=$codestar['hs1-button-one-link']?>"
                    ><?=$codestar['hs1-button-one-text']?> <i class="fas fa-chevron-right"></i
                  ></a>
                  <a class="cmn_btn cmn_outline" href="<?=$codestar['hs1-button-two-link']?>"
                    ><span><?=$codestar['hs1-button-two-text']?></span
                    ><i class="fas fa-chevron-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-5 offset-xl-1 text-end">
              <div class="slide_img beforelsiee DisplayNone">
                <img
                  src="<?=$codestar['hs1-image']['url']?>"
                  class="img-1"
                  alt="<?=$codestar['hs1-image']['alt']?>"
                />
                <img
                  src="<?=$codestar['hs1-p1']['url']?>"
                  class="img-2 position-absolute"
                  alt="<?=$codestar['hs1-p1']['alt']?>"
                />
                <img
                  src="<?=$codestar['hs1-p2']['url']?>"
                  class="img-3 position-absolute"
                  alt="<?=$codestar['hs1-p2']['alt']?>"
                />
                <img
                  src="<?=$codestar['hs1-p3']['url']?>"
                  class="img-4 position-absolute"
                  alt="<?=$codestar['hs1-p3']['alt']?>"
                />
                <img
                  src="<?=$codestar['hs1-p4']['url']?>"
                  class="img-5 position-absolute"
                  alt="<?=$codestar['hs1-p4']['alt']?>"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- slide area end  -->

      <!-- about us area start  -->
      <div class="about_area custom_animation mb-0">
        <div class="about_shapes">
          <img
            src="<?php echo $directory;?>/assets/img/shapes/about.png"
            class="position-absolute about_o1"
            alt="aboutShapes"
          />
          <img
            src="<?php echo $directory;?>/assets/img/shapes/about2image.png"
            class="position-absolute about_o2"
            alt="aboutShapes"
          />
          <img
            src="<?php echo $directory;?>/assets/img/shapes/aboutoneimage.png"
            class="position-absolute about_o3"
            alt="aboutShapes"
          />
          <img
            src="<?php echo $directory;?>/assets/img/about/ss.png"
            class="position-absolute about_4"
            alt="aboutShapes"
          />
        </div>
        <div class="custom-width">
          <div class="row align-center-mobile">
            <div class="col-md-12 col-lg-5 col-xl-7">
              <div class="about_images scroll_01">
                <div class="about_image_1">
                  <img
                    class="about_shape_one"
                    src="<?=$codestar['hs2-p1']['url']?>"
                    alt="<?=$codestar['hs2-p1']['alt']?>"
                  />
                  <img
                    class="about_shape_two"
                    src="<?php echo $directory;?>/assets/img/about/about_shape1.png"
                    alt="about_image_01"
                  />
                  <img
                    class="about_shape_three"
                    src="<?php echo $directory;?>/assets/img/about/about_shape_2.png"
                    alt="about_image_01"
                  />
                </div>
                <div class="about_img_2">
                  <img
                    class="about_img_one"
                    src="<?php echo $directory;?>/assets/img/about/show_sh.png"
                    alt="about_shape_02"
                  />
                  <img
                    class="about_img_two"
                    src="<?=$codestar['hs2-image']['url']?>"
                    alt="<?=$codestar['hs2-image']['alt']?>"
                  />
                  <p class="rotate"><?=$codestar['hs2-since-text']?></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-7 col-xl-5">
              <div class="wrap_about">
                <div class="section_wrapper aboutwraper">
                  <h4
                    class="sub_title wow animate__flipInXx"
                    data-animation="fadeInUp"
                    data-delay="1s"
                  >
                    <?=$codestar['hs2-top-text']?>
                  </h4>
                  <h2
                    class="title wow animate__bounceInn"
                    data-animation="fadeInUp"
                    data-delay="1.5s"
                  >
                    <?=$codestar['hs2-heading']?>
                  </h2>
                </div>
                <div class="about_content">
                  <h3>
                    <?=$codestar['hs2-heading-two']?>
                  </h3>
                  <p>
                    <?=$codestar['hs2-sub-heading']?>
                  </p>
                  <div class="site_button">
                    <a
                      class="cmn_btn cmn_outline cmn_outline_two"
                      href="<?=$codestar['hs2-button-link']?>"
                      ><span><?=$codestar['hs2-button-text']?></span>
                      <i class="fas fa-chevron-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- about us area end  -->

      <!-- .services area start  -->
      <div class="service_area custom_animation mb-60 mobile-res-mb">
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
              <div class="section_wrapper service_wraper mb-40">
                <h4
                  class="sub_title wow animate__flipInXx"
                  data-animation="fadeInUp"
                  data-delay="1s"
                >
                  Professional Photo Editing
                </h4>
                <h2
                  class="title wow animate__bounceInn"
                  data-animation="fadeInUp"
                  data-delay="1.5s"
                >
                  Our most popular <br />
                  Photo-editing services
                </h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="service-wrapper">
                <div class="row service_activition mx-auto">
                  <div class="col-md-4 col-lg-3 mr-35 service_card">
                    <div class="service_img text-center">
                      <img
                        src="<?php echo $directory;?>/assets/img/service/service_one.png"
                        alt="service_img"
                      />
                    </div>
                    <div class="service_content text-center">
                      <h3 class="service_title">Image Masking</h3>
                      <p class="light_color">
                        There are many variations of passages
                      </p>
                      <p>Starting at <b> $1.19</b> per image</p>
                    </div>
                    <a
                      class="radius_btn effectPlus"
                      href="service-details.html"
                    >
                      <i class="icon-serviceicon"></i>
                    </a>
                  </div>
                  <div class="col-md-4 col-lg-3 mx-5 service_card">
                    <div
                      class="service_img service_img_two text-center service_two"
                    >
                      <img
                        src="<?php echo $directory;?>/assets/img/service/service_two.png"
                        alt="service_img"
                      />
                    </div>
                    <div
                      class="service_content service_content_two text-center"
                    >
                      <h3 class="service_title">Clipping Path</h3>
                      <p class="light_color">
                        There are many variations of passages
                      </p>
                      <p>Starting at <b> $1.19</b> per image</p>
                    </div>
                    <a
                      class="radius_btn effectPlus"
                      href="service-details.html"
                    >
                      <i class="icon-serviceicon"></i>
                    </a>
                  </div>
                  <div class="col-md-4 col-lg-3 ml-35 service_card">
                    <div
                      class="service_img service_img_three text-center service_three"
                    >
                      <img
                        src="<?php echo $directory;?>/assets/img/service/service_three.png"
                        alt="service_img"
                      />
                    </div>
                    <div class="service_content text-center">
                      <h3 class="service_title">Multi-clipping Path</h3>
                      <p class="light_color">
                        There are many variations of passages
                      </p>
                      <p>Starting at <b> $1.19</b> per image</p>
                    </div>
                    <a
                      class="radius_btn effectPlus"
                      href="service-details.html"
                    >
                      <i class="icon-serviceicon"></i>
                    </a>
                  </div>
                  <div class="col-md-4 col-lg-3 mr-35 service_card">
                    <div class="service_img service_img_four text-center">
                      <img
                        src="<?php echo $directory;?>/assets/img/service/service_four.png"
                        alt="service_img"
                      />
                    </div>
                    <div class="service_content text-center">
                      <h3 class="service_title">Background</h3>
                      <p class="light_color">
                        There are many variations of passages
                      </p>
                      <p>Starting at <b> $1.19</b> per image</p>
                    </div>
                    <a
                      class="radius_btn effectPlus"
                      href="service-details.html"
                    >
                      <i class="icon-serviceicon"></i>
                    </a>
                  </div>
                  <div class="col-md-4 col-lg-3 mx-5 service_card">
                    <div class="service_img service_img_five text-center">
                      <img
                        src="<?php echo $directory;?>/assets/img/service/service_one.png"
                        alt="service_img"
                      />
                    </div>
                    <div class="service_content text-center">
                      <h3 class="service_title">Image Masking</h3>
                      <p class="light_color">
                        There are many variations of passages
                      </p>
                      <p>Starting at <b> $1.19</b> per image</p>
                    </div>
                    <a
                      class="radius_btn effectPlus"
                      href="service-details.html"
                    >
                      <i class="icon-serviceicon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .services area end  -->

      <!-- process area start  -->
      <div class="process_area mb-10 mobile-res-mb">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section_wrapper mb-80 text-center">
                <h4
                  class="sub_title wow animate__flipInXx"
                  data-animation="fadeInUp"
                  data-delay="1s"
                >
                  How it works
                </h4>
                <h2
                  class="title wow animate__bounceInn"
                  data-animation="fadeInUp"
                  data-delay="1.5s"
                >
                  How Clippinglab works
                </h2>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-12 col-xl-8 text-center">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div
                    class="process_card wow animate__fadeIn"
                    data-animation="fadeInUp"
                    data-delay="1s"
                    data-wow-duration="1s"
                  >
                    <div class="process_icon">
                      <img
                        class="process_one"
                        src="<?php echo $directory;?>/assets/img/services/ss_one.png"
                        alt="process_icon"
                      />
                    </div>
                    <div class="process_content">
                      <h4>01.PLACE WORK ORDER</h4>
                      <p>There are many variation and of passages</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div
                    class="process_card wow animate__fadeIn"
                    data-animation="fadeInUp"
                    data-delay="1.5s"
                    data-wow-duration="1.2s"
                  >
                    <div class="process_icon process_icon_2">
                      <img
                        class="process_two"
                        src="<?php echo $directory;?>/assets/img/services/ss_two.png"
                        alt="process_icon"
                      />
                    </div>
                    <div class="process_content">
                      <h4>02.quick response</h4>
                      <p>There are many variation and of passages</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div
                    class="process_card wow animate__fadeIn"
                    data-animation="fadeInUp"
                    data-delay="2s"
                    data-wow-duration="1.5s"
                  >
                    <div class="process_icon process_icon_3">
                      <img
                        class="process_three"
                        src="<?php echo $directory;?>/assets/img/services/ss_three.png"
                        alt="process_icon"
                      />
                    </div>
                    <div class="process_content">
                      <h4>03.image files</h4>
                      <p>There are many variation and of passages</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div
                    class="process_card wow animate__fadeIn"
                    data-animation="fadeInUp"
                    data-delay="2.5s"
                    data-wow-duration="1.8s"
                  >
                    <div class="process_icon process_icon_4">
                      <img
                        class="process_four"
                        src="<?php echo $directory;?>/assets/img/services/ss_four.png"
                        alt="process_icon"
                      />
                    </div>
                    <div class="process_content">
                      <h4>04.download image</h4>
                      <p>There are many variation and of passages</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div
                    class="process_card wow animate__fadeIn"
                    data-animation="fadeInUp"
                    data-delay="3s"
                    data-wow-duration="2s"
                  >
                    <div class="process_icon process_icon_5">
                      <img
                        class="process_five"
                        src="<?php echo $directory;?>/assets/img/services/ss_five.png"
                        alt="process_icon"
                      />
                    </div>
                    <div class="process_content">
                      <h4>05.made payment</h4>
                      <p>There are many variation and of passages</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div
                    class="process_card mb-0 wow animate__fadeIn"
                    data-animation="fadeInUp"
                    data-delay="3.5s"
                  >
                    <div class="process_icon process_icon_6">
                      <img
                        class="process_six"
                        src="<?php echo $directory;?>/assets/img/services/ss_six.png"
                        alt="process_icon"
                      />
                    </div>
                    <div class="process_content">
                      <h4>06.give us review</h4>
                      <p class="mb-0">
                        There are many variation and of passages
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-none d-xl-block">
              <div class="process_image">
                <div class="process_shape">
                  <img
                    class="process_shape_02"
                    src="<?php echo $directory;?>/assets/img/services/shape_ss_02.png"
                    alt="process_shape_02"
                  />
                  <img
                    class="process_shape_04"
                    src="<?php echo $directory;?>/assets/img/services/shape_ss_04.png"
                    alt="process_shape_04"
                  />
                  <img
                    class="process_shape_05"
                    src="<?php echo $directory;?>/assets/img/services/shape_ss_05.png"
                    alt="process_shape_05"
                  />
                  <img
                    class="process_shape_06"
                    src="<?php echo $directory;?>/assets/img/services/shape_ss_06.png"
                    alt="process_shape_06"
                  />
                  <img
                    class="process_shape_07"
                    src="<?php echo $directory;?>/assets/img/services/shape_ss_07.png"
                    alt="process_shape_08"
                  />
                  <!-- <img class="process_shape_09" src="./assets/img/services/rocket.png" alt="process_shape_06"> -->
                  <img
                    class="process_shape_10"
                    src="<?php echo $directory;?>/assets/img/services/rocketwithpeople.png"
                    alt="process_shape_06"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- process area end  -->

      <!-- shoot area start  -->
      <div class="shoot_area mb-60 mobile-res-mb">
        <div class="shoot_shapes">
          <img
            class="shoot_shapes_01"
            src="<?php echo $directory;?>/assets/img/slide/dottedshape.png"
            alt=""
          />
          <img class="shoot_shapes_04" src="<?php echo $directory;?>/assets/img/video/vd1.png" alt="" />
          <img class="shoot_shapes_05" src="<?php echo $directory;?>/assets/img/video/vd2.png" alt="" />
          <img
            class="shoot_shapes_06"
            src="<?php echo $directory;?>/assets/img/video/largpoly.png"
            alt=""
          />
          <img
            class="shoot_shapes_07"
            src="<?php echo $directory;?>/assets/img/video/vdshape.png"
            alt=""
          />
        </div>
        <div class="container">
          <div class="row custom-center">
            <div class="col-xl-8">
              <div class="shoot_box">
                <div class="wrapper wrapper_two">
                  <div class="video-main">
                    <div class="promo-video">
                      <div class="waves-block">
                        <div class="wavesTwo wave-1"></div>
                        <div class="wavesTwo wave-2"></div>
                        <div class="wavesTwo wave-3"></div>
                      </div>
                    </div>
                    <a
                      href="https://www.youtube.com/watch?v=BqI0Q7e4kbk"
                      class="videoTwo video-popup mfp-iframe popupImage"
                      data-lity
                      ><i class="fa fa-play"></i
                    ></a>
                  </div>
                </div>
                <img
                  class="vd-grid"
                  src="<?php echo $directory;?>/assets/img/video/bg_shoot.png"
                  alt=""
                />
              </div>
            </div>
            <div class="col-xl-4">
              <div
                class="shoot_card before_shoot_01 wow animate__fadeIn"
                data-animation="fadeInUp"
                data-delay="2.5s"
                data-wow-duration="1s"
              >
                <div class="shoot_icon">
                  <img src="<?php echo $directory;?>/assets/img/video/vd-or-2.png" alt="" />
                  <h5>
                    OUR TRUSTED <br />
                    ACTIVE CLIENTS
                  </h5>
                </div>
                <div class="shoot_count_1">
                  <h2>250+</h2>
                </div>
              </div>
              <div
                class="shoot_card before_shoot_02 wow animate__fadeIn"
                data-animation="fadeInUp"
                data-delay="2.5s"
                data-wow-duration="2s"
              >
                <div class="shoot_icon">
                  <img src="<?php echo $directory;?>/assets/img/video/ach-icon2.png" alt="" />
                  <h5>
                    our Experienced <br />
                    Members
                  </h5>
                </div>
                <div class="shoot_count_2">
                  <h2>20+</h2>
                </div>
              </div>
              <div
                class="shoot_card before_shoot_03 wow animate__fadeIn"
                data-animation="fadeInUp"
                data-delay="2.5s"
                data-wow-duration="3s"
              >
                <div class="shoot_icon">
                  <img src="<?php echo $directory;?>/assets/img/video/vd-or-1.png" alt="" />
                  <h5>
                    Years Providing <br />
                    Services
                  </h5>
                </div>
                <div class="shoot_count_3">
                  <h2>12+</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- shoot area end  -->

      <!-- pricing area start  -->
      <div class="pricing_area mb-40 mobile-res-mb">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div
                class="section_wrapper section_wrapper_mobile text-center mb-60"
              >
                <h4
                  class="sub_title wow animate__fadeIn"
                  data-animation="fadeInUp"
                  data-delay="2s"
                  data-wow-duration="3s"
                >
                  pricing table
                </h4>
                <h2
                  class="title wow animate__fadeIn"
                  data-animation="fadeInUp"
                  data-delay="2.5s"
                  data-wow-duration="3s"
                >
                  our pricing plans
                </h2>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-12">
              <div
                class="single_price d-flex wow animate__fadeIn"
                data-animation="fadeInUp"
                data-delay="3s"
                data-wow-duration="3s"
              >
                <div class="price_img">
                  <img src="<?php echo $directory;?>/assets/img/pricing_plan/pr-1.png" alt="" />
                  <div class="price">
                    <p>$25</p>
                  </div>
                </div>
                <div class="price_content">
                  <h4>clipping path</h4>
                  <p>
                    Sed ut perspiciatis unde omnis iste natus error voluptatem
                    accusantium dolore mque laudantium.
                  </p>
                </div>
                <div class="choose_plan">
                  <a
                    class="cmn_btn increase_width cmn_outline effect"
                    href="pricing.html"
                    ><span>choose plan</span><i class="fas fa-chevron-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div
                class="single_price single_background d-flex wow animate__fadeIn"
                data-animation="fadeInUp"
                data-delay="2.5s"
                data-wow-duration="3s"
              >
                <div class="price_img">
                  <img src="<?php echo $directory;?>/assets/img/pricing_plan/pr-2.png" alt="" />
                  <div class="price">
                    <p>$25</p>
                  </div>
                </div>
                <div class="price_content">
                  <h4>background removal</h4>
                  <p>
                    Sed ut perspiciatis unde omnis iste natus error voluptatem
                    accusantium dolore mque laudantium.
                  </p>
                </div>
                <div class="choose_plan">
                  <a
                    class="cmn_btn increase_width cmn_outline cmn_outline active_btn_price"
                    href="pricing.html"
                    ><span>choose plan</span><i class="fas fa-chevron-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div
                class="single_price d-flex wow animate__fadeIn"
                data-animation="fadeInUp"
                data-delay="3s"
                data-wow-duration="3s"
              >
                <div class="price_img">
                  <img src="<?php echo $directory;?>/assets/img/pricing_plan/pr-3.png" alt="" />
                  <div class="price">
                    <p>$25</p>
                  </div>
                </div>
                <div class="price_content">
                  <h4>clipping path</h4>
                  <p>
                    Sed ut perspiciatis unde omnis iste natus error voluptatem
                    accusantium dolore mque laudantium.
                  </p>
                </div>
                <div class="choose_plan">
                  <a
                    class="cmn_btn increase_width cmn_outline effect"
                    href="pricing.html"
                    ><span>choose plan</span><i class="fas fa-chevron-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <!-- <a class="loading_more" href="#">loading more</a> -->
          </div>
        </div>
      </div>
      <!-- pricing area end  -->

      <!-- footer area start  -->
      <?php
        get_footer();
      ?>