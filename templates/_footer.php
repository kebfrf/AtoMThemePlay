<footer>

  <?php if (QubitAcl::check('userInterface', 'translate')): ?>
    <?php echo get_component('sfTranslatePlugin', 'translate') ?>
  <?php endif; ?>

  <?php echo get_component_slot('footer') ?>

  <ul id="external-links">
    <li id="museum"><?php echo link_to('alt' => __('Grainger Museum'))), 'http://grainger.unimelb.edu.au', array('rel' => 'external')) ?>Grainger Museum Website</li>
    <li id="facebook"><?php echo link_to('alt' => __('Facebook'))), 'http://facebook.com/graingermuseum', array('rel' => 'external')) ?>Facebook</li>
    <li id="instagram"><?php echo link_to('alt' => __('Instagram'))), 'http://instagram.com/graingermuseum', array('rel' => 'external')) ?>Instagram</li>
    <li id="twitter"><?php echo link_to('alt' => __('Twitter'))), 'http://twitter.com/graingermuseum', array('rel' => 'external')) ?>Twitter</li>
  </ul>
  <p> Powered by AToM </p>
  
    
  <div id="print-date">
    <?php echo __('Printed: %d%', array('%d%' => date('Y-m-d'))) ?>
  </div>

</footer>

<?php if (null !== $gaKey = sfConfig::get('app_google_analytics_api_key')): ?>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', '<?php echo $gaKey ?>']);
    _gaq.push(['_trackPageview']);
    <?php include_slot('google_analytics') ?>
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
<?php endif; ?>
