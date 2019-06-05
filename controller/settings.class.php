<?php

class SettingsClass
{


    function getSetting($name){
 //if(!$PAGE_CLASS -> isAdmin($PAGE_CLASS -> getPageInfo($page_srl)['permission'])) return false;

return Model_Settings_getSettingByName($name);
    }


}
      
?>