<?php
/**
 * Created by Jonny li.
 * User:  82年的烂香蕉
 * Date: 2019/12/25
 * Time: 上午12:06
 * QQ: 2511221051@qq.com
 */

namespace liyangyang\DesignPatterns\SimpleFactory;

/**
 * @desc 除法类
 * Class Division
 * @package liyangyang\DesignPatterns\SimpleFactory
 */
class Division extends Base
{
    /**
     * @desc 求两数相除
     * @access public
     * Author: 82年的烂香蕉
     * Date: 2019/12/25 上午12:05
     * @return float|int|mixed
     */
    public function getResult()
    {
        // TODO: Implement getResult() method.
        if ($this->numberTwo == 0) throw new \InvalidArgumentException('除数不能为零！');
        return $this->numberOne / $this->numberTwo;
    }
}