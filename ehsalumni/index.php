<?php
  defined('_JEXEC') or die;
  $app = JFactory::getApplication();
?>
<?php /* modifications:
  6Nov15 zig -  add cloudflare asynch to custom */ ?>
<!doctype html>
<html>
  <head>



    <!-- Javascripts -->
    <script data-cfasync="false" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script data-cfasync="false" type="text/javascript"  src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/custom.js" ></script>
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/modernizr.min.js" type="text/javascript"></script>
    <?php /* <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/analytics.min.js" type="text/javascript"></script> */ ?>

    <jdoc:include type="head" />

    <!-- Stylesheet -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/master.css" rel="stylesheet" type="text/css" />

  </head>
  <body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TLWNXT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TLWNXT');</script>
<!-- End Google Tag Manager -->

    <!-- Main Content Wrapper -->
    <div id="site-wrapper">
      <!-- Header -->
      <header>
        <!-- Main Navigation Menu -->
        <div id="top-banner">
          <jdoc:include type="modules" name="top-banner" />
          <div id="top-banner-left">
            <img src="templates/<?php echo $this->template ?>/images/ehs-topeagle.jpg" width="161" height="223"/>
          </div>
          <div id="top-banner-mid">
            <img src="templates/<?php echo $this->template ?>/images/ehs-toppeople.jpg" width="586" height="178"/>
            <nav id="top-nav"><jdoc:include type="modules" name="top-nav" /></nav>
          </div>
          <div id="top-right"><jdoc:include type="modules" name="top-right" /></div>
        </div>
      </header>

      <div id="content-wrapper">
        <!-- Sidebar left hand side -->
        <section id="left">
          <div id="left-sidebar">
            <jdoc:include type="modules" name="left-sidebar" style="xhtml"/>
          </div>
          <div id="left-bottom">
            <jdoc:include type="modules" name="left-bottom" />
          </div>
        </section>

        <!-- Main Content -->
        <section id="main-content">
          <!-- Main Content -->
          <article id="content-area">
            <jdoc:include type="component" />
          </article>

          <div id="content-bottom">
            <jdoc:include type="modules" name="content-bottom" />
          </div>
        </section>

        <!-- Sidebar right hand side -->
        <section id="right">
          <div id="right-sidebar">
            <jdoc:include type="modules" name="right-sidebar"/>
          </div>
          <div id="right-bottom">
            <jdoc:include type="modules" name="right-bottom" />
          </div>
        </section>

        <footer>
          <jdoc:include type="modules" name="footer" />
          <article id="copyright">
            Copyright &copy;
            <?php echo date('Y');
              echo '&nbsp;'; ?>
            <a href="<?php echo $this->baseurl; ?>">
              <?php echo $app->getCfg('sitename'); ?>
            </a>.&nbsp;
             All Rights Reserved.
          </article>
          <?php /* zig xout old EA logo<div id="ea-logo">
            <a href="http://reachmaine.com" target="_blank" class="brand"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/ea-white.png" alt="Ellsworth American Logo" width="149" height="21"/></a>
          <div>  */ ?>
        </footer>
      </div>
    </div>
  </body>
</html>
