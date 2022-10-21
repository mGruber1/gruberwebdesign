<!DOCTYPE html>
<html>
<head>
  <!--<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="93a6b814-1c33-478b-8f7c-bb8502f2ae51" data-blockingmode="auto" type="text/javascript"></script>-->
  <!--<script id="CookieDeclaration" src="https://consent.cookiebot.com/93a6b814-1c33-478b-8f7c-bb8502f2ae51/cd.js" type="text/javascript" async></script>-->
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  <title>Gruber-Webdesign | <?php bloginfo('name') ?></title>
    <meta name="keywords" content="Webdesign FrontEnd Website Wartung linz">
  <meta name="description" content="Your Front End Web Designer from Linz, Max">

  <div class="site-header site-header--space-bottom">
    <div id="site-header__overlay">
      <ul id="site-header__overlay-nav">
        <li id="site-header__overlay-nav-list-element">
          <a id="site-header__overlay-nav-list-element-link" href="https://gruber-webdesign.at/index.html">Home</a>
        </li>
        <li id="site-header__overlay-nav-list-element">
          <a id="site-header__overlay-nav-list-element-link" href="mailto:hello@gruber-webdesign.at">Kontakt</a>
        </li>
        <li id="site-header__overlay-nav-list-element">
          <a id="site-header__overlay-nav-list-element-link" href="https://gruber-webdesign.at/services.html">Leistungen</a>
        </li>
        <!--<li id="site-header__overlay-nav-list-element">
          <a id="site-header__overlay-nav-list-element-link" href="#">Showreel</a>
        </li>-->
      </ul>
    </div>
    <div class="site-header__logo">
      <a class="site-header__logo--no-hover-effect" href="https://gruber-webdesign.at/index.html">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/mG-full-tp.png"/>
      </a>
    </div>
    <nav class="site-header__nav">
      <!-- Only For Mobile -->
      <div class="site-header__nav-burger-menu" onclick="burgermenu(this);">

        <div class="site-header__nav-burger-menu__line1"></div>
        <div class="site-header__nav-burger-menu__line2"></div>
        <div class="site-header__nav-burger-menu__line3"></div>
      </div> 
      <!-- /Only For Mobile -->
      <ul class="site-header__nav--no-display-mobile">
        <li class="site-header__nav-list-element">
          <a class="site-header__nav-list-element-link" href="https://gruber-webdesign.at/index.html">Home</a>
        </li>
        <li class="site-header__nav-list-element">
          <a class="site-header__nav-list-element-link" href="https://gruber-webdesign.at/mailto:hello@gruber-webdesign.at">Kontakt</a>
        </li>
        <li class="site-header__nav-list-element">
          <a class="site-header__nav-list-element-link" href="https://gruber-webdesign.at/services.html">Leistungen</a>
        </li>
        <!--<li class="site-header__nav-list-element">
          <a class="site-header__nav-list-element-link" href="#">Showreel</a>
        </li>-->
      </ul>
    </nav>
  </div>
</head>
<body>

  <div class="site-section">
    <div class="wrapper">
    <?php
	if ( have_posts() ) {
	while ( have_posts() ) { ?>
		<div class="site-section__block">	
			<?php the_post(); ?>
			<h2>
				<?php the_title(); ?>
			</h2>
			<p>
				<strong>Von: </strong><?php the_author();?>				
				<strong>Datum:</strong>
				<?php the_date(); ?> <strong> um:</strong>
						<?php the_time(); ?> <strong>Uhr</strong>
			</p>
			<p><br>
				<?php the_content();?>
			</p>
		</div>
	<hr>
	<?php } // end while
} // end if
?>    
    </div>
  </div>


  <footer class="footer">
    <div class="footer-credits">
      <div class="footer-credits__element">
        <span><strong>Layout & Design: </strong><br><a href="https://gruber-webdesign.at">Gruber-Webdesign</a></span>
      </div>
      <div class="footer-credits__element">
        <div><strong>Icons made by </strong><a href="https://www.flaticon.com/authors/dinosoftlabs" title="DinosoftLabs">DinosoftLabs</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>    </div>
        </div>
        <nav class="footer-menu">
      <ul>
        <li><a href="https://gruber-webdesign.at/impressum.html">Impressum</a></li>
        <li><a href="https://gruber-webdesign.at/privacy-notice.html">Datenschutzerklärung</a></li>
      </ul>
    </nav>
  </footer>
</body>
</html>
