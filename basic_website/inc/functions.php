<?php 
// setting active menu item
function set_active_menu($section, $id){
    if($section && $id && strtolower($section) == strtolower($id)){
        return " on";
    }
}

function generate_catalog($catalog){
    foreach ($catalog as $item) {
       echo "<li><a href='#'><img src=" . $item['img'] . " alt=" . $item['title'] . "><p>View info</p></a></li>";
   }
}

?>