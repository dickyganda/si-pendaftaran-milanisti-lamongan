<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pendaftaran;

/**
 * PendaftaranSearch represents the model behind the search form about `app\models\Pendaftaran`.
 */
class PendaftaranSearch extends Pendaftaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pendaftaran'], 'integer'],
            [['nama', 'alamat', 'email', 'tgl_pendaftaran', 'status_pendaftaran'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pendaftaran::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_pendaftaran' => $this->id_pendaftaran,
            'tgl_pendaftaran' => $this->tgl_pendaftaran,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'status_pendaftaran', $this->status_pendaftaran]);

        return $dataProvider;
    }
}
