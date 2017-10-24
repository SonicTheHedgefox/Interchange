<?php
function interchange_process_page(&$variables) {     
   
 if (isset($variables['node']->type)) {
        $variables['theme_hook_suggestions'][]='page__'.$variables['node']->type;
    }
 
}
?>