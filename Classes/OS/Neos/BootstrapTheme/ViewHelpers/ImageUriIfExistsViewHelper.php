<?php

namespace OS\Neos\BootstrapTheme\ViewHelpers;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Media".           *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Configuration\ConfigurationManager;
use TYPO3\Media\Domain\Model\ThumbnailConfiguration;

class ImageUriIfExistsViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper
{
    /**
     * @Flow\Inject
     * @var \TYPO3\Media\Domain\Service\AssetService
     */
    protected $assetService;


    /**
     * @param null $image
     * @param bool $asBackgroundCss
     * @param null $fallback
     * @return array|null
     * @throws \TYPO3\Media\Exception\AssetServiceException
     */
    public function render($image = null, $asBackgroundCss = false, $fallback = null) {
        if ($image == null) $image = $this->renderChildren();

        if ($image) {
            $thumbnailConfiguration = new ThumbnailConfiguration();
            $uri = $this->assetService->getThumbnailUriAndSizeForAsset($image, $thumbnailConfiguration, $this->controllerContext->getRequest())['src'];

            if ($asBackgroundCss) {
                return 'background-image: url('.$uri.')';
            }
            else {
                return $uri;
            }
        }
        else {
            if ($fallback != null) {
                if ($asBackgroundCss) {
                    return 'background-image: url('.$fallback.')';
                }
                else {
                    return $fallback;
                }
            }
        }
    }


}