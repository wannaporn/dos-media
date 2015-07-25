<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Component\Image\Model;

use PhpSpec\ObjectBehavior;

/**
 * @author Aram Alipoor <aram.alipoor@gmail.com>
 */
class ImageSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Component\Media\Model\Image');
    }
}
