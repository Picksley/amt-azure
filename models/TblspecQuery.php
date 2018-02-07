<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Tblspec]].
 *
 * @see Tblspec
 */
class TblspecQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Tblspec[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Tblspec|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
