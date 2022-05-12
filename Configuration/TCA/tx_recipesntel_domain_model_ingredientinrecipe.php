<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:recipes_ntel/Resources/Private/Language/locallang_db.xlf:tx_recipesntel_domain_model_ingredientinrecipe',
        'label' => 'quantity',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'quantity',
        'iconfile' => 'EXT:recipes_ntel/Resources/Public/Icons/tx_recipesntel_domain_model_ingredientinrecipe.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'quantity, ingredient, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_recipesntel_domain_model_ingredientinrecipe',
                'foreign_table_where' => 'AND {#tx_recipesntel_domain_model_ingredientinrecipe}.{#pid}=###CURRENT_PID### AND {#tx_recipesntel_domain_model_ingredientinrecipe}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'quantity' => [
            'exclude' => true,
            'label' => 'LLL:EXT:recipes_ntel/Resources/Private/Language/locallang_db.xlf:tx_recipesntel_domain_model_ingredientinrecipe.quantity',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required',
                'default' => ''
            ]
        ],
        'ingredient' => [
            'exclude' => true,
            'label' => 'LLL:EXT:recipes_ntel/Resources/Private/Language/locallang_db.xlf:tx_recipesntel_domain_model_ingredientinrecipe.ingredient',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_recipesntel_domain_model_ingredient',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],
            
        ],
    
        'recipe' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
