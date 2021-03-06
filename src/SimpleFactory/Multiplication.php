<?php
/**
 * Created by Jonny li.
 * User:  82年的烂香蕉
 * Date: 2019/12/25
 * Time: 上午12:04
 * QQ: 2511221051@qq.com
 */

namespace liyangyang\DesignPatterns\SimpleFactory;

/**
 * @desc 乘法类
 * Class Multiplication
 * @package liyangyang\DesignPatterns\SimpleFactory
 */
class Multiplication extends Base
{
    /**
     * @desc 求两数乘积
     * @access public
     * Author: 82年的烂香蕉
     * Date: 2019/12/25 上午12:05
     * @return float|int|mixed
     */
    public function getResult()
    {
        // TODO: Implement getResult() method.
        return $this->numberOne * $this->numberTwo;
    }
}