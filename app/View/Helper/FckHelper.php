<?php
App::import('Vendor', 'fckeditor');

class FckHelper extends AppHelper { 
               
    /**
    * creates an fckeditor textarea
    * 
    * @param array $namepair - used to build textarea name for views, array('Model', 'fieldname')
    * @param stirng $basepath - base path of project/system
    * @param string $content
    */
    function fckeditor($namepair = array(), $basepath = '', $content = array()){
        $editor_name = 'data';
        foreach ($namepair as $name){
            $editor_name .= "[" . $name . "]";
        }

        $oFCKeditor = new FCKeditor($editor_name) ;
        $oFCKeditor->BasePath = $basepath . '/js/fckeditor/' ;
        $oFCKeditor->Value = $content ;
        $oFCKeditor->Width = "100%";
        $oFCKeditor->Height = "400";
        $oFCKeditor->Create() ;            
    }      
}  
?>
