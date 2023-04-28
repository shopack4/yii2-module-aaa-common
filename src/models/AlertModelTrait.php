<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\models;

use shopack\base\common\rest\enuColumnInfo;
use shopack\base\common\validators\JsonValidator;
use shopack\aaa\common\enums\enuAlertStatus;

/*
'alrID',
'alrUserID',
'alrApprovalRequestID',
'alrForgotPasswordRequestID',
'alrTypeKey',
'alrTarget',
'alrInfo', :JSON
'alrLockedAt',
'alrLockedBy',
'alrLastTryAt',
'alrSentAt',
'alrResult', :JSON
'alrStatus',
'alrCreatedAt',
'alrCreatedBy',
'alrUpdatedAt',
'alrUpdatedBy',
'alrRemovedAt',
'alrRemovedBy',
*/
trait AlertModelTrait
{
  public function primaryKeyValue() {
		return $this->alrID;
	}

	public static function columnsInfo()
  {
    return [
			'alrID' => [
				enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'alrUserID' => [
				enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'alrApprovalRequestID' => [
				enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'alrForgotPasswordRequestID' => [
				enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'alrTypeKey' => [
				enuColumnInfo::type       => ['string', 'max' => 64],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
			],
			'alrTarget' => [
				enuColumnInfo::type       => ['string', 'max' => 255],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'alrInfo' => [
				enuColumnInfo::type       => JsonValidator::class,
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
			],
			'alrLockedAt' => [
				enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'alrLockedBy' => [
				enuColumnInfo::type       => ['string', 'max' => 64],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'alrLastTryAt' => [
				enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'alrSentAt' => [
				enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'alrResult' => [
				enuColumnInfo::type       => JsonValidator::class,
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'alrStatus' => [
				enuColumnInfo::type       => ['string', 'max' => 1],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => enuAlertStatus::New,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
			],
			'alrCreatedAt' => [
				enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'alrCreatedBy' => [
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

		return $this->hasOne($className, ['usrID' => 'alrCreatedBy']);
	}

  public function getAlertTemplate() {
		$className = get_called_class();

		if (str_contains($className, '\\backend\\'))
			$className = '\shopack\aaa\backend\models\AlertTemplateModel';
		else
			$className = '\shopack\aaa\frontend\common\models\AlertTemplateModel';

		return $this->hasOne($className, ['altKey' => 'alrTypeKey']);
	}

}
