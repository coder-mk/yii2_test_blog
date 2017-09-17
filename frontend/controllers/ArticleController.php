<?php
namespace frontend\controllers;

use common\models\Article;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

/**
 * Site controller
 */
class ArticleController extends Controller
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
        $articles = Article::find()->andWhere(['status'=>1]);

        $dataProvider = new ActiveDataProvider([
            'query' => $articles,
            'pagination' => [
                'pageSize' => 2,
            ],
        ]);

        return $this->render('all', ['dataProvider'=>$dataProvider]);    
    }

    public function actionSingle($link)
    {
        if( $article = Article::find()->andWhere(['link'=>$link])->one() ){
            return $this->render('single', ['article'=>$article]);
        }
        throw new NotFoundHttpException('Такой записи нет');   
    }

 
}
