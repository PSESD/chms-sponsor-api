<?php
namespace CHMSTests\Provider\Http\Controllers\Providers;

use CHMSTests\Common\Http\Controllers\Base\ObjectControllerTest as BaseObjectControllerTest;
use CHMSTests\Common\Http\Controllers\Base\ObjectActions\GetObjectTrait;
use CHMSTests\Common\Http\Controllers\Base\ObjectActions\HeadObjectTrait;
use CHMSTests\Common\Http\Controllers\Base\ObjectActions\PatchObjectTrait;
use CHMSTests\Common\Http\Controllers\Base\ObjectActions\DeleteObjectTrait;

class ObjectControllerTest extends BaseObjectControllerTest
{
    use ObjectTrait;
    use GetObjectTrait;
    use HeadObjectTrait;
    use PatchObjectTrait;
    use DeleteObjectTrait;
}