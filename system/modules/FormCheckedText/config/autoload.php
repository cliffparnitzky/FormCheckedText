<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'CliffParnitzky',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Forms
	'CliffParnitzky\FormCheckedText\FormTextFieldChecked' => 'system/modules/FormCheckedText/forms/FormTextFieldChecked.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'form_textfield_checked' => 'system/modules/FormCheckedText/templates/forms',
));
