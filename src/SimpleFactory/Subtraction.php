<?php
/**
 * Created by Jonny li.
 * User:  82年的烂香蕉
 * Date: 2019/12/25
 * Time: 上午12:03
 * QQ: 2511221051@qq.com
 */

namespace liyangyang\DesignPatterns\SimpleFactory;

/**
 * @desc 求差类
 * Class Subtraction
 * @package liyangyang\DesignPatterns\SimpleFactory
 */
class Subtraction extends Base
{
    /**
     * @desc 两数求差
     * @access public
     * Author: 82年的烂香蕉
     * Date: 2019/12/25 上午12:03
     * @return int|mixed
     */
    public function getResult()
    {
        // TODO: Implement getResult() method.
        return $this->numberOne - $this->numberTwo;
    }
}