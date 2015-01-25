<?php
App::uses('Util', 'Lib');
class Util {

    function __construct() {
        
    }
    
    public static function array_to_xml($student_info, &$xml_student_info) {
        foreach($student_info as $key => $value) {
            if(is_array($value)) {
                if(!is_numeric($key)){
                    $subnode = $xml_student_info->addChild("$key");
                    array_to_xml($value, $subnode);
                }
                else{
                    $subnode = $xml_student_info->addChild("item$key");
                    array_to_xml($value, $subnode);
                }
            }
            else {
                $xml_student_info->addChild("$key",htmlspecialchars("$value"));
            }
        }
    }

}