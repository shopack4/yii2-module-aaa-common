<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuAlertStatus extends BaseEnum
{
  const NEW 				= 'N';
  const PROCESSING	= 'P';
  const SENT 				= 'S';
  const ERROR 			= 'E';
  const REMOVED 		= 'R';

	public static $messageCategory = 'aaa';

	public static $list = [
		self::NEW 				=> 'New',
		self::PROCESSING	=> 'Processing',
		self::SENT 				=> 'Sent',
		self::ERROR 			=> 'Error',
		self::REMOVED 		=> 'Removed',
	];

};
