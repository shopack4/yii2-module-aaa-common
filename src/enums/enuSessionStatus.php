<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuSessionStatus extends BaseEnum
{
  const PENDING 						= 'P';
  const ACTIVE 							= 'A';
  const FOR_LOGIN_BY_MOBILE = 'L';
  const REMOVED 						= 'R';

	public static $messageCategory = 'aaa';

	public static $list = [
		self::PENDING 						=> 'Pending',
		self::ACTIVE							=> 'Active',
		self::FOR_LOGIN_BY_MOBILE => 'For Login By Mobile',
		self::REMOVED 						=> 'Removed',
	];

};
