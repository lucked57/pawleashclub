<?php

    namespace app\models;

    use yii\db\ActiveRecord;

    class SelectPost extends ActiveRecord{

        
        public static function tableName(){
        return 'posts_paw';
    }
        
    }
