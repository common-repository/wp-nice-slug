<?php

/*
  Plugin Name: WP Nice Slug
  Plugin URI: http://wordpress.org/extend/plugins/wp-nice-slug/
  Description: Sanitize title for post slug. Requires PECL::Package::translit (http://derickrethans.nl/projects.html#translit)
  Author: Spectraweb s.r.o.
  Author URI: http://www.spectraweb.cz
  Version: 1.0.2
 */

load_plugin_textdomain('wp-nice-slug', false, dirname(plugin_basename(__FILE__)) . '/languages');

register_activation_hook(__FILE__, 'wp_niceslug_on_activation');

add_action('sanitize_title', 'wp_niceslug_sanitize_title', 0);

/**
 *
 */
function wp_niceslug_on_activation()
{
	// check plugin requirements
	if (!function_exists('transliterate'))
	{
		wp_niceslug_trigger_error(__('Requires PECL::Package::translit (<a href="http://derickrethans.nl/projects.html#translit" target="_blank">more info</a>)', 'wp-nice-slug'), E_USER_ERROR);
	}
}

/**
 * Sanitize title
 *
 * @param string $title
 * @return sanitized title
 */
function wp_niceslug_sanitize_title($title)
{
	$slug = transliterate($title, array(
		'cyrillic_transliterate',
		'greek_transliterate',
		'hebrew_transliterate',
		'han_transliterate',
		'diacritical_remove'), 'utf-8', 'utf-8');
	$slug = strtolower($slug);
	$slug = preg_replace('/\s+/', ' ', $slug);
	$slug = str_replace(' ', '-', $slug);
	$slug = preg_replace('/[^a-z0-9-_]/', '', $slug);
	$slug = preg_replace('/[-]+/', '-', $slug);
	$slug = trim($slug, '-');

	return $slug;
}

/**
 *
 * @param type $message
 * @param type $errno
 */
function wp_niceslug_trigger_error($message, $errno)
{
	if (isset($_GET['action']) && $_GET['action'] == 'error_scrape')
	{
		echo '<strong>' . $message . '</strong>';
		exit;
	}
	else
	{
		trigger_error($message, $errno);
	}
}
