<?php
/**
 * Google Sitemap 生成器
 * 
 * @package Sitemap
 * @author Hanny
 * @version 1.0.1
 * @dependence 9.9.2-*
 * @link http://www.imhan.com
 *
 * 历史版本
 * version 1.0.1 at 2010-01-02
 * 修改自定义静态链接时错误的Bug
 *
 * version 1.0.0 at 2010-01-02
 * Sitemap for Google
 * 生成文章和页面的Sitemap
 *
 */
class Sitemap_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
		Helper::addRoute('sitemap', '/sitemap/', 'Sitemap_Action', 'action');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
	{
		Helper::removeRoute('sitemap');
	}
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

}
