<?php

/**
 * Extension Manager/Repository config file for ext "fk_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'FK Sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fkgmbh\\FkSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Florian Fassing',
    'author_email' => 'florian.fassing@gmail.com',
    'author_company' => 'FKGmbH',
    'version' => '1.0.0',
];
