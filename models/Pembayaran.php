<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property integer $id_pembayaran
 * @property string $id_pendaftaran
 * @property string $nama
 * @property string $tgl_pembayaran
 * @property string $jumlah
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pendaftaran', 'nama', 'tgl_pembayaran', 'jumlah'], 'required'],
            [['tgl_pembayaran'], 'safe'],
            [['id_pendaftaran'], 'string', 'max' => 50],
            [['nama'], 'string', 'max' => 255],
            [['jumlah'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pembayaran' => 'Id Pembayaran',
            'id_pendaftaran' => 'Id Pendaftaran',
            'nama' => 'Nama',
            'tgl_pembayaran' => 'Tgl Pembayaran',
            'jumlah' => 'Jumlah',
        ];
    }
}
