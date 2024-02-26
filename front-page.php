<?php get_header();
$portfolio_args = array(
  'post_type'=>'portfolio',
  'posts_per_page'=>-1,
);
$portfolio = new WP_Query($portfolio_args);
$portfolio = $portfolio->posts;
?>
<style>
.body-content{
  padding-top:80px;
}
</style>
<div id='home' class='home-hero t-align-center'>
  <div class='home-hero-content'>
    <h1>Hi, I'm {Frank Collins}</h1>
    <h2>And I do Web Development</h2>
    <a class='button' href='<?php echo site_url();?>/#projects'>View Projects</a> <a class='button' href='<?php echo site_url();?>/#contact-me'>Get In Touch</a>
  </div>
</div>

<div id='about-me' class='content-row'>
  <div class='content-container t-align-center'>
    <h1>About Me</h1>
    <p class='m-top-0'>
     I have hands-on experience efficiently coding websites and applications using modern HTML, CSS, and JavaScript.
Building state-of-the-art, easy to use, user-friendly websites and applications is truly a passion of mine and I am confident I would be an excellent addition to your organization. In addition to my knowledge base, I actively seek out new technologies and stay up-to-date on industry trends and advancements. This has allowed me to stay ahead of the curve and deliver exceptional work to all of my employers, including those I've worked for on a project basis.
   </p>
  </div>
</div>

<div id='tech-i-use' class='content-row light-gray'>
  <div class='content-container t-align-center'>
    <h1 style='margin-bottom:40px;'>Technologies that I Work With</h1>
    <div class='column-container skills-container'>
      <div class='card t-align-left'>
        <div class='icon-container'>
          <i class="fas fa-code"></i>
        </div>
        <div class='card-content'>
          <h3>Front-End Tech</h3>
          <ul>
            <li>HTML 4/5</li>
            <li>CSS 3</li>
            <li>JavaScript</li>
            <li>jQuery</li>
            <li>React</li>
            <li>Responsive Design</li>
          </ul>
        </div>
      </div>

      <div class='card t-align-left'>
        <div class='icon-container'>
          <i class="fas fa-terminal"></i>
        </div>
        <div class='card-content'>
          <h3>Back-End & CMS</h3>
          <ul>
            <li>PHP</li>
            <li>MySQL</li>
            <li>API Integration</li>
            <li>WordPress</li>
          </ul>
        </div>
      </div>

      <div class='card t-align-left'>
        <div class='icon-container'>
          <i class="fas fa-at"></i>
        </div>
        <div class='card-content'>
          <h3>Email Development</h3>
          <ul>
            <li>Table Based HTML</li>
            <li>Inline CSS</li>
            <li>Mail Chimp API</li>
            <li>Oracle Eloqua</li>
            <li>Litmus</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if(!empty($portfolio)): ?>
<div id='projects' class='content-row t-align-center'>
  <div class='content-container'>
    <h1>Projects</h1>
    <p class='m-top-0' style='margin-bottom:40px;'>Check out some of my recent Projects</p>

    <div class='column-container'>
      <?php foreach($portfolio as $project):?>
        <div class='card'>
          <div class='img-container' style='background-image:url(<?php echo get_the_post_thumbnail_url($project->ID,"full");?>)'>
            <a href='<?php echo the_permalink($project->ID);?>'></a>
          </div>
          <div class='card-content'>
          <h3><?php echo $project->post_title;?></h3>
          <p><?php echo $project->post_excerpt;?></p>
          <a class='button' href='<?php echo the_permalink($project->ID);?>'>View Project</a>
          </div>
        </div>
      <?php endforeach;?>
    </div>

  </div>
</div>
<?php endif;?>

<div id='contact-me' class='content-row t-align-center'>
  <div class='content-container'>
    <h1>Contact Me</h1>
    <p class='m-top-0' style='margin-bottom:40px;'>Do you have any questions? Would you like me to work with you to establish a web presence, or to add features to your existing site? Contact me below.</p>
    <div class='t-align-left'>
      <?php echo do_shortcode('[wpforms id="50"]');?>
    </div>
  </div>
</div>
<?php get_footer();?>
