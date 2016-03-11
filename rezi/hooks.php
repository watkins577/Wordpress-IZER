<?php

//	REGISTER VARIOUS HOOKS
//	ACTIVATION HOOK
register_activation_hook( __FILE__, 'activate' );
//	DEACTIVATION HOOK
register_deactivation_hook( __FILE__, 'deactivate' );

// %SITEURL% fix for xslt - Legacy Fix - No Longer Needed Unless XSLT used.
add_filter('the_content','replace_content');

// HOOK PAGINATION FIX
add_action( 'parse_query', 'pagifix' );

// ALLOW SHORTCODES IN WIDGETS

add_filter('widget_text', 'do_shortcode');

// Add scripts to wp_head()
function IncludeSetup() { ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-animate.js"></script>
<script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.14.3.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.11/angular-sanitize.js"></script>


<script type="text/javascript" src="<?php echo plugins_url( '/js/angularsearch.js', __FILE__ ); ?>"></script>
<script type="text/javascript" src="<?php echo plugins_url( '/js/simplePagination.js', __FILE__ ); ?>"></script>


<script type="text/javascript" src="<?php echo plugins_url( '/js/angular-google-maps.js', __FILE__ ); ?>"></script>
<script type="text/javascript" src="<?php echo plugins_url( '/js/ng-map.js', __FILE__ ); ?>"></script>
<script type="text/javascript" src="<?php echo plugins_url( '/js/lodash.js', __FILE__ ); ?>"></script>
<script type="text/javascript" src="<?php echo plugins_url( '/js/angular-logger.js', __FILE__ ); ?>"></script>


<?php }
add_action( 'wp_head', 'IncludeSetup' );

?>
