<?php
/**
 * Created by Jonny li.
 * User:  82年的烂香蕉
 * Date: 2019/12/25
 * Time: 上午12:17
 * QQ: 2511221051@qq.com
 */

use liyangyang\DesignPatterns\SimpleFactory\Add;
use liyangyang\DesignPatterns\SimpleFactory\Subtraction;
use liyangyang\DesignPatterns\SimpleFactory\Multiplication;
use liyangyang\DesignPatterns\SimpleFactory\Division;
use liyangyang\DesignPatterns\SimpleFactory\Factory;

include_once __DIR__ . '/../vendor/autoload.php';

//$operation1 = new Add();
//echo $operation1->setNumberOne(1)->setNumberTwo(2)->getResult();
//
//echo "<br>";
//
//$operation2 = new Subtraction();
//echo $operation2->setNumberOne(2)->setNumberTwo(2)->getResult();
//
//echo "<br>";
//
//$operation3 = new Multiplication();
//echo $operation3->setNumberOne(3)->setNumberTwo(3)->getResult();
//
//echo "<br>";
//
//$operation4 = new Division();
//echo $operation4->setNumberOne(4)->setNumberTwo(2)->getResult();

$factory = new Factory();

echo $factory->createObject()->setNumberOne(1)->setNumberTwo(2)->getResult();
