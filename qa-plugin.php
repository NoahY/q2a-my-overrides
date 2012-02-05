<?php

/*
	Plugin Name: My Overrides
	Plugin Description: My Overrides
	Plugin Version: 1
	Plugin Date: 2012-2-5
	Plugin Author: NoahY
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


//	qa_register_plugin_module('page', 'qa-wiki-page.php', 'qa_wiki_page', 'Wiki Page');
//	qa_register_plugin_module('module', 'qa-wiki-admin.php', 'qa_wiki_admin', 'Wiki Admin');
//	qa_register_plugin_layer('qa-wiki-layer.php', 'Wiki Layer');

	qa_register_plugin_overrides('qa-my-overrides.php');

/*
	Omit PHP closing tag to help avoid accidental output
*/