<?php
/**
 * Class LeadinUtilsTest
 *
 * @package Leadin
 */

use \Leadin\admin\Links;
/**
 * Test leadin-links.php
 */
class LeadinLinksTest extends WP_UnitTestCase {

	public function test_search_string_array() {
		$search_query_map = Links::get_query_param_array();
		$this->assertEqualSets( array( 'l', 'php', 'v', 'wp', 'theme', 'admin', 'ajaxUrl', 'domain', 'nonce', 'adminUrl' ), array_keys( $search_query_map ) );
	}
}
