<?php echo get_component_slot('header') ?>

<?php echo get_component('default', 'updateCheck') ?>

<?php if ($sf_user->isAuthenticated()): ?>
  <div id="top-bar">
    <nav>
      <?php echo get_component('menu', 'userMenu') ?>
      <?php echo get_component('menu', 'quickLinksMenu') ?>
      <?php if (sfConfig::get('app_toggleLanguageMenu')): ?>
        <?php echo get_component('menu', 'changeLanguageMenu') ?>
      <?php endif; ?>
      <?php echo get_component('menu', 'mainMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>
    </nav>
  </div>
<?php endif; ?>

<div id="header">

  <div class="container">

    <div id="header-lvl2">
      <div class="row">

        <div id="logo-and-name" class="span6">
            <h1><?php echo link_to(image_tag('/plugins/arGraingerPlugin/images/graingerlogo.png', array('alt' => __('Grainger Museum Archive'))), 'http://10.100.148.228', array('rel' => 'home')) ?></h1>
          
        </div>

        <div id="header-search" class="span6">
          <?php echo get_component('search', 'box') ?>

          <?php echo get_component('menu', 'clipboardMenu') ?>
        </div>

      </div>
    </div>

  </div>

</div>
