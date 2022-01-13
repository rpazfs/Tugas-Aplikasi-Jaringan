<?php

namespace App\Http\Controllers;

use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use Auth;

class AdminLTEFilter implements FilterInterface
{
    public function transform($item)
	{
		if (! $this->isVisible($item)) {
			return false;
		}
		if (isset($item['header'])) {
			$item = $item['header'];
		}
		return $item;
	}
	protected function isVisible($item)
	{
        // check if user is a member of specified role(s)
		if (isset($item['roles'])) {
			if (! (Auth::user())->hasRole($item['roles'])) {
				// not a member of any valid roles; check if user has been granted explicit permission
				if (isset($item['can']) && (Auth::user())->can($item['can'])) {
					return true;
				} else {
					return false;
				}
			} else {
				return true;
			}
		} else {
			// valid roles not defined; check if user has been granted explicit permission
			if (isset($item['can'])) {
				// permissions are defined
				if ((Auth::user())->can($item['can'])) {
					return true;
				} else {
					return false;
				}
			} else {
				// no valid roles or permissions defined; allow for all users
				return true;
			}
		}
	}
}
