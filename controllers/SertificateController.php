<?php

namespace app\controllers;

use app\models\Announcements;
use app\models\FavoriteAnnouncements;
use yii\web\Controller;



class SertificateController extends Controller
{


    public function actionIndex()
    {

        return $this->render('index');

    }




}
