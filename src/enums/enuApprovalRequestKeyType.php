<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuApprovalRequestKeyType extends BaseEnum
{
  const EMAIL 	= 'E';
  const MOBILE 	= 'M';

	public static $messageCategory = 'aaa';

	public static $list = [
		self::EMAIL  => 'Email',
		self::MOBILE => 'Mobile',
	];

};
