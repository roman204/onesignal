<?php
/**
 *
 * @category   Marketing
 * @package    ConversionBug_Onesignal
 * @author     shiv kumar singh <shivam.kumar@conversionbug.com>
 * @website    http://www.conversionbug.com/
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace ConversionBug\Onesignal\Observer;

use Magento\Framework\Event\ObserverInterface;

class Send implements ObserverInterface
{
    /**
     * @var \ConversionBug\Onesignal\Helper\Data $helper
     */
    protected $_helper;


    /**
     * @param \ConversionBug\Onesignal\Helper\Data $helper
     */
    public function __construct(
        \ConversionBug\Onesignal\Helper\Data $helper

    ) {
        $this->_helper = $helper;

    }

    /**
     * Send push notification
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if (!$this->_helper->isEnabled()){
            return;
        }
        $content = array(
            "en" => $this->_helper->getOnesignalGeneralContent()
        );

        $fields = array(
            'app_id' => $this->_helper->getAppId(),
            'included_segments' => array('All'),
            'contents' => $content,
            'headings' => array(
                "en" => $this->_helper->getOnesignalGeneralHeading()
            ),
//            'isAnyWeb' => Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_ISANYWEB),
            'chrome_web_icon' => $this->_helper->getOnesignalGeneralChromewebicon(),
            'firefox_icon' => $this->_helper->getOnesignalGeneralfirefoxicon(),
//            'isChromeWeb' => Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_ISCHROMEWEB),
//            'isSafari' => Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_ISSAFARI),
            'url' => $this->_helper->getOnesignalGeneralUrl(),

        );

        $fields = json_encode($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
            'Authorization: Basic '.$this->_helper->getOnesignalGeneralRestapikey()));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

       // Mage::log($response, null, 'onesignal.log');

        //return $this;
    }
}
