<?php
namespace HeticBundle\Services;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Created by PhpStorm.
 * User: Hadrien
 * Date: 27/01/2017
 * Time: 17:23
 */
class TimeIsOnMySide
{

    public function getAge(\DateTime $datetime)
    {
        $interval = $datetime->diff(new \DateTime('now'));
//        dump($interval);
//        die();
        return $interval->y;
    }
}