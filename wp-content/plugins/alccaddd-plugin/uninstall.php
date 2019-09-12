<?php

defined('WP_UNINSTALL_PLUGIN' ) or die('unistall is not defined');

$books= get_posts( ['post_type'=>'book','numberposts'=>-1] );


foreach ($books as $book) {
    wp_delete_post( $book->ID , true );
}


global $wpdb;


$wpdb->query("Delete from wp_posts where post_type='book'");
$wpdb->query("Delete from wp_postmeta where post_id=(select id from wp_posts )");

$wpdb->query("Delete from wp_term_relationships where object_id=(select id from wp_posts )");   