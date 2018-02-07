<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblderivativeStandardEquipmentItemBase]].
 *
 * @see TblderivativeStandardEquipmentItemBase
 */
class TblderivativeStandardEquipmentItemBaseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TblderivativeStandardEquipmentItemBase[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TblderivativeStandardEquipmentItemBase|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
