<?php 
/**
* Format class
*/
class Format 
{
	
	public function formatdate($date){
    return date('F j,Y,g:i a',strtotime($date));
	}
	public function textShorten($text,$limit = 300){
    $text = $text." ";
    $text = substr($text,0,$limit);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."....";
    return $text;
	}
    public function validation($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
 ?>