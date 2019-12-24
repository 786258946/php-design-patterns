<?php
/**
 * Created by Jonny li.
 * User:  82年的烂香蕉
 * Date: 2019/12/24
 * Time: 下午11:52
 * QQ: 2511221051@qq.com
 */

namespace liyangyang\DesignPatterns\SimpleFactory;

/**
 * @desc 加减乘除基类
 * Class Base
 * @package liyangyang\DesignPatterns\SimpleFactory
 */
abstract class Base
{
    /**
     * @desc 第一个数字
     * @var int
     */
    protected $numberOne = 0;

    /**
     * @desc 第二个数字
     * @var int
     */
    protected $numberTwo = 0;

    /**
     * @desc 计算结果
     * @access public
     * Author: 82年的烂香蕉
     * Date: 2019/12/24 下午11:55
     * @return mixed
     */
    abstract public function getResult();

    /**
     * @desc 设置第一个数值
     * @access public
     * Author: 82年的烂香蕉
     * Date: 2019/12/24 下午11:55
     * @param $number
     */
    public function setNumberOne($number)
    {
        $this->numberOne = $number;
        return $this;
    }

    /**
     * @desc 设置第二个数值
     * @access public
     * Author: 82年的烂香蕉
     * Date: 2019/12/24 下午11:55
     * @param $number
     */
    public function setNumberTwo($number)
    {
        $this->numberTwo = $number;
        return $this;
    }
}