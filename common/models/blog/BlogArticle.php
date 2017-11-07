<?php

namespace common\models\blog;

use Yii;

/**
 * This is the model class for table "blog_article".
 *
 * @property integer $id
 * @property string $title
 * @property string $category_id
 * @property string $keywords
 * @property string $decription
 * @property integer $type
 * @property integer $is_show
 * @property integer $is_recommend
 * @property integer $is_delete
 * @property string $create_time
 * @property string $update_time
 */
class BlogArticle extends \yii\db\ActiveRecord
{
	const SHOW = '1';
	const NOT_SHOW = '0';

	const DELETE = '1';
	const NOT_DELETE = '0';

	const ARTICLE_TYPE_BLOG = 1;
	const ARTICLE_TYPE_ABOUT_ME = 2;

	const RECOMMEND = 1;
	const NOT_RECOMMEND = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_show', 'title','keywords'], 'required'],
            [['id', 'category_id','is_show', 'is_delete', 'is_recommend', 'type'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['title', 'keywords', 'decription'], 'string', 'max' => 150],
            [['decription'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category_id' => 'Category Id',
            'keywords' => 'Keywords',
            'decription' => 'Decription',
            'type' => 'Type',
            'is_show' => 'Is Show',
            'is_recommend' => 'Is Recommend',
            'is_delete' => 'Is Delete',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }

	/**
	 * 获取分类
	 *
	 * @return \yii\db\ActiveQuery
	 */
    public function getCategory()
    {
    	return $this->hasOne(BlogCategory::className(),['id'=>'category_id']);
    }

	/**
	 * 获取文章内容
	 *
	 * @return \yii\db\ActiveQuery
	 */
    public function getArticleExtend()
    {
    	return $this->hasOne(BlogArticleExtend::className(),['article_id'=>'id']);
    }
}
