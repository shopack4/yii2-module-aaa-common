<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuGender extends BaseEnum
{
	const NOT_SET	= 'N';
	const MALE		= 'M';
	const FEMALE	= 'F';

	public static $messageCategory = 'aaa';

	public static $list = [
		self::NOT_SET	=> 'None',
		self::MALE		=> 'Male',
		self::FEMALE	=> 'Female',
	];

	public static function getAbrLabel($value)
	{
		if ($value == self::MALE)
			return 'Mr';

		if ($value == self::FEMALE)
			return 'Ms';

		return '';
	}

};
