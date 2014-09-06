
<?php
/**
 * The Extension Lab
 *
 * @category    Theextensionlab
 * @package     Theextensionlab_Trustpilot
 * @copyright   Copyright (c) 2014 The Extension Lab (http://www.theextensionlab.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author      James Anelay <jamesanelay@theextensionlab.com>
 */

class Theextensionlab_Trustpilot_Block_Feed extends Mage_Core_Block_Template
{
    public function getReviewsFeed(){
        try{
            // If PHP >= 5.4 we'll have gzdecode function, if PHP >= 4.0.1 we use gzuncompress
            if(!function_exists("gzdecode")) {
                function gzdecode($data) {
                    return gzuncompress($data);
                }
            }
            // Get the JSON feed and gzunpack
            $file = gzdecode( file_get_contents($this->getFeedUrl()) );
            // JSON decode the string
            $json = json_decode($file);

            return $json;
        }
        catch (Exception $e) {
            Mage::log($e->__toString(), Zend_Log::ERR, 'TEL_trustpilot_exception.log');
        }

        return false;
    }

    public function getReviewSectionStyle(){
        $height = Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_advanced_settings/review_section_height');

        if(!$height){
            return;
        }
        $style='style="';
        $style.='height:'.$height.'px;';
        $style.='"';

        return $style;
    }

    public function getFeedUrl(){
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_fundamental/feed_url');
    }

    public function getReviewCount(){
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_fundamental/review_count');
    }

    /**
     * @return mixed
     */
    public function getCanShowHeader(){
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_basic_settings/show_header');
    }

    /**
     * @return mixed
     */
    public function getCanShowReviews(){
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_basic_settings/show_reviews');
    }

    /**
     * @return mixed
     */
    public function getCanShowUserImages(){
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_advanced_settings/show_user_images');
    }

    /**
     * @return mixed
     */
    public function getCanShowCompanyRatingAsText(){
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_advanced_settings/show_company_rating_as_text');
    }

    /**
     * @return mixed
     */
    public function getCanShowAmountOfReviewsText(){
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_advanced_settings/show_amount_of_reviews_text');
    }

    /**
     * @return mixed
     */
    public function getCanShowDate(){
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_advanced_settings/show_date');
    }

    public function getHeightType(){
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_advanced_settings/height_type');
    }

    public function getReviewCharacterLimit(){
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_advanced_settings/review_character_limit');
    }
}