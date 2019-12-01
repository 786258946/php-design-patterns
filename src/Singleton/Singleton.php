<?php
/**
 * Created by Jonny li.
 * User:  82年的烂香蕉
 * Date: 2019/12/1
 * Time: 下午9:23
 * QQ: 2511221051@qq.com
 */

namespace liyangyang\DesignPatterns\Singleton;

/**
 * @desc 单例类
 * Class Singleton
 * @package liyangyang\DesignPatterns\Singleton
 */
class Singleton
{
    /**
     * @desc 当前类的实例
     * @var null
     */
    private static $instance = null;

    /**
     * @desc 函数构造器  禁止从类外部实例化
     * Singleton constructor.
     */
    private function __construct()
    {

    }

    /**
     * @desc 创建一个静态方法来生成当前类的唯一实例
     * @access public
     * Author: 82年的烂香蕉
     * Date: 2019/12/1 下午9:31
     * @return Singleton|null
     */
    public static function getInstance()
    {
        if (self::$instance === null) { //检测当前类属性$instance是否已经保存了当前类的实例
            self::$instance = new self(); //如果没有,则创建当前类的实例
        }
        //存在就直接返回类实例
        return self::$instance;
    }

    /**
     * @desc 防止对象实例被克隆
     * @access public
     * Author: 82年的烂香蕉
     * Date: 2019/12/1 下午9:34
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * @desc 防止被反序列化
     * @access public
     * Author: 82年的烂香蕉
     * Date: 2019/12/1 下午9:35
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}

