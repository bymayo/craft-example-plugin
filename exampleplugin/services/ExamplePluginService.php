<?php
/**
 * Example Plugin plugin for Craft CMS
 *
 * ExamplePlugin Service
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2016 Jason Mayo
 * @link      http://madebyshape.co.uk
 * @package   ExamplePlugin
 * @since     0.1
 */

namespace Craft;

class ExamplePluginService extends BaseApplicationComponent
{
	
	public function ipAddress()
	{
		// Grab current users IP address using craft.request
		return craft()->request->getIpAddress();
	}
	
    public function saveViewedEntry($entryId)
    {
	    
	    // Check to see if the Entry ID and IP address already exists in the database table
		$entryRecord = ExamplePluginRecord::model()->findByAttributes(
			array(
				'entryId' => $entryId,
				'ipAddress' => $this->ipAddress(),
			)
		);
		
		// If it doesn't, create a new record
		if (!$entryRecord)
		{
			
			// New Record
			$entryRecord = new ExamplePluginRecord;
			
			// Get Entry ID from variable
			$entryRecord->setAttribute('entryId', $entryId);
			
			// Get users IP address from ipAddress() function
			$entryRecord->setAttribute('ipAddress', $this->ipAddress());
			
			// Save new record to the database table
			$entryRecord->save();
		
		}
	    
    }
    
    public function getViewedEntries()
    {
	    
	    // Create new model to store selected data in
	    $entriesModel = new ExamplePluginModel;
	    
	    // Find all records in the database table with the users IP address
	    $entriesRecord = ExamplePluginRecord::model()->findAllByAttributes(
	    	array(
	    		'ipAddress' => $this->ipAddress()
	    	)
	    );
	    
	    // If it exists, output the model, with the record we just found
	    if ($entriesRecord)
	    {
		    
		    // Populate the model with the record we found
		    $entriesModel = ExamplePluginModel::populateModels($entriesRecord);
		    
		    // Output the array
		    return $entriesModel;
		    
	    }
	    
    }

}