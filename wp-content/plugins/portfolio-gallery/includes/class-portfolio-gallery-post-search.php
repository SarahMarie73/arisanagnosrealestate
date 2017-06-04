<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/**
 * Filter portfolio gallery
 * Not sure if it works, but to avoid conflicts with previous versions of plugin we leave this untouched
 * 
 * Class Portfolio_Gallery_Post_Search
 */
class Portfolio_Gallery_Post_Search {

	public function __construct() {
		add_filter( 'posts_request', array($this,'after_search_results') );
	}

	public function after_search_results(){
		global $wpdb;
		if ( isset( $_REQUEST['s'] ) && $_REQUEST['s'] ) {
			$serch_word = htmlspecialchars( ( $_REQUEST['s'] ) );
			$query      = str_replace( $wpdb->prefix . "posts.post_content", $this->generate_string_portfolio_search( $serch_word, $wpdb->prefix . 'posts.post_content' ) . " " . $wpdb->prefix . "posts.post_content", $query );
		}

		return $query;
	}

	public function generate_string_portfolio_search( $serch_word, $wordpress_query_post ) {
		$string_search = '';

		global $wpdb;
		if ( $serch_word ) {
			$rows_portfolio = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_portfolios WHERE (description LIKE %s) OR (name LIKE %s)", '%' . $serch_word . '%', "%" . $serch_word . "%" ) );

			$count_cat_rows = count( $rows_portfolio );

			for ( $i = 0; $i < $count_cat_rows; $i ++ ) {
				$string_search .= $wordpress_query_post . ' LIKE \'%[huge_it_portfolio id="' . $rows_portfolio[ $i ]->id . '" details="1" %\' OR ' . $wordpress_query_post . ' LIKE \'%[huge_it_portfolio id="' . $rows_portfolio[ $i ]->id . '" details="1"%\' OR ';
			}

			$rows_portfolio = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_portfolios WHERE (name LIKE %s)", "'%" . $serch_word . "%'" ) );
			$count_cat_rows = count( $rows_portfolio );
			for ( $i = 0; $i < $count_cat_rows; $i ++ ) {
				$string_search .= $wordpress_query_post . ' LIKE \'%[huge_it_portfolio id="' . $rows_portfolio[ $i ]->id . '" details="0"%\' OR ' . $wordpress_query_post . ' LIKE \'%[huge_it_portfolio id="' . $rows_portfolio[ $i ]->id . '" details="0"%\' OR ';
			}

			$rows_single = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_images WHERE name LIKE %s", "'%" . $serch_word . "%'" ) );

			$count_sing_rows = count( $rows_single );
			if ( $count_sing_rows ) {
				for ( $i = 0; $i < $count_sing_rows; $i ++ ) {
					$string_search .= $wordpress_query_post . ' LIKE \'%[huge_it_portfolio_Product id="' . $rows_single[ $i ]->id . '"]%\' OR ';
				}

			}
		}

		return $string_search;
	}
}

new Portfolio_Gallery_Post_Search();