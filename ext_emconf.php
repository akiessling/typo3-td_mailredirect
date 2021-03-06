<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "td_mailredirect"
 *
 * Auto generated by Extension Builder 2018-01-15
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Mail Redirect',
    'description' => 'Rewrites recipients for mails in dev / test setups',
    'category' => 'plugin',
    'author' => 'Andreas Kießling',
    'author_email' => 'a.kiessling@techdivision.com',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
