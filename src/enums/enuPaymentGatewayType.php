<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuPaymentGatewayType extends BaseEnum
{
	const Prepay		= 1;
	const Postpay		= 2;
	const Both			= 3;
	const ByCredit	= 4;

	public static $messageCategory = 'aaa';

	public static $list = [
		self::Prepay => 'Prepay',
		self::Postpay => 'Postpay',
	];

	public static function getHRLabel($value)
	{
		if ($value == self::Prepay)
			return 'پرداخت آنلاین';

		if ($value == self::Postpay)
			return 'پرداخت در محل';

		if ($value == self::Both)
			return 'پرداخت آنلاین + پرداخت در محل';

		if ($value == self::ByCredit)
			return 'پرداخت با اعتبار';

		return '';
	}

}
