<?php
/**
 * Created by Jonny li.
 * User:  82年的烂香蕉
 * Date: 2019/12/25
 * Time: 上午12:01
 * QQ: 2511221051@qq.com
 */

namespace liyangyang\DesignPatterns\SimpleFactory;

/**
 * @desc 数字求和类
 * Class Add
 * @package liyangyang\DesignPatterns\SimpleFactory
 */
class Add extends Base
{
    /**
     * @desc 两数求和
     * @access public
     * Author: 82年的烂香蕉
     * Date: 2019/12/25 上午12:02
     * @return int|mixed
     */
    public function getResult()
    {
        // TODO: Implement getResult() method.
        return $this->numberOne + $this->numberTwo;
    }
}