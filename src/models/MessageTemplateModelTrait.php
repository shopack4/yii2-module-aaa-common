<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\models;

use shopack\base\common\rest\enuColumnInfo;
// use shopack\base\common\validators\JsonValidator;
use shopack\aaa\common\enums\enuMessageTemplateStatus;
use shopack\aaa\common\enums\enuMessageTemplateMedia;

/*
'mstID',
'mstKey',
'mstMedia',
'mstLanguage',
'mstTitle',
'mstBody',
'mstParamsPrefix',
'mstParamsSuffix',
'mstIsSystem',
'mstStatus',
'mstCreatedAt',
'mstCreatedBy',
'mstUpdatedAt',
'mstUpdatedBy',
'mstRemovedAt',
'mstRemovedBy',
*/
trait MessageTemplateModelTrait
{
  public function primaryKeyValue() {
		return $this->mstID;
	}

	public static function columnsInfo()
  {
    return [
			'mstID' => [
				enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'mstKey' => [
				enuColumnInfo::type       => ['string', 'max' => 64],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
        enuColumnInfo::search     => true,
			],
			'mstMedia' => [
				enuColumnInfo::type       => ['string', 'max' => 1],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null, //enuMessageTemplateMedia
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
        enuColumnInfo::search     => true,
			],
			'mstLanguage' => [ //fa, fa_IR
				enuColumnInfo::type       => ['string', 'max' => 5],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
        enuColumnInfo::search     => true,
			],
			'mstTitle' => [
				enuColumnInfo::type       => ['string', 'max' => 512],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
        enuColumnInfo::search     => true,
			],
			'mstBody' => [
				enuColumnInfo::type       => 'string', //mediumtext
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
			],
			'mstParamsPrefix' => [
				enuColumnInfo::type       => ['string', 'max' => 10],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => '{{',
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
			],
			'mstParamsSuffix' => [
				enuColumnInfo::type       => ['string', 'max' => 10],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => '}}',
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
      'mstIsSystem' => [
				enuColumnInfo::type       => 'boolean',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => false,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
        enuColumnInfo::search     => true,
			],
			'mstStatus' => [
        enuColumnInfo::isStatus   => true,
				enuColumnInfo::type       => ['string', 'max' => 1],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => enuMessageTemplateStatus::Active,
        enuColumnInfo::required   => true,
        enuColumnInfo::selectable => true,
        enuColumnInfo::search     => true,
			],
			'mstCreatedAt' => [
				enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
			'mstCreatedBy' => [
				enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
			],
      'mstUpdatedAt' => [
        enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'mstUpdatedBy' => [
        enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'mstRemovedAt' => [
        enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'mstRemovedBy' => [
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

		return $this->hasOne($className, ['usrID' => 'mstCreatedBy']);
	}

  public function getUpdatedByUser() {
		$className = get_called_class();

		if (str_contains($className, '\\backend\\'))
			$className = '\shopack\aaa\backend\models\UserModel';
		else
			$className = '\shopack\aaa\frontend\common\models\UserModel';

		return $this->hasOne($className, ['usrID' => 'mstUpdatedBy']);
	}

	public function getRemovedByUser() {
		$className = get_called_class();

		if (str_contains($className, '\\backend\\'))
			$className = '\shopack\aaa\backend\models\UserModel';
		else
			$className = '\shopack\aaa\frontend\common\models\UserModel';

		return $this->hasOne($className, ['usrID' => 'mstRemovedBy']);
	}

}
