<?php

namespace Sparkouttech\PaymentGateway\Tests;

class ExampleTest extends TestCase
{
    /**
     * testBasicExample
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->assertInstanceOf(\Sparkouttech\PaymentGateway\PaymentGateway::class, app('payment-gateway'));
        $this->assertInstanceOf(\Sparkouttech\PaymentGateway\PaymentGateway::class, \Sparkouttech\PaymentGateway\PaymentGatewayFacade::getFacadeRoot());
    }
}
