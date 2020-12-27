<?php

namespace app\models;

use Yii;
use yii\base\Models;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "pendaftaran".
 *
 * @property integer $id_pendaftaran
 * @property string $nama
 * @property string $alamat
 * @property string $email
 * @property string $tgl_pendaftaran
 * @property string $status_pendaftaran
 */
class Pendaftaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pendaftaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'email', 'tgl_pendaftaran','status_pendaftaran'], 'required'],
            [['tgl_pendaftaran'], 'safe'],
            [['nama', 'status_pendaftaran'], 'string', 'max' => 150],
            [['alamat', 'email'], 'string', 'max' => 255],
			['email','email']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pendaftaran' => 'Id Pendaftaran',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'tgl_pendaftaran' => 'Tgl Pendaftaran',
            'status_pendaftaran' => 'Status Pendaftaran',
        ];
    }
	
	public function dataStatus(){
		return [
		1=> 'Belum melakukan pembayaran',
		];
}


	/*public function labelStatus(){
		if($this->statuspendaftaran==0){
			return 'Belum melakukan pembayaran';
		}
		else {
			return 'Unknown';
		}
	}*/
	
	public function dataAlamat(){
		return [
		'Babat' => 'Babat',
		'Bluluk' => 'Bluluk',
		'Brondong' => 'Brondong',
		'Deket' => 'Deket',
		'Glagah' => 'Glagah',
		'Kalitengah' => 'Kalitengah',
		'Karangbinangun' => 'Karangbinangun',
		'Karanggeneng' => 'Karanggeneng',
		'Kedungpring' => 'Kedungpring',
		'Kembangbahu' => 'Kembangbahu',
		'Lamongan' => 'Lamongan',
		'Laren' => 'Laren',
		'Maduran' => 'Maduran',
		'Mantup' => 'Mantup',
		'Modo' => 'Modo',
		'Ngimbang' => 'Ngimbang',
		'Paciran' => 'Paciran',
		'Pucuk' => 'Pucuk',
		'Sambeng' => 'Sambeng',
		'Sarirejo' => 'Sarirejo',
		'Sekaran' => 'Sekaran',
		'Solokuro' => 'Solokuro',
		'Sugio' => 'Sugio',
		'Sukodadi' => 'Sukodadi',
		'Sukorame' => 'Sukorame',
		'Tikung' => 'Tikung',
		'Turi' => 'Turi'
		];
	}
	
}