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
 * Trustpilot TrustBox Widget
 *
 * @category   Theextensionlab
 * @package    Theextensionlab_Trustpilot
 * @author     James Anelay <jamesanelay@theextensionlab.com>
 */

class Theextensionlab_Trustpilot_Block_Widget_Trustbox
    extends Theextensionlab_Trustpilot_Block_Feed
    implements Mage_Widget_Block_Interface
{

    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml()
    {
        return parent::_toHtml();
    }

    /**
     * Get widget feed url
     *
     * @return mixed
     */
    public function getFeedUrl()
    {
        $feedUrl = $this->getData('feed_url');

        if ($feedUrl) {
            return $feedUrl;
        }

        return parent::getFeedUrl();
    }

    /**
     * Get review section height
     *
     * @return mixed
     */
    public function getReviewSectionHeight()
    {
        $reviewSectionHeight = $this->getData('review_section_height');

        if ($reviewSectionHeight) {
            return $reviewSectionHeight;
        }

        return parent::getReviewSectionHeight();
    }


    /**
     * Get height type. e.g fixed or dynamic
     *
     * @return mixed
     */
    public function getHeightType()
    {
        $heightType = $this->getData('height_type');

        if ($heightType == 'default') {
            return parent::getHeightType();
        }

        return $heightType;
    }

    /**
     * Get if the header section is set to be visible or not
     *
     * @return int|mixed
     */
    public function getCanShowHeader()
    {
        $showHeader = $this->getData('show_header');

        if ($showHeader == "no") {
            return 0;
        }

        if ($showHeader == "yes") {
            return 1;
        }

        return parent::getCanShowHeader();
    }

    /**
     * Get if the reviews section is set to be visible or not
     *
     * @return int|mixed
     */
    public function getCanShowReviews()
    {
        $showReviews = $this->getData('show_reviews');

        if ($showReviews == "no") {
            return 0;
        }

        if ($showReviews == "yes") {
            return 1;
        }

        return parent::getCanShowReviews();
    }

    /**
     * Get if the feed is set to show user images or not.
     *
     * @return int|mixed
     */
    public function getCanShowUserImages()
    {
        $showUserImages = $this->getData('show_user_images');

        if ($showUserImages == "no") {
            return 0;
        }

        if ($showUserImages == "yes") {
            return 1;
        }

        return parent::getCanShowUserImages();
    }

    /**
     * Get amount of reviews
     *
     * @return int|mixed
     */
    public function getCanShowAmountOfReviewsText()
    {
        $showAmtOfReviews = $this->getData('show_amount_of_reviews_text');

        if ($showAmtOfReviews == "no") {
            return 0;
        }

        if ($showAmtOfReviews == "yes") {
            return 1;
        }

        return parent::getCanShowAmountOfReviewsText();
    }

    /**
     * Get if the date the review was submitted is set to be visible or not
     *
     * @return int|mixed
     */
    public function getCanShowDate()
    {
        $showDate = $this->getData('show_date');

        if ($showDate == "no") {
            return 0;
        }

        if ($showDate == "yes") {
            return 1;
        }

        return parent::getCanShowDate();
    }

    /**
     * Get if the company rating text e.g "Excellent" is set to be visible or not
     *
     * @return int|mixed
     */
    public function getCanShowCompanyRatingAsText()
    {
        $showRatingAsText = $this->getData('show_company_rating_as_text');

        if ($showRatingAsText == "no") {
            return 0;
        }

        if ($showRatingAsText == "yes") {
            return 1;
        }

        return parent::getCanShowCompanyRatingAsText();
    }
};