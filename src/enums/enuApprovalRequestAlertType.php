<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuApprovalRequestAlertType extends BaseEnum
{
  const EMAIL_APPROVAL            = 'emailApproval';
  const MOBILE_APPROVAL           = 'mobileApproval';
  const EMAIL_APPROVAL_FOR_LOGIN  = 'emailApprovalForLogin';
  const MOBILE_APPROVAL_FOR_LOGIN = 'mobileApprovalForLogin';
  const EMAIL_APPROVED            = 'emailApproved';
  const MOBILE_APPROVED           = 'mobileApproved';

	public static $messageCategory = 'aaa';

	public static $list = [
		self::EMAIL_APPROVAL            => 'emailApproval',
		self::MOBILE_APPROVAL           => 'mobileApproval',
		self::EMAIL_APPROVAL_FOR_LOGIN  => 'emailApprovalForLogin',
		self::MOBILE_APPROVAL_FOR_LOGIN => 'mobileApprovalForLogin',
		self::EMAIL_APPROVED            => 'emailApproved',
		self::MOBILE_APPROVED           => 'mobileApproved',
	];

};
