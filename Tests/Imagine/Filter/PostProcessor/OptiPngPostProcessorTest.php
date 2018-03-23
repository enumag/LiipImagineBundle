<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Tests\Imagine\Filter\PostProcessor;

use Liip\ImagineBundle\File\FileContent;
use Liip\ImagineBundle\File\FileInterface;
use Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor;
use Liip\ImagineBundle\Tests\AbstractTest;

/**
 * @covers \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor
 */
class OptiPngPostProcessorTest extends AbstractTest
{
    public function testJpegOptimPostProcessor()
    {
        $optiPngPostProcessor = new OptiPngPostProcessor(
            __DIR__.'/../../../Fixtures/bash/empty-command.sh'
        );

        $binary = FileContent::create('content', 'image/png', 'png');
        $result = $optiPngPostProcessor->process($binary);

        $this->assertInstanceOf(FileInterface::class, $result);
    }
}
