<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\models;

use shopack\base\common\rest\enuColumnInfo;
use shopack\base\common\validators\JsonValidator;
use shopack\aaa\common\enums\enuMessageStatus;

/*
'msgID',
'msgUserID',
'msgApprovalRequestID',
'msgForgotPasswordRequestID',
'msgTypeKey',
'msgTarget',
'msgInfo', :JSON
'msgIssuer',
'msgLockedAt',
'msgLockedBy',
'msgLastTryAt',
'msgSentAt',
'msgResult', :JSON
'msgStatus',
'msgCreatedAt',
'msgCreatedBy',
'msgUpdatedAt',
'msgUpdatedBy',
'msgRemovedAt',
'msgRemovedBy',
*/
trait MessageModelTrait
{
  public function primaryKeyValue() {
		return $this->msgID;
	}

	public static function columnsInfo()
  {
    return [
			'msgID' => [
				enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'msgUserID' => [
				enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'msgApprovalRequestID' => [
				enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'msgForgotPasswordRequestID' => [
				enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'msgTypeKey' => [
				enuColumnInfo::type       => ['string', 'max' => 64],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
			],
			'msgTarget' => [
				enuColumnInfo::type       => ['string', 'max' => 255],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'msgInfo' => [
				enuColumnInfo::type       => JsonValidator::class,
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
			],
      'msgIssuer' => [
				enuColumnInfo::type       => ['string', 'max' => 64],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
        enuColumnInfo::search     => true,
			],
			'msgLockedAt' => [
				enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'msgLockedBy' => [
				enuColumnInfo::type       => ['string', 'max' => 64],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'msgLastTryAt' => [
				enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'msgSentAt' => [
				enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'msgResult' => [
				enuColumnInfo::type       => JsonValidator::class,
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'msgStatus' => [
        enuColumnInfo::isStatus   => true,
				enuColumnInfo::type       => ['string', 'max' => 1],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => enuMessageStatus::New,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
        enuColumnInfo::search     => true,
			],
			'msgCreatedAt' => [
				enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'msgCreatedBy' => [
				enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
      'msgUpdatedAt' => [
        enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'msgUpdatedBy' => [
        enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'msgRemovedAt' => [
        enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'msgRemovedBy' => [
        enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
		];
  }

  public function getCreatedByUser() {
		$className = get_called_class();

		if (str_contains($className, '\\backend\\'))
			$className = '\shopack\aaa\backend\models\UserModel';
		else
			$className = '\shopack\aaa\frontend\common\models\UserModel';

		return $this->hasOne($className, ['usrID' => 'msgCreatedBy']);
	}

  public function getUpdatedByUser() {
		$className = get_called_class();

		if (str_contains($className, '\\backend\\'))
			$className = '\shopack\aaa\backend\models\UserModel';
		else
			$className = '\shopack\aaa\frontend\common\models\UserModel';

		return $this->hasOne($className, ['usrID' => 'msgUpdatedBy']);
	}

	public function getRemovedByUser() {
		$className = get_called_class();

		if (str_contains($className, '\\backend\\'))
			$className = '\shopack\aaa\backend\models\UserModel';
		else
			$className = '\shopack\aaa\frontend\common\models\UserModel';

		return $this->hasOne($className, ['usrID' => 'msgRemovedBy']);
	}

  public function getUser() {
    $className = get_called_class();

    if (str_contains($className, '\\backend\\'))
      $className = '\shopack\aaa\backend\models\UserModel';
    else
      $className = '\shopack\aaa\frontend\common\models\UserModel';

    return $this->hasOne($className, ['usrID' => 'msgUserID']);
  }

  public function getApprovalRequest() {
    $className = get_called_class();

    if (str_contains($className, '\\backend\\'))
      $className = '\shopack\aaa\backend\models\ApprovalRequestModel';
    else
      $className = '\shopack\aaa\frontend\common\models\ApprovalRequestModel';

    return $this->hasOne($className, ['aprID' => 'msgApprovalRequestID']);
  }

  public function getForgotPasswordRequest() {
    $className = get_called_class();

    if (str_contains($className, '\\backend\\'))
      $className = '\shopack\aaa\backend\models\ForgotPasswordRequestModel';
    else
      $className = '\shopack\aaa\frontend\common\models\ForgotPasswordRequestModel';

    return $this->hasOne($className, ['fprID' => 'msgForgotPasswordRequestID']);
  }

  public function getMessageTemplate() {
		$className = get_called_class();

		if (str_contains($className, '\\backend\\'))
			$className = '\shopack\aaa\backend\models\MessageTemplateModel';
		else
			$className = '\shopack\aaa\frontend\common\models\MessageTemplateModel';

		return $this->hasOne($className, ['mstKey' => 'msgTypeKey']);
	}

}
