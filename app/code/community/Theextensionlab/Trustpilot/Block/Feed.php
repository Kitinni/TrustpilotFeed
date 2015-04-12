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


/**
 * Trustpilot TrustBox Block
 *
 * @category   Theextensionlab
 * @package    Theextensionlab_Trustpilot
 * @author     James Anelay <jamesanelay@theextensionlab.com>
 */

class Theextensionlab_Trustpilot_Block_Feed extends Mage_Core_Block_Template
{

    /**
     * Gets the whole reviews feed from trustpilot.
     *
     * @return bool|mixed
     */
    public function getReviewsFeed()
    {
        try{
            if(!$this->getFeedUrl()){
                return false;
            }

            // If PHP >= 5.4 we'll have gzdecode function, if PHP >= 4.0.1 we use gzuncompress
            if (!function_exists("gzdecode")) {
                function gzdecode($data)
                {
                    return gzinflate(substr($data,10,-8));
                }
            }
            // Get the JSON feed and gzunpack
            $file = gzdecode( $this->url_get_contents($this->getFeedUrl()) );
            // JSON decode the string
            $json = json_decode($file);

            return $json;
        }
        catch (Exception $e) {
            Mage::log($e->__toString(), Zend_Log::ERR, 'TEL_trustpilot_exception.log');
        }

        return false;
    }

    public function getJsonFeedContent(){

    }

    public function url_get_contents ($url) {
        try{
            if (!is_callable('curl_init')){
                if(ini_get('allow_url_fopen')){
                    return file_get_contents($url);
                }

                Mage::throwException('Please enabled curl or allow_url_fopen to allow Trustpilot_Trustbox to fetch the reviews feed.');
                return false;
            }
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $output = curl_exec($ch);
            curl_close($ch);

            return $output;
        }catch (Exception $e) {
            Mage::log($e->__toString(), Zend_Log::ERR, 'TEL_trustpilot_exception.log');
        }

        return false;
    }

    /**
     * Gets review styling - specificly the height if the height is set to be fixed.
     *
     * @return string
     */
    public function getReviewSectionStyle()
    {
        $height = $this->getReviewSectionHeight();

        if (!$height) {
            return;
        }
        $style='style="';
        $style.='height:'.$height.'px;';
        $style.='"';

        return $style;
    }

    public function getReviewSectionHeight()
    {
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_advanced_settings/review_section_height');
    }

    public function getFeedUrl()
    {
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_fundamental/feed_url');
    }

    public function getReviewCount()
    {
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_fundamental/review_count');
    }

    public function getCanShowHeader()
    {
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_basic_settings/show_header');
    }

    public function getCanShowReviews()
    {
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_basic_settings/show_reviews');
    }

    public function getCanShowUserImages()
    {
        return Mage::getStoreConfig(
            'theextensionlab_trustpilot_settings/feed_advanced_settings/show_user_images'
        );
    }

    public function getCanShowCompanyRatingAsText()
    {
        return Mage::getStoreConfig(
            'theextensionlab_trustpilot_settings/feed_advanced_settings/show_company_rating_as_text'
        );
    }

    public function getCanShowAmountOfReviewsText()
    {
        return Mage::getStoreConfig(
            'theextensionlab_trustpilot_settings/feed_advanced_settings/show_amount_of_reviews_text'
        );
    }

    public function getCanShowDate()
    {
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_advanced_settings/show_date');
    }

    public function getHeightType()
    {
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_advanced_settings/height_type');
    }

    public function getReviewCharacterLimit()
    {
        return Mage::getStoreConfig(
            'theextensionlab_trustpilot_settings/feed_advanced_settings/review_character_limit'
        );
    }
}