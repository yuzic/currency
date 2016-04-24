<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Currency;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

    public function actionList()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $list = Currency::find()->with('currencyType')->all();
        $result = [];
        foreach ($list as $item) {

            $result[] = [
                'price' => $item['price'],
                'currency' => $item->currencyType->name,
                'date_at' => $item['date_at']
            ];
        }

        return $result;
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

  }
