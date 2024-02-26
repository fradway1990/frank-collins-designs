<?php
global $post;
$site_link = get_post_meta($post->ID,'portfolio_site_url',true);
get_header();?>
<div class='content-row portfolio'>
  <div class='content-container'>
    <div class='column-container'>
      <div class='project-info'>
        <h1 style='margin-bottom:0;'><?php echo $post->post_title;?></h1>
        <?php echo $post->post_content;?>
        <?php if($site_link): ?>
        <a target='_blank' class='button' href='<?php echo $site_link?>'>Visit Site</a>
        <?php endif;?>
      </div>

      <div>
        <?php echo do_shortcode('[gfe_gallery]');?>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
