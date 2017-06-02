<?php 

function set_active_menu($section, $id){
    
    if($section && $id && strtolower($section) == strtolower($id)){
        return " on";
    }
}

?>