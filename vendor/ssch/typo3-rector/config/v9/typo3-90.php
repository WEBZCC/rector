<?php

declare (strict_types=1);
namespace RectorPrefix20220215;

use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Rector\Renaming\ValueObject\MethodCallRename;
use Ssch\TYPO3Rector\FileProcessor\Composer\Rector\RemoveCmsPackageDirFromExtraComposerRector;
use Ssch\TYPO3Rector\FileProcessor\FlexForms\Rector\RenderTypeFlexFormRector;
use Ssch\TYPO3Rector\Rector\v9\v0\CheckForExtensionInfoRector;
use Ssch\TYPO3Rector\Rector\v9\v0\CheckForExtensionVersionRector;
use Ssch\TYPO3Rector\Rector\v9\v0\FindByPidsAndAuthorIdRector;
use Ssch\TYPO3Rector\Rector\v9\v0\GeneratePageTitleRector;
use Ssch\TYPO3Rector\Rector\v9\v0\IgnoreValidationAnnotationRector;
use Ssch\TYPO3Rector\Rector\v9\v0\InjectAnnotationRector;
use Ssch\TYPO3Rector\Rector\v9\v0\MetaTagManagementRector;
use Ssch\TYPO3Rector\Rector\v9\v0\MoveRenderArgumentsToInitializeArgumentsMethodRector;
use Ssch\TYPO3Rector\Rector\v9\v0\RefactorBackendUtilityGetPagesTSconfigRector;
use Ssch\TYPO3Rector\Rector\v9\v0\RefactorDeprecationLogRector;
use Ssch\TYPO3Rector\Rector\v9\v0\RefactorMethodsFromExtensionManagementUtilityRector;
use Ssch\TYPO3Rector\Rector\v9\v0\RemoveMethodInitTCARector;
use Ssch\TYPO3Rector\Rector\v9\v0\RemovePropertiesFromSimpleDataHandlerControllerRector;
use Ssch\TYPO3Rector\Rector\v9\v0\RemoveSecondArgumentGeneralUtilityMkdirDeepRector;
use Ssch\TYPO3Rector\Rector\v9\v0\ReplaceAnnotationRector;
use Ssch\TYPO3Rector\Rector\v9\v0\ReplacedGeneralUtilitySysLogWithLogginApiRector;
use Ssch\TYPO3Rector\Rector\v9\v0\ReplaceExtKeyWithExtensionKeyRector;
use Ssch\TYPO3Rector\Rector\v9\v0\SubstituteCacheWrapperMethodsRector;
use Ssch\TYPO3Rector\Rector\v9\v0\SubstituteConstantParsetimeStartRector;
use Ssch\TYPO3Rector\Rector\v9\v0\SubstituteGeneralUtilityDevLogRector;
use Ssch\TYPO3Rector\Rector\v9\v0\UseExtensionConfigurationApiRector;
use Ssch\TYPO3Rector\Rector\v9\v0\UseLogMethodInsteadOfNewLog2Rector;
use Ssch\TYPO3Rector\Rector\v9\v0\UseNewComponentIdForPageTreeRector;
use Ssch\TYPO3Rector\Rector\v9\v0\UseRenderingContextGetControllerContextRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/../config.php');
    $services = $containerConfigurator->services();
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\MoveRenderArgumentsToInitializeArgumentsMethodRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\InjectAnnotationRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\IgnoreValidationAnnotationRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\ReplaceAnnotationRector::class)->configure(['lazy' => 'TYPO3\\CMS\\Extbase\\Annotation\\ORM\\Lazy', 'cascade' => 'TYPO3\\CMS\\Extbase\\Annotation\\ORM\\Cascade("remove")', 'transient' => 'TYPO3\\CMS\\Extbase\\Annotation\\ORM\\Transient']);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\CheckForExtensionInfoRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\RefactorMethodsFromExtensionManagementUtilityRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\MetaTagManagementRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\FindByPidsAndAuthorIdRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\UseRenderingContextGetControllerContextRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\RemovePropertiesFromSimpleDataHandlerControllerRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\RemoveMethodInitTCARector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\SubstituteCacheWrapperMethodsRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\UseLogMethodInsteadOfNewLog2Rector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\GeneratePageTitleRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\SubstituteConstantParsetimeStartRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\RemoveSecondArgumentGeneralUtilityMkdirDeepRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\CheckForExtensionVersionRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\RefactorDeprecationLogRector::class);
    $services->set(\Rector\Renaming\Rector\MethodCall\RenameMethodRector::class)->configure([new \Rector\Renaming\ValueObject\MethodCallRename('TYPO3\\CMS\\Core\\Utility\\GeneralUtility', 'getUserObj', 'makeInstance')]);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\UseNewComponentIdForPageTreeRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\RefactorBackendUtilityGetPagesTSconfigRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\UseExtensionConfigurationApiRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\ReplaceExtKeyWithExtensionKeyRector::class);
    $services->set(\Ssch\TYPO3Rector\FileProcessor\Composer\Rector\RemoveCmsPackageDirFromExtraComposerRector::class)->configure(['foo' => 'bar']);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\SubstituteGeneralUtilityDevLogRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\ReplacedGeneralUtilitySysLogWithLogginApiRector::class);
    $services->set(\Ssch\TYPO3Rector\FileProcessor\FlexForms\Rector\RenderTypeFlexFormRector::class);
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\QueryLogicalOrAndLogicalAndToArrayParameterRector::class);
};
