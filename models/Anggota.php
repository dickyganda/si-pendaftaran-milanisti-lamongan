<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property string $id_anggota
 * @property integer $id_pendaftaran
 * @property string $nama
 * @property string $email
 * @property string $alamat
 * @property string $tgl_pendaftaran
 * @property string $masa_aktif
 * @property string $status_anggota
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pendaftaran', 'nama', 'email', 'alamat', 'tgl_pendaftaran', 'masa_aktif', 'status_anggota'], 'required'],
            [['id_pendaftaran'], 'integer'],
            [['tgl_pendaftaran', 'masa_aktif'], 'safe'],
            [['nama'], 'string', 'max' => 255],
            [['email', 'alamat', 'status_anggota'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_anggota' => 'Id Anggota',
            'id_pendaftaran' => 'Id Pendaftaran',
            'nama' => 'Nama',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'tgl_pendaftaran' => 'Tgl Pendaftaran',
            'masa_aktif' => 'Masa Aktif',
            'status_anggota' => 'Status Anggota',
        ];
    }
}
