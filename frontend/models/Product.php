<?php

namespace frontend\models;

use Yii;
use common\models\User;
use yii\web\UploadedFile;
/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $pr_name
 * @property integer $pr_sum
 * @property double $pr_price
 * @property string $image
 *
 * @property User $user
 */

class Product extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $dir;
    public $totalSum;
    public $totalCount;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['user_id', 'pr_name', 'pr_sum', 'pr_price'], 'required'],
            [['user_id', 'pr_sum'], 'integer'],
            [['pr_price'], 'number'],
            [['pr_name'], 'string', 'max' => 50],
            [['imageFile'], 'file', 'extensions' => 'png, jpg'],
//            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
//            [['image'], 'string', 'max' => 200]
           /* array('image, string', 'max'=>255),
            array('icon', 'file',
                'types'=>'jpg, gif, png',
                'maxSize'=>1024 * 1024 * 5, // 5 MB
                'allowEmpty'=>'true',
                'tooLarge'=>'Файл весит больше 5 MB. Пожалуйста, загрузите файл меньшего размера.',
            ),*/
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'ID продавца',
            'pr_name' => 'Название',
            'pr_sum' => 'Количество едениц',
            'pr_price' => 'Цена за еденицу, руб.',
            'image' => 'Изображение',
            'imageFile'=>'Изображение товара'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function upload()
    {
//        var_dump($_FILES);
        $this->dir=Yii::$app->basePath.'/web/uploads/'.$this->imageFile->baseName . '.' . $this->imageFile->extension;

        /*$this->imageFile->saveAs($dir);
        return true;*/
        $this->imageFile->saveAs($this->dir);
       /* if ($this->validate()) {
            $this->imageFile->saveAs($this->dir);
            var_dump($_FILES);
            return true;
        } else {
            return false;
        }*/
    }
}
