<?php
namespace CHMSTests\Provider\Http\Input\Filters;

use CHMS\Provider\Http\Input\Filters\Evaluation as Filter;
use CHMS\Provider\Models\Evaluation as Model;
use CHMS\Common\Exceptions\InvalidInputException;
use CHMSTests\Provider\Stubs\GenericModel;

class EvaluationTest extends FilterTest
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
        $base = factory(GenericModel::class, 'Evaluation')->make()->toArray();
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