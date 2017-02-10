<?php
namespace AppBundle\Tests\Service;

use AppBundle\Service\AccountingService;

class AccountingServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider priceData
     * @param $price
     * @param $expected
     */
    public function testGetVatPrice($price, $expected)
    {
        $service = new AccountingService();
        $this->assertEquals($expected, $service->getVatPrice($price));
    }

    public function priceData()
    {
        return [
            [0, 0],
            [10, 12],
            [1, 1.2],
            [1, 4],
        ];
    }
}
