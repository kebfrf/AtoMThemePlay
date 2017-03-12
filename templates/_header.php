Skip to content
This repository
Search
Pull requests
Issues
Gist
 @kebfrf
 Sign out
 Watch 30
  Star 63
  Fork 51 artefactual/atom
 Code  Issues 0  Pull requests 3  Projects 0  Pulse  Graphs
Tree: c1a656e04c Find file Copy pathatom/apps/qubit/templates/_header.php
c1a656e  15 days ago
@mcantelon mcantelon Warning translation and CSS fixes, refs #10473
3 contributors @sevein @jraddaoui @mcantelon
RawBlameHistory     
60 lines (41 sloc)  1.82 KB
<?php echo get_component('default', 'updateCheck') ?>

<?php if ($sf_user->isAdministrator() && (string)QubitSetting::getByName('siteBaseUrl') === ''): ?>
  <div class="site-warning">
    <?php echo link_to(__('Please configure your site base URL'), 'settings/siteInformation', array('rel' => 'home', 'title' => __('Home'))) ?>
  </div>
<?php endif; ?>

<header id="top-bar">

  <?php if (sfConfig::get('app_toggleLogo')): ?>
    <h1><?php echo link_to(image_tag('/plugins/arGraingerPlugin/images/logo.png', array('alt' => __('Grainger Museum Archive'))), 'http://10.100.148.228', array('rel' => 'home')) ?></h1>
          
  <?php endif; ?>

  <?php if (sfConfig::get('app_toggleTitle')): ?>
    <h1 id="site-name">
      <?php echo link_to('<span>'.esc_specialchars(sfConfig::get('app_siteTitle')).'</span>', '@homepage', array('rel' => 'home', 'title' => __('Home'))) ?>
    </h1>
  <?php endif; ?>

  <nav>

    <?php echo get_component('menu', 'userMenu') ?>

    <?php echo get_component('menu', 'quickLinksMenu') ?>

    <?php if (sfConfig::get('app_toggleLanguageMenu')): ?>
      <?php echo get_component('menu', 'changeLanguageMenu') ?>
    <?php endif; ?>

    <?php echo get_component('menu', 'clipboardMenu') ?>

    <?php echo get_component('menu', 'mainMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>

  </nav>

  <div id="search-bar">

    <?php echo get_component('menu', 'browseMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>

    <?php echo get_component('search', 'box') ?>

  </div>

  <?php echo get_component_slot('header') ?>

</header>

<?php if (sfConfig::get('app_toggleDescription')): ?>
  <div id="site-slogan">
    <div class="container">
      <div class="row">
        <div class="span12">
          <span><?php echo esc_specialchars(sfConfig::get('app_siteDescription')) ?></span>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
