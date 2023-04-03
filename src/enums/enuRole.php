<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuRole extends BaseEnum
{
	CONST FULL_ACCESS = 1;
	CONST USER        = 10;

	public static $messageCategory = 'aaa';

	public static $list = [
		self::FULL_ACCESS	=> 'Full Access',
		self::USER				=> 'User',
	];

};
