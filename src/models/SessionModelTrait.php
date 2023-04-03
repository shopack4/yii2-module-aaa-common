<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace shopack\aaa\common\models;

use shopack\base\common\rest\enuColumnInfo;
use shopack\aaa\common\enums\enuSessionStatus;

trait SessionModelTrait
{
  public function primaryKeyValue() {
		return $this->ssnID;
	}

  public static function columnsInfo()
  {
    return [
      'ssnID' => [
        enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'ssnUserID' => [
        enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'ssnJWT' => [
        enuColumnInfo::type       => ['string', 'max' => 2048],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'ssnStatus' => [
        enuColumnInfo::type       => ['string', 'max' => 1],
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => enuSessionStatus::PENDING,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'ssnExpireAt' => [
        enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'ssnCreatedAt' => [
        enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'ssnUpdatedAt' => [
        enuColumnInfo::type       => 'safe',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
      'ssnUpdatedBy' => [
        enuColumnInfo::type       => 'integer',
        enuColumnInfo::validator  => null,
        enuColumnInfo::default    => null,
        enuColumnInfo::required   => false,
        enuColumnInfo::selectable => true,
      ],
    ];
  }

  // public function getCreatedByUser() {
	// 	$className = get_called_class();

	// 	if (str_contains($className, '\\backend\\'))
	// 		$className = '\shopack\aaa\backend\models\UserModel';
	// 	else
	// 		$className = '\shopack\aaa\frontend\common\models\UserModel';

	// 	return $this->hasOne($className, ['usrID' => 'ssnCreatedBy']);
	// }

	public function getUpdatedByUser() {
		$className = get_called_class();

		if (str_contains($className, '\\backend\\'))
			$className = '\shopack\aaa\backend\models\UserModel';
		else
			$className = '\shopack\aaa\frontend\common\models\UserModel';

		return $this->hasOne($className, ['usrID' => 'ssnUpdatedBy']);
	}

	// public function getRemovedByUser() {
	// 	$className = get_called_class();

	// 	if (str_contains($className, '\\backend\\'))
	// 		$className = '\shopack\aaa\backend\models\UserModel';
	// 	else
	// 		$className = '\shopack\aaa\frontend\common\models\UserModel';

	// 	return $this->hasOne($className, ['usrID' => 'ssnRemovedBy']);
	// }

}
