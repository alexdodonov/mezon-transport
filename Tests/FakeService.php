<?php
namespace Mezon\Service\Tests;

use Mezon\Service\ServiceBaseLogicInterface;

/**
 * Tests for the class ServiceTransport.
 */
class FakeService implements ServiceBaseLogicInterface
{

    public function actionHelloWorld()
    {
        return 1;
    }
}
