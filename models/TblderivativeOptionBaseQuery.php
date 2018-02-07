<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblderivativeOptionBase]].
 *
 * @see TblderivativeOptionBase
 */
class TblderivativeOptionBaseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TblderivativeOptionBase[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TblderivativeOptionBase|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
