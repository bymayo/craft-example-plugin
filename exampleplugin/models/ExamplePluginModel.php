<?php
/**
 * Example Plugin plugin for Craft CMS
 *
 * ExamplePlugin Model
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2016 Jason Mayo
 * @link      http://madebyshape.co.uk
 * @package   ExamplePlugin
 * @since     0.1
 */

namespace Craft;

class ExamplePluginModel extends BaseModel
{
    /**
     * @return array
     */
    protected function defineAttributes()
    {
	    
	    // Define the model attributes
        return array_merge(parent::defineAttributes(), array(
            'entryId' => array(AttributeType::Number),
            'ipAddress' => array(AttributeType::String)
        ));
    }

}