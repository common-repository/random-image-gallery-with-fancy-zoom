<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

delete_option('rigwfz_title');
delete_option('rigwfz_width');
delete_option('rigwfz_dir');
delete_option('rigwfz_title_yes');
 
// for site options in Multisite
delete_site_option('rigwfz_title');
delete_site_option('rigwfz_width');
delete_site_option('rigwfz_dir');
delete_site_option('rigwfz_title_yes');