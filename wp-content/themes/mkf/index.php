<?php get_header() ?>
<div class="homepage">
  <!-- Start Introduction Section -->
  <div class="section introduction">
    <div class="container">
      <?php 
        echo generate_heading("Welcome To " . get_bloginfo('name'), "We Are Happy To See You Here :)", "title-two");
        get_search_form();
      ?>
    </div>
  </div>
  <!-- End Introduction Section -->
</div>
<?php get_footer() ?>