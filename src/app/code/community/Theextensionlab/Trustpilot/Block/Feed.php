<?php class Theextensionlab_Trustpilot_Block_Feed extends Mage_Core_Block_Template
{
    public function __construct(){

    }

    public function getReviewsFeed(){
        try{
            // If PHP >= 5.4 we'll have gzdecode function, if PHP >= 4.0.1 we use gzuncompress
            if(!function_exists("gzdecode")) {
                function gzdecode($data) {
                    return gzuncompress($data);
                }
            }
            // Get the JSON feed and gzunpack
            $file = gzdecode( file_get_contents("http://s.trustpilot.com/tpelements/917278/f.json.gz") );
            // JSON decode the string
            $json = json_decode($file);

            return $json;
        }
        catch (Exception $e) {
            Mage::log($e->__toString(), Zend_Log::ERR, 'TEL_trustpilot_exception.log');
        }

        return false;
    }
}