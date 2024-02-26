<?php global $post;?>
<!DOCTYPE html>
<html style='margin-top:0!important;'>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/440eaeeda3.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
	<title>Frank Collins Dev</title>
</head>
<body>
<header>
  <div class='content-container'>
    <div class='logo'>
      { Frank Collins }
    </div>

    <nav class='lg-nav'>
      <ul>
        <li><a class='selected' data-ancor="#home" href='<?php echo site_url();?>/#home'>Home</a></li>
        <li><a data-ancor="#about-me" href='<?php echo site_url();?>/#about-me'>About Me</a></li>
        <li><a data-ancor="#tech-i-use" href='<?php echo site_url();?>/#tech-i-use'>Tech I Use</a></li>
        <li><a data-ancor="#project" href='<?php echo site_url();?>/#projects'>Projects</a></li>
        <li><a data-ancor="#contact-me" href='<?php echo site_url();?>/#contact-me'>Contact Me</a></li>
      </ul>
    </nav>

    <div class='sm-toggle'>
      <i class="fas fa-bars"></i>
    </div>
    <nav class='sm-nav'>
      <div class='sm-top-bar'>
        <h1>{ Menu }</h1>

        <span class='close-menu'>
          <i class="fas fa-times"></i>
        </span>
      </div>
      <ul>
        <li><a class='selected' data-ancor="#home" href='<?php echo site_url();?>/#home'>Home</a></li>
        <li><a data-ancor="#about-me" href='<?php echo site_url();?>/#about-me'>About Me</a></li>
        <li><a data-ancor="#tech-i-use" href='<?php echo site_url();?>/#tech-i-use'>Tech I Use</a></li>
        <li><a data-ancor="#project" href='<?php echo site_url();?>/#projects'>Projects</a></li>
        <li><a data-ancor="#contact-me" href='<?php echo site_url();?>/#contact-me'>Contact Me</a></li>
      </ul>
    </nav>
  </div>
</header>
<div class='body-content'>
