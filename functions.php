<?php
    
    // trim strig_tag for post
    function trim_stag_post($val_form)
    {
        echo trim(strip_tags($_POST[$val_form]));
    };
?>