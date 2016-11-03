<?php
/**
 * Example Plugin plugin for Craft CMS
 *
 * ExamplePlugin Record
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2016 Jason Mayo
 * @link      http://madebyshape.co.uk
 * @package   ExamplePlugin
 * @since     0.1
 */

namespace Craft;

class ExamplePluginRecord extends BaseRecord
{
    /**
     * @return string
     */
    public function getTableName()
    {
	    // Set the database table name
        return 'exampleplugin';
    }

    /**
     * @access protected
     * @return array
     */
   protected function defineAttributes()
    {
	    // Define the database columns (Usually matches the model)
        return array(
            'entryId' => array(AttributeType::Number),
            'ipAddress' => array(AttributeType::String)
        );
    }
}
