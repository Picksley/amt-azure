<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblderivativeBase]].
 *
 * @see TblderivativeBase
 */
class TblderivativeBaseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TblderivativeBase[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TblderivativeBase|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
