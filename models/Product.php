<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\db\ActiveRecord;
use yii\imagine\Image;
use Imagine\Image\Box;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property string $content
 * @property string $short_content
 * @property integer $price
 * @property string $code
 * @property string $img
 * @property string $hit
 * @property string $new
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $keywords
 * @property string $description
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $image;
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'content', 'price', 'keywords', 'description'], 'required'],
            [['category_id', 'price'], 'integer'],
            [['content', 'short_content', 'code', 'hit', 'new', 'status'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
            [['img'], 'string', 'max' => 100],
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'category_id' => 'Категория',
            'name' => 'Название',
            'content' => 'Описание',
            'short_content' => 'Характеристики',
            'price' => 'Цена',
            'code' => 'Артикул',
            'img' => 'Изображения',
            'hit' => 'Хит',
            'new' => 'Новый',
            'status' => 'Наличие',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'keywords' => 'Теги',
            'description' => 'Описание тега',
        ];
    }

    public function saveImageFile($pathFile, $ext = Null, $prefix = Null){
        if($ext == null){
            $ext = '.png';
        }
        if($prefix == null){
            $prefix = 'product_';
        }
        $randName = "tghrheighweguwebhfghbhdbvbdvhbwhegiweg";
        $file = '';
        for($i=0;$i<5;$i++){
            $file .= rand(1, strlen($randName));
        }
        $image = Image::getImagine()->open($pathFile);
        $size = $image->getSize();
        $ratio =$size->getWidth()/$size->getHeight();
        $width = 1024;
        $height = round($width/$ratio);
        $box = new Box( 280,150);
        $image->resize($box)->save('web/uploads/images/products/'.$prefix.$file.$ext);
        return $prefix.$file.$ext;
    }
}
