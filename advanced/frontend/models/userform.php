<?php
namespace app\models;

use yii\base\model;

class userform extends model
{
    public $name;
    public $email;
     public function rules()
     {
         return[
             [['name','email'],'required'],['email','email']
         ];
     }
}
