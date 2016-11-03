<?php
/**
 * Example Plugin plugin for Craft CMS
 *
 * Example Plugin Variable
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2016 Jason Mayo
 * @link      http://madebyshape.co.uk
 * @package   ExamplePlugin
 * @since     0.1
 */

namespace Craft;

class ExamplePluginVariable
{
    public function saveViewedEntry($entryId)
    {
	    // Run the saveViewedEntry function in the services file. Passing the Entry ID from the variable to it
	    return craft()->examplePlugin->saveViewedEntry($entryId);
    }
    
    public function getViewedEntries()
    {
	    // Run the getViewedEntries function in the services file
	    return craft()->examplePlugin->getViewedEntries();
    }
}