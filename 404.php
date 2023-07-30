<?php
// Template Name:Home
  get_header();
  $directory = get_template_directory_uri();
?>
<!-- HEADER AREA END   -->
    <!-- 404 page start -->
    <div class="error_page d-flex">
        <div class="error_shapes">
            <img src="assets/img/slide/sl-1.png" class="error_01 position-absolute" alt="">
            <img src="assets/img/slide/sl-2.png" class="error_02 position-absolute" alt="">
            <img src="assets/img/slide/sl-3.png" class="error_03 position-absolute" alt="">
            <img src="assets/img/slide/sl-4.png" class="error_04 position-absolute" alt="">
            <img src="assets/img/slide/sl-5.png" class="error_05 position-absolute" alt="">
            <img src="assets/img/slide/sl-6.png" class="error_06 position-absolute" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-150 pb-150">
                    <div class="error_image">
                        <img width="50%" src="<?=$directory?>/assets/img/error/error.png" alt="">
                    </div>
                    <div class="error_content text-center pt-30">
                        <h3 class="error_title">page not found</h3>
                        <a href="<?=site_url();?>" class="cmn_btn error_btn"><span>back to home</span><i
                                class="icon-serviceicon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 page end -->
    <!-- footer area start  -->
    <?php
    get_footer();
    ?>