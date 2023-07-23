<?php
  get_header();
  the_post();
  $directory = get_template_directory_uri();
//   $page_title = the_title();
  the_content();
  the_post_thumbnail('medium');
?>

<?php
    get_footer();
?>