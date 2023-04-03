<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuGatewayStatus extends BaseEnum
{
  const ACTIVE 		= 'A';
  const INACTIVE 	= 'D';
  const REMOVED 	= 'R';

	public static $messageCategory = 'aaa';

	public static $list = [
		[
			self::ACTIVE		=> 'Active',
			self::INACTIVE	=> 'Inactive',
			self::REMOVED 	=> 'Removed',
		],
		'form' => [
			self::ACTIVE,
			self::INACTIVE,
		],
	];

};
