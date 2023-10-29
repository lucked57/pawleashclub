<?php

    namespace app\models;

    use yii\db\ActiveRecord;
    use yii\web\UploadedFile;
    use app\components\Uservaludate;

    class Video extends ActiveRecord{

        
        public static function tableName(){
        return 'Video';
    }




    	public function attributeLabels(){
        
	        return [
	            'title_ru' => 'Название ru',
	            'text_ru' => 'Описание ru',
	            'title_ee' => 'Название ee',
	            'text_ee' => 'Описание ee',
	            'title_en' => 'Название en',
	            'text_en' => 'Описание en',
	            'video_link' => 'Ссылка на видео',
	        ];
        
    }



      public function rules()
    {
        return [
            [ ['title_ru'], 'required'],
            [ ['title_ru'], 'trim'],
            [ ['title_ee'], 'required'],
            [ ['title_ee'], 'trim'],
            [ ['title_en'], 'required'],
            [ ['title_en'], 'trim'],


            [ ['text_ru'], 'required'],
            [ ['text_ru'], 'trim'],
            [ ['text_ee'], 'required'],
            [ ['text_ee'], 'trim'],
            [ ['text_en'], 'required'],
            [ ['text_en'], 'trim'],

            [ ['video_link'], 'required'],
            [ ['video_link'], 'trim'],
        ];
    }



    public function add_video(){

    	$add_model = new Video();

    	$add_model->title_ru = Uservaludate::validateInput($this->title_ru);
    	$add_model->title_ee = Uservaludate::validateInput($this->title_ee);
    	$add_model->title_en = Uservaludate::validateInput($this->title_en);

    	$add_model->text_ru = Uservaludate::validateInput($this->text_ru);
    	$add_model->text_ee = Uservaludate::validateInput($this->text_ee);
    	$add_model->text_en = Uservaludate::validateInput($this->text_en);

    	$add_model->video_link = Uservaludate::validateInput($this->video_link);


    	$add_model->save();

    }


    public function delete_video($id){


    		$table = Video::find()->asArray()->where(['id' => $id])->one();

    		$table = Video::findone($id);
            
            $table->delete();
            
            
            
            return true;
    }

        
    }
