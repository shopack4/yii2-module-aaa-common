<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuUploadFileStatus extends BaseEnum
{
  const NEW 				= 'N';
  const REMOVED 		= 'R';

	public static $messageCategory = 'aaa';

	public static $list = [
		self::NEW 				=> 'New',
		self::REMOVED 		=> 'Removed',
	];

};
