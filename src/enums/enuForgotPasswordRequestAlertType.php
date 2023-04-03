<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuForgotPasswordRequestAlertType extends BaseEnum
{
  const REQUEST_BY_EMAIL  = 'forgotPassByEmail';
  const REQUEST_BY_MOBILE = 'forgotPassByMobile';
  const CHANGED_BY_EMAIL  = 'passChangedByEmail';
  const CHANGED_BY_MOBILE = 'passChangedByMobile';

	public static $messageCategory = 'aaa';

	public static $list = [
		self::REQUEST_BY_EMAIL  => 'forgotPassByEmail',
		self::REQUEST_BY_MOBILE => 'forgotPassByMobile',
		self::CHANGED_BY_EMAIL  => 'passChangedByEmail',
		self::CHANGED_BY_MOBILE => 'passChangedByMobile',
	];

};
