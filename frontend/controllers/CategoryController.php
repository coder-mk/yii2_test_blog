<?php
namespace frontend\controllers;

use common\models\Category;
use common\models\Article;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

/**
 * Category controller
 */
class CategoryController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $category = Category::find()->all();
        return $this->render('all', ['category'=>$category]);    
    }

    public function actionSingle($url)
    {
        if( $category = Category::find()->andWhere(['id'=>$url])->one() ){
            $article = Article::find()->andWhere(['category_id'=>$category->id]);

            $dataProvider = new ActiveDataProvider([
                'query' => $article,
                'pagination' => [
                    'pageSize' => 10,
                ],
            ]);

            return $this->render('single', ['category'=>$category, 'dataProvider'=>$dataProvider]);
        }
        throw new NotFoundHttpException('Такой категории нет');   
    }

 
}
