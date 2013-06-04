<?php

namespace SclZfCartPaypointTests\Service;

use SclZfCartPaypoint\Service\PaypointService;

class PaypointServiceTest extends \PHPUnit_Framework_TestCase
{
    protected $service;

    protected function setUp()
    {
        $this->service = new PaypointService;
    }

    /**
     * testProcessCallback
     *
     * @covers SclZfCartPaypoint\Service\PaypointService::processCallback
     *
     * @return void
     */
    public function testProcessCallback()
    {
        $this->service->processCallback(array());
    }
}