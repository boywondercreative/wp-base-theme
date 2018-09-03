<?php

$context = Timber::get_context();

$page            = new \Timber\Post();
$context['page'] = $page;

Timber::render( array( 'page-' . $page->post_name . '.twig', 'page.twig' ), $context );
