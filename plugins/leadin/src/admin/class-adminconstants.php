<?php
namespace Leadin\admin;

use Leadin\LeadinFilters;
use Leadin\admin\Links;
use Leadin\auth\OAuth;
use Leadin\admin\utils\DeviceId;
use Leadin\utils\Versions;
use Leadin\wp\User;
use Leadin\admin\Connection;

/**
 * Class containing all the constants used for admin script localization.
 */
class AdminConstants {

	/**
	 * Returns a minimal version of leadinConfig, containing the data needed by the background iframe.
	 */
	public static function get_background_leadin_config() {
		$wp_user_id = get_current_user_id();

		$array = array(
			'adminUrl'              => admin_url(),
			'ajaxUrl'               => Links::get_ajax_url(),
			'restUrl'               => get_rest_url(),
			'backgroundIframeUrl'   => Links::get_background_iframe_src(),
			'deviceId'              => DeviceId::get(),
			'didDisconnect'         => true,
			'env'                   => LeadinFilters::get_leadin_env(),
			'formsScript'           => LeadinFilters::get_leadin_forms_script_url(),
			'formsScriptPayload'    => LeadinFilters::get_leadin_forms_payload(),
			'hubspotBaseUrl'        => LeadinFilters::get_leadin_base_url(),
			'leadinPluginVersion'   => constant( 'LEADIN_PLUGIN_VERSION' ),
			'locale'                => get_locale(),
			'nonce'                 => wp_create_nonce( 'hubspot-ajax' ),
			'restNonce'             => wp_create_nonce( 'wp_rest' ),
			'phpVersion'            => Versions::get_wp_version(),
			'pluginPath'            => constant( 'LEADIN_PATH' ),
			'plugins'               => get_plugins(),
			'portalId'              => Connection::get_portal_id(),
			'accountName'           => get_option( 'leadin_account_name' ),
			'portalDomain'          => get_option( 'leadin_portal_domain' ),
			'portalEmail'           => get_user_meta( $wp_user_id, 'leadin_email', true ),
			'loginUrl'              => Links::get_login_url(),
			'routes'                => Links::get_routes_mapping(),
			'signupUrl'             => Links::get_signup_url(),
			'theme'                 => get_option( 'stylesheet' ),
			'wpVersion'             => Versions::get_wp_version(),
			'leadinQueryParamsKeys' => array_keys( Links::get_query_param_array() ),
		);

		if ( OAuth::is_enabled() ) {
			$array['oauth'] = OAuth::is_enabled();
		}

		return $array;
	}

	/**
	 * Returns leadinConfig, containing all the data needed by the leadin javascript.
	 */
	public static function get_leadin_config() {
		$wp_user_id = get_current_user_id();
		return \array_merge(
			self::get_background_leadin_config(),
			array(
				'iframeUrl' => Links::get_iframe_src(),
			)
		);
	}
	/**
	 * Returns leadinI18n, containing all the translations needed on the frontend.
	 */
	public static function get_leadin_i18n() {
		return array(
			'chatflows'            => __( 'Live Chat', 'leadin' ),
			'signIn'               => __( 'Sign In', 'leadin' ),
			'selectExistingForm'   => __( 'Select an existing form', 'leadin' ),
			'goToPlugin'           => __( 'Go to the plugin', 'leadin' ),
			'unauthorizedMessage'  => __( 'The request is not authorized, please check the plugin connection', 'leadin' ),
			'formApiError'         => __( 'There has been an error retrieving the forms. Please try again later', 'leadin' ),
			'selectForm'           => __( 'Select a form', 'leadin' ),
			'formBlockTitle'       => __( 'HubSpot Form', 'leadin' ),
			'formBlockDescription' => __( 'Select and embed a HubSpot form', 'leadin' ),
		);
	}
}
