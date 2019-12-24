<?php
/**
 * Created by Jonny li.
 * User:  82年的烂香蕉
 * Date: 2019/12/25
 * Time: 上午12:08
 * QQ: 2511221051@qq.com
 */

namespace liyangyang\DesignPatterns\SimpleFactory;

/**
 * @desc 简单工厂类
 * Class Factory
 * @package liyangyang\DesignPatterns\SimpleFactory
 */
class Factory
{
    /**
     * @desc 创建对象
     * @access public
     * Author: 82年的烂香蕉
     * Date: 2019/12/25 上午12:10
     * @param string $operator
     * @return Add|Division|Multiplication|Subtraction
     */
    public function createObject($operator = '+')
    {
        switch ($operator) {
            case '+':
                $result = new Add();
                break;
            case '-':
                $result = new Subtraction();
                break;
            case '*':
                $result = new Multiplication();
                break;
            case '/':
                $result = new Division();
                break;
            default:
                throw new \Exception('当前运算符不支持！');
        }
        return $result;
    }
}