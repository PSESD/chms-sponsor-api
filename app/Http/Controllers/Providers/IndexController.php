<?php
/**
 * Clock Hour Management System - Provider Provider
 *
 * @copyright Copyright (c) 2016 Puget Sound Educational Service District
 * @license   Proprietary
 */
namespace CHMS\ProviderHub\Http\Controllers\Providers;

use CHMS\Common\Http\Controllers\Base\IndexController as BaseController;
use Illuminate\Http\Request;

use CHMS\Common\Http\Controllers\Base\IndexActions\GetIndexTrait;
use CHMS\Common\Http\Controllers\Base\IndexActions\PostIndexTrait;

/**
 * Providers controller
 */
class IndexController extends BaseController
{
    use ObjectTrait;
    use GetIndexTrait;
    use PostIndexTrait;
}
