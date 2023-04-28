<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuApprovalRequestKeyType extends BaseEnum
{
  const Email 	= 'E';
  const Mobile 	= 'M';

	public static $messageCategory = 'aaa';

	public static $list = [
		self::Email  => 'Email',
		self::Mobile => 'Mobile',
	];

};
