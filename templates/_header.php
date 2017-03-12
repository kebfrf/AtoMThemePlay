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

    <div id="header-lvl1">
      <div class="row">
        <div class="span12">

          
            <a id="header-council" href="http://grainger.unimelb.edu.au"><?php echo image_tag('/plugins/arArchivesCanadaPlugin/images/council.en.png', array('width' => '156', 'height' => '42', 'alt' => __('Canadian Council of Archives'))) ?></a>
   

          <ul id="header-nav" class="nav nav-pills">

         
              <li><?php echo link_to(__('Home'), array('module' => 'staticpage', 'slug' => 'index.php')) ?></li>
           

        
              <li><?php echo link_to(__('Contact us'), array('module' => 'staticpage', 'slug' => 'contact')) ?></li>
         
            <?php foreach (array('en', 'fr') as $item): ?>
              <?php if ($sf_user->getCulture() != $item): ?>
                <li><?php echo link_to(format_language($item, $item), array('sf_culture' => $item) + $sf_data->getRaw('sf_request')->getParameterHolder()->getAll()) ?></li>
                <?php break; ?>
              <?php endif; ?>
            <?php endforeach; ?>

            <?php if (!$sf_user->isAuthenticated()): ?>
              <li><?php echo link_to(__('Log in'), array('module' => 'user', 'action' => 'login')) ?></li>
            <?php endif; ?>

          </ul>

        </div>
      </div>
    </div>

    <div id="header-lvl2">
      <div class="row">

        <div id="logo-and-name" class="span6">
          <?php if ('fr' == $sf_user->getCulture()): ?>
            <h1><?php echo link_to(image_tag('/plugins/arArchivesCanadaPlugin/images/logo.png', array('alt' => __('Archives Canada'))), 'http://archivescanada.ca/homeFR', array('rel' => 'home')) ?></h1>
          <?php else: ?>
            <h1><?php echo link_to(image_tag('/plugins/arArchivesCanadaPlugin/images/logo.png', array('alt' => __('Archives Canada'))), 'http://archivescanada.ca', array('rel' => 'home')) ?></h1>
          <?php endif; ?>
        </div>

        <div id="header-search" class="span6">
          <?php echo get_component('search', 'box') ?>

          <?php echo get_component('menu', 'clipboardMenu') ?>
        </div>

      </div>
    </div>

  </div>

</div>
