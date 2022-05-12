<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'recipes-ntel',
    'description' => 'Gestion recettes de cuisine',
    'category' => 'plugin',
    'author' => 'Noa Ammirati, Thomas Muller, Lucas Poujardieu, Eunice Teixeira',
    'author_email' => 'noa.ammirati@etu.u-bordeaux.fr, thalgi.muller@gmail.com, lucas.poujardieu@etu.u-bordeaux.fr, eunice.goncalves-teixeira@etu.u-bordeaux.fr',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
