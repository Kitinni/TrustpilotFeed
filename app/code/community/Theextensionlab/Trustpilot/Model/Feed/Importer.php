<?php class Theextensionlab_Trustpilot_Model_Feed_Importer
{
    protected $_url;
    protected $_httpClient;

    public function __construct()
    {
        $this->_httpClient = new Varien_Http_Client();
        $this->_url = $this->_getConfigFeedUrl();
    }

    public function fetchFeed()
    {
        $responseBody = $this->_httpClient
            ->setUri($this->_url)
            ->request('GET')
            ->getBody();

        $json = json_decode($responseBody);

        return $json;
    }

    protected function _getConfigFeedUrl()
    {
        return Mage::getStoreConfig('theextensionlab_trustpilot_settings/feed_fundamental/feed_url');
    }

    public function setFeedUrl($url)
    {
        $this->_url = $url;
    }

}