<?php

namespace Leadin\admin\api;

/**
 * Common utils for the API creation
 */
class ApiGenerator {

	/**
	 * Adds actions needed for a new API to reduce boilerplate
	 *
	 * @param Boolean $admin_only hides the API for not admin users.
	 */
	public function __construct( $admin_only = true ) {
		add_action( $this->endpoint, 'Leadin\admin\api\ApiMiddlewares::validate_nonce', 1 );
		if ( $admin_only ) {
			add_action( $this->endpoint, 'Leadin\admin\api\ApiMiddlewares::admin_only', 2 );
		}
		add_action( $this->endpoint, array( $this, 'run' ) );
	}
}
