<?php

$context = Timber::get_context();

$page            = new \Timber\Post();
$context['page'] = $page;

Timber::render(
	array(
		'page-' . $page->post_name . '.twig',
		pathinfo( get_page_template(), PATHINFO_FILENAME ) . '.twig',
		'page.twig',
	), $context
);
