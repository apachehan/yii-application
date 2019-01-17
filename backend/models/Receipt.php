<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "receipt".
 *
 * @property int $receipt_id
 * @property string $receipt_no
 * @property string $receipt_date
 * @property string $receipt_from
 * @property string $receipt_type
 * @property string $receipt_sum
 * @property string $receipt_employee
 * @property string $receipt_comment
 */
class Receipt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'receipt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_date'], 'safe'],
            [['receipt_sum'], 'required'],
            [['receipt_sum'], 'number'],
            [['receipt_no', 'receipt_employee'], 'string', 'max' => 26],
            [['receipt_from'], 'string', 'max' => 30],
            [['receipt_type'], 'string', 'max' => 12],
            [['receipt_comment'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'receipt_id' => 'Receipt ID',
            'receipt_no' => 'Receipt No',
            'receipt_date' => 'Receipt Date',
            'receipt_from' => 'Receipt From',
            'receipt_type' => 'Receipt Type',
            'receipt_sum' => 'Receipt Sum',
            'receipt_employee' => 'Receipt Employee',
            'receipt_comment' => 'Receipt Comment',
        ];
    }
}
