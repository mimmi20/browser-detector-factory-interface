<?php
/**
 * This file is part of the browser-detector-factory-interface package.
 *
 * Copyright (c) 2015-2019, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace BrowserDetector\Factory;

interface FactoryInterface
{
    /**
     * @param string $useragent
     *
     * @return mixed
     */
    public function detect(string $useragent);
}
