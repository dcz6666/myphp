<?php 
/**
*项目中的工厂类
*/
class Factory{
	/**
	*生产模型的单例对象
	*
	*@param $model_name string
	*@return object 
	*/
   pulic static function M($model_name){
        static $model_list=array();
        //存储已经实例化好的模型对象的列表，下表模型名，值模型对象
        //判断当前模型是否已经实例化
       if(isset($model_list[$model_name])){
       	
       }
   }
}

 ?>