<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'RecipesNtel',
        'Pi1',
        [
            \Ntel\RecipesNtel\Controller\RecipeController::class => 'list, show, search',
            \Ntel\RecipesNtel\Controller\ReviewController::class => 'new, create'
        ],
        // non-cacheable actions
        [
            \Ntel\RecipesNtel\Controller\RecipeController::class => 'search',
            \Ntel\RecipesNtel\Controller\ReviewController::class => 'create'
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'RecipesNtel',
        'Pi2',
        [
            \Ntel\RecipesNtel\Controller\RecipeController::class => 'focus'
        ],
        // non-cacheable actions
        [
            \Ntel\RecipesNtel\Controller\RecipeController::class => '',
            \Ntel\RecipesNtel\Controller\ReviewController::class => 'create'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        iconIdentifier = recipes_ntel-plugin-pi1
                        title = LLL:EXT:recipes_ntel/Resources/Private/Language/locallang_db.xlf:tx_recipes_ntel_pi1.name
                        description = LLL:EXT:recipes_ntel/Resources/Private/Language/locallang_db.xlf:tx_recipes_ntel_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = recipesntel_pi1
                        }
                    }
                    pi2 {
                        iconIdentifier = recipes_ntel-plugin-pi2
                        title = LLL:EXT:recipes_ntel/Resources/Private/Language/locallang_db.xlf:tx_recipes_ntel_pi2.name
                        description = LLL:EXT:recipes_ntel/Resources/Private/Language/locallang_db.xlf:tx_recipes_ntel_pi2.description
                        tt_content_defValues {
                            CType = list
                            list_type = recipesntel_pi2
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
