<?php

define( 'APP_THEME', true );
define( 'APP_THEME_FILE', __FILE__ );

# ------------------------------------------------------------------------------
# Lorem ipsum dolor sit amet
# ------------------------------------------------------------------------------
#
# Suspendisse sodales ipsum non justo imperdiet, ut lacinia erat
# cursus. Vestibulum dictum nisi ligula, in dictum justo pulvinar quis.
#

add_action( 'mezu/bootstrap', function ( \Dalen\theme $theme ) {

    $theme->register( new \App\Theme\Assets() );
    $theme->register( new \App\Theme\Cleanup() );

} );
