<?php

namespace Ben\LogementBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class LogementController__JMSInjector
{
    public static function inject($container) {
        require_once 'C:/wamp/www/logement/app/cache/prod/jms_diextra/proxies/Ben-LogementBundle-Controller-LogementController.php';
        $f = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Ben\\LogementBundle\\Controller\\LogementController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxyc1729f3f_17b1dbb4d35ea4a625b6cb14b81c2e278d5bd89a\__CG__\Ben\LogementBundle\Controller\LogementController();
        $instance->__CGInterception__setLoader($f);
        return $instance;
    }
}