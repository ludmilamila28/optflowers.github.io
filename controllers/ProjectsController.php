<?php

namespace app\controllers;

use app\models\Announcements;
use app\models\FavoriteAnnouncements;
use yii\web\Controller;



class ProjectsController extends Controller
{


    public function actionIndex($cat = null)
    {
        
        return $this->render('index');

    }




}
