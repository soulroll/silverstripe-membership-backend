<?php

use SilverStripe\ORM\DataExtension,
	SilverStripe\Security\Group;

class GroupsExtension extends DataExtension
{
	public function requireDefaultRecords() {

		// returns a `DataList` containing all the `Group` objects.
		$group = Group::get()->find('Code', 'bogans') ?: Group::create();

		if(!($group && $group->ID)) {
			$group->Title = 'Bogans';
			$group->Code = 'bogans';
			$group->write();
		}

	}
}

