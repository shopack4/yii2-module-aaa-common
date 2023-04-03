<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuUserStatus extends BaseEnum
{
  const ACTIVE 										= 'A';
  const INACTIVE 									= 'D';
  const NEW_FOR_LOGIN_BY_MOBILE 	= 'L'; //will be delete after 24 hours if not changed to others
  const REMOVED 									= 'R';

	public static $messageCategory = 'aaa';

	public static $list = [
		self::ACTIVE									=> 'Active',
		self::INACTIVE								=> 'Inactive',
		self::NEW_FOR_LOGIN_BY_MOBILE	=> 'For Login By Mobile',
		self::REMOVED 								=> 'Removed',
	];

};
