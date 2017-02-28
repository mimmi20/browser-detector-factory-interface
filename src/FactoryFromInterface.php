<?php
/**
 * This file is part of the browser-detector-factory-interface package.
 *
 * Copyright (c) 2015-2017, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace BrowserDetector\Factory;

/**
 * Browser detection class
 *
 * @category  BrowserDetector
 *
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2012-2016 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
interface FactoryFromInterface
{
    /**
     * @param array $data
     *
     * @return mixed
     */
    public function fromArray(array $data);

    /**
     * @param string $json
     *
     * @return mixed
     */
    public function fromJson($json);
}
