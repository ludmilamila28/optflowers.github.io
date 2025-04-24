<?php

namespace app\controllers\user;

use app\models\Announcements;
use app\models\Auth;
use app\models\Customer;
use app\models\Feedback;
use app\models\Order;
use app\models\UserInfo;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Users;



class HomeController extends Controller
{


    public function actionIndex()
    {
        if(!Auth::isUser()){
            return $this->redirect('/user/login');
        }

        $user = Yii::$app -> session -> get('user');
        $user_id = $user -> id;

        return $this->render('index', compact('user'));
    }


    public function actionInfo()
    {
        if(!Auth::isUser()){
            return $this->redirect('/user/login');
        }

        $user = Yii::$app -> session -> get('user');
        $user_id = $user -> id;

        $user_info = UserInfo::find()->where(['user_id' => $user_id])->one();

        if($user_info){
            $address = $user_info -> address;
        }else{
            $address = '';
        }
        if ($this->request->isPost) {
            if($user_info){
                $user_info -> address = $_POST['address'];
            }else{
                $user_info = new UserInfo();
                $user_info -> user_id = $user_id;
                $user_info -> address = $_POST['address'];
            }
            $user_info -> save();
            return $this -> refresh();
        }

        return $this->render('info', compact('user', 'address'));
    }

    public function actionOrders()
    {
        if(!Auth::isUser()){
            return $this->redirect('/user/login');
        }

        $user = Yii::$app -> session -> get('user');
        $user_id = $user -> id;

        $orders = Order::find()->where(['user_id' => $user_id])->all();

        return $this->render('orders', compact('user', 'orders'));
    }
}
