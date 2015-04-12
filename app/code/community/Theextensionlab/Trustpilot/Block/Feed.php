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

    public function getReviewsFeed()
    {
        try{

            $feedImporter = Mage::getModel(
                'theextensionlab_trustpilot/feed_importer'
            );

            if($this->hasFeedUrl()){
                $feedImporter->setFeedUrl($this->getFeedUrl());
            }

            $feedJson = $feedImporter->fetchFeed();

            return $feedJson;

        }
        catch (Exception $e) {
            Mage::log(
                $e->__toString(),
                Zend_Log::ERR,
                'TEL_trustpilot_exception.log'
            );
        }

        return false;
    }

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
        return Mage::getStoreConfig(
            'theextensionlab_trustpilot_settings/feed_advanced_settings/review_section_height'
        );
    }

    public function getReviewCount()
    {
        return Mage::getStoreConfig(
            'theextensionlab_trustpilot_settings/feed_fundamental/review_count'
        );
    }

    public function getCanShowHeader()
    {
        return Mage::getStoreConfig(
            'theextensionlab_trustpilot_settings/feed_basic_settings/show_header'
        );
    }

    public function getCanShowReviews()
    {
        return Mage::getStoreConfig(
            'theextensionlab_trustpilot_settings/feed_basic_settings/show_reviews'
        );
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
        return Mage::getStoreConfig(
            'theextensionlab_trustpilot_settings/feed_advanced_settings/show_date'
        );
    }

    public function getHeightType()
    {
        return Mage::getStoreConfig(
            'theextensionlab_trustpilot_settings/feed_advanced_settings/height_type'
        );
    }

    public function getReviewCharacterLimit()
    {
        return Mage::getStoreConfig(
            'theextensionlab_trustpilot_settings/feed_advanced_settings/review_character_limit'
        );
    }
}