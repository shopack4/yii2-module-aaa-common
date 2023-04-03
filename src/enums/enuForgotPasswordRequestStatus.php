<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuForgotPasswordRequestStatus extends BaseEnum
{
  const NEW 				= 'N';
  const SENT 				= 'S';
  const APPLIED 		= 'A';
  const EXPIRED 		= 'E';

	public static $messageCategory = 'aaa';

	public static $list = [
		self::NEW 				=> 'New',
		self::SENT 				=> 'Sent',
		self::APPLIED			=> 'Applied',
		self::EXPIRED 		=> 'Expired',
	];

};
