<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Media\Model;

use Sylius\Component\Resource\Model\ResourceInterface;
use Symfony\Cmf\Bundle\MediaBundle\ImageInterface as CmfImageInterface;

/**
 * Interface for the model representing an Image entity which is referencing an Image cmf document.
 *
 * @author Aram Alipoor <aram.alipoor@gmail.com>
 */
interface ImageInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function getMediaId();

    /**
     * @param string $mediaId
     */
    public function setMediaId($mediaId);

    /**
     * @return CmfImageInterface
     */
    public function getMedia();

    /**
     * @param CmfImageInterface $media
     */
    public function setMedia($media);
}
