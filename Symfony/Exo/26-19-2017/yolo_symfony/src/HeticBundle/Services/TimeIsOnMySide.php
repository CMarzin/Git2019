<?php
namespace HeticBundle\Services;
use Symfony\Component\Validator\Constraints\DateTime;


/**
 * Created by PhpStorm.
 * User: coco
 * Date: 29/01/17
 * Time: 22:27
 */
class TimeIsOnMySide
{
    public function getAge(\DateTime $dateTime)
    {
           $interval = $dateTime->diff(new \DateTime('now'));
           return $interval->y;
    }
}