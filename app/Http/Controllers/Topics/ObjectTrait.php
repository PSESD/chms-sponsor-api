<?php
/**
 * Clock Hour Management System - Sponsor Provider
 *
 * @copyright Copyright (c) 2016 Puget Sound Educational Service District
 * @license   Proprietary
 */
namespace CHMS\SponsorProvider\Http\Controllers\Topics;

use CHMS\SponsorProvider\Repositories\Topic\Contract;
use CHMS\SponsorProvider\Http\Transformers\Topic as Transformer;

trait ObjectTrait
{
    /**
     * @var Contract
     */
    private $repository;

    /**
     * Constructor
     * @param Contract $repository
     */
    public function __construct(Contract $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * @inheritdoc
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @inheritdoc
     */
    public function getTransformer()
    {
        return new Transformer();
    }

    /**
     * @inheritdoc
     */
    public function getResourceKey()
    {
        return 'topics';
    }
}
