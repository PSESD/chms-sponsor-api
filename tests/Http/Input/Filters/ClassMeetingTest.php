<?php
namespace CHMSTests\Provider\Http\Input\Filters;

use CHMS\Provider\Http\Input\Filters\ClassMeeting as Filter;
use CHMS\Provider\Models\ClassMeeting as Model;
use CHMS\Common\Exceptions\InvalidInputException;
use CHMSTests\Provider\Stubs\GenericModel;

class ClassMeetingTest extends FilterTest
{
    protected function getFilterClass()
    {
        return Filter::class;
    }

    protected function getModelClass()
    {
        return Model::class;
    }

    protected function filters()
    {
        $faker = \Faker\Factory::create();
        $base = factory(GenericModel::class, 'ClassMeeting')->make()->toArray();
        $tests = [];
        // $tests[] = [
        //     'roles' => ['provider_administrator'],
        //     'input' => array_merge($base, []),
        //     'scenario' => 'create', 
        //     'expectException' => false
        // ];
        return $tests;
    }
}