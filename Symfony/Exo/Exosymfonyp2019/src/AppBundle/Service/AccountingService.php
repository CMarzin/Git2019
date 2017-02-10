<?php
namespace AppBundle\Service;

/**
 * Class AccountingService
 * @author Yann Le Scouarnec <yann.le-scouarnec@hetic.net>
 * @package AppBundle\Service
 */
class AccountingService
{
    const ACCOUNTING_VTA = 20;

    /**
     * @param $price
     * @return int|string
     * @throws \Exception
     */
    public function getVatPrice($price)
    {
        if(!is_numeric($price)){
            throw new \Exception("Price is not numeric");
        }
        if($price < 0){
            throw new \Exception("Price is bellow zero");
        }
        return $price + ($price/100*self::ACCOUNTING_VTA);
    }
}
