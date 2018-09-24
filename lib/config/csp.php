<?php

add_filter(
	'mr_csp_configure_policy', function ( $csp ) {
		$csp->upgrade_insecure_requests();
		$csp->support_google_tag_manager();

		if ( is_user_logged_in() ) {
			$csp->add_img_src( 'https://secure.gravatar.com' );
			$csp->add_font_src( 'data:' );
			$csp->add_img_src( 'data:' );
		}

		return $csp;
	}, 10, 1
);
