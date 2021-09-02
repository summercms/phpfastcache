<?php

/**
 *
 * This file is part of Phpfastcache.
 *
 * @license MIT License (MIT)
 *
 * For full copyright and license information, please see the docs/CREDITS.txt and LICENCE files.
 *
 * @author Georges.L (Geolim4)  <contact@geolim4.com>
 * @author Contributors  https://github.com/PHPSocialNetwork/phpfastcache/graphs/contributors
 */
declare(strict_types=1);

namespace Phpfastcache\Drivers\Devrandom;

use Phpfastcache\Core\Item\ExtendedCacheItemInterface;
use Phpfastcache\Core\Item\ItemBaseTrait;

/**
 * Class Item
 * @package phpFastCache\Drivers\Devfalse
 */
class Item implements ExtendedCacheItemInterface
{
    use ItemBaseTrait;

    protected function getDriverClass(): string
    {
        return Driver::class;
    }
}