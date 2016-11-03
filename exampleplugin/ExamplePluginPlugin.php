<?php
/**
 * Example Plugin plugin for Craft CMS
 *
 * Example Plugin
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2016 Jason Mayo
 * @link      http://madebyshape.co.uk
 * @package   ExamplePlugin
 * @since     0.1
 */

namespace Craft;

class ExamplePluginPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Example Plugin');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Example Plugin');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/madebyshape/exampleplugin/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/madebyshape/exampleplugin/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '0.1';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '0.1';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Jason Mayo';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://madebyshape.co.uk';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}