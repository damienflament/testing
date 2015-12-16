<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2015 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

@trigger_error('The resources/config/dist/'.basename(__FILE__).' file is deprecated since version 1.3 and will be removed in 2.0. Include the config file in your own library instead.');

$config = array(
    'secret' => 'test',
    'test' => null,
    'session' => array(
        'storage_id' => 'session.storage.filesystem',
    ),
    'form' => true,
    'validation' => array(
        'enabled' => true,
        'enable_annotations' => true,
    ),
    'router' => array(
        'resource' => '%kernel.root_dir%/config/routing.php',
    ),
    'default_locale' => 'en',
    'templating' => array(
        'engines' => array('twig'),
    ),
    'translator' => array(
        'fallback' => 'en',
    ),
);

$container->loadFromExtension('framework', $config);

$container->loadFromExtension('twig', array(
    'debug' => '%kernel.debug%',
    'strict_variables' => '%kernel.debug%',
));
