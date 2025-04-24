<?php

namespace app\controllers;

use app\models\Announcements;
use app\models\FavoriteAnnouncements;
use yii\web\Controller;
use app\models\Auth;
use app\models\Cart;
use app\models\Order;
use Yii;


class CartController extends Controller
{


    public function actionIndex()
    {
        if(!Auth::isUser()){
            return $this->redirect('/user/login');
        }

        $user = Yii::$app -> session -> get('user');
        $user_id = $user -> id;

        $cart = Cart::getCurrentCart($user_id);

        if ($this->request->isPost) {

            $order = Order::findOne($_POST['order_id']);
            $order -> status = 'Оформлен';
            $order -> user_info_id = $_POST['user_info_id'];
            $order -> comment = $_POST['comment'];
            $order -> save();
            
            return $this->redirect('/user/home');

        }

        return $this->render('index', compact('user', 'cart'));

    }

    public function actionAdd($item_id)
    {
        if(!Auth::isUser()){
            return $this->redirect('/user/auth/login');
        }

        $user = Yii::$app -> session -> get('user');
        $user_id = $user -> id;

        Cart::add($item_id, $user_id);

        $cart = Cart::getCurrentCart($user_id);

        return $this->render('index', compact('user', 'cart'));

    }

    public function actionDel($item_id)
    {
        if(!Auth::isUser()){
            return $this->redirect('/user/auth/login');
        }

        $user = Yii::$app -> session -> get('user');
        $user_id = $user -> id;

        Cart::del($item_id, $user_id);

        $cart = Cart::getCurrentCart($user_id);

        return $this->render('index', compact('user', 'cart'));

    }

}
