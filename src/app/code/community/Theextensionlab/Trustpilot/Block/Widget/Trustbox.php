<?php class Theextensionlab_Trustpilot_Block_Widget_Trustbox
    extends Theextensionlab_Trustpilot_Block_Feed
    implements Mage_Widget_Block_Interface{

    /**
     * Render block HTML
     * or return empty string if url can't be prepared
     *
     * @return string
     */
    protected function _toHtml()
    {
        return parent::_toHtml();
    }

    public function getFeedUrl(){
        $feedUrl = $this->getData('feed_url');

        if($feedUrl){
            return $feedUrl;
        }

        return parent::getFeedUrl();
    }

    public function getCanShowHeader(){
        $showHeader = $this->getData('show_header');

        if($showHeader == "no"){
            return 0;
        }

        if($showHeader == "yes"){
            return 1;
        }

        return parent::getCanShowHeader();
    }


    public function getCanShowReviews(){
        $showReviews = $this->getData('show_reviews');

        if($showReviews == "no"){
            return 0;
        }

        if($showReviews == "yes"){
            return 1;
        }

        return parent::getCanShowReviews();
    }

    };
?>