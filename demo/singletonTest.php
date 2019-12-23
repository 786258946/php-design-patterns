<?php
/**
 * Created by Jonny li.
 * User:  82年的烂香蕉
 * Date: 2019/12/1
 * Time: 下午9:26
 * QQ: 2511221051@qq.com
 */

use liyangyang\DesignPatterns\Singleton\Singleton;
use liyangyang\DesignPatterns\Singleton\Normal;

include_once __DIR__ . '/../vendor/autoload.php';


$db1 = new Normal();
$db2 = new Normal();
$db3 = clone $db2;

var_dump($db1);
echo '<br>';
var_dump($db2);
echo '<br>';
var_dump($db3);
echo '<br>';


$db4 = Singleton::getInstance();
$db5 = Singleton::getInstance();

var_dump($db4);
echo '<br>';
var_dump($db5);
echo '<br>';