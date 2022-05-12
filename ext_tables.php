<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_recipesntel_domain_model_recipe', 'EXT:recipes_ntel/Resources/Private/Language/locallang_csh_tx_recipesntel_domain_model_recipe.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_recipesntel_domain_model_recipe');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_recipesntel_domain_model_ingredient', 'EXT:recipes_ntel/Resources/Private/Language/locallang_csh_tx_recipesntel_domain_model_ingredient.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_recipesntel_domain_model_ingredient');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_recipesntel_domain_model_ustensil', 'EXT:recipes_ntel/Resources/Private/Language/locallang_csh_tx_recipesntel_domain_model_ustensil.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_recipesntel_domain_model_ustensil');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_recipesntel_domain_model_theme', 'EXT:recipes_ntel/Resources/Private/Language/locallang_csh_tx_recipesntel_domain_model_theme.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_recipesntel_domain_model_theme');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_recipesntel_domain_model_origin', 'EXT:recipes_ntel/Resources/Private/Language/locallang_csh_tx_recipesntel_domain_model_origin.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_recipesntel_domain_model_origin');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_recipesntel_domain_model_ingredientinrecipe', 'EXT:recipes_ntel/Resources/Private/Language/locallang_csh_tx_recipesntel_domain_model_ingredientinrecipe.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_recipesntel_domain_model_ingredientinrecipe');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_recipesntel_domain_model_review', 'EXT:recipes_ntel/Resources/Private/Language/locallang_csh_tx_recipesntel_domain_model_review.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_recipesntel_domain_model_review');
})();
