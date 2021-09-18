<?php

namespace Sparkouttech\PaymentGateway;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sparkouttech\PaymentGateway\PaymentGateway
 */
class PaymentGatewayFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'payment-gateway';
    }
}
