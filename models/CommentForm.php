<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class CommentForm extends ActiveRecord{
  //
  // public $username;
  // public $text;
  // public $time;
  // public $date;

  public static function tableName(){
    return '{{comments}}';
  }

  public function rules(){
    return [
      [['username', 'text_comment'], 'required'],
      ['username','string', 'length' => [2,15] ],
      ['text_comment', 'string', 'length' => [5,1000] ],
    ];
  }

  public function attributeLabels(){
    return [
      'username' => 'Ваше имя',
      'text_comment' => 'Ваш комментарий',
    ];
  }

  public function get_comments(){
    return $comments = CommentForm::find()->orderBy([
      'date_comment' => SORT_DESC,
      'time_comment' => SORT_DESC
    ])->all();
  }

}
?>
