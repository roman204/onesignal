<?php
/**
 *
 * @category   Marketing
 * @package    ConversionBug_Onesignal
 * @author     shiv kumar singh <shivam.kumar@conversionbug.com>
 * @website    http://www.conversionbug.com/
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace ConversionBug\Onesignal\Model;

class Json extends \Magento\Framework\App\Config\Value
{

    /**
     * Validate custom url
     *
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function afterSave()
    {
        $gcm = $this->getValue(); //get the value from our config
        $jsonData = array('name' => 'magento2', 'short_name' =>'magento2','start_url'=>"/",'display'=>'standalone','gcm_sender_id'=>$gcm);
        $onesignalData  = json_encode($jsonData);

        file_put_contents($this->getBaseUrl().'manifest.json', $onesignalData);
        $sdkWorker = "importScripts('https://cdn.onesignal.com/sdks/OneSignalSDK.js');";
        file_put_contents($this->getBaseUrl().'OneSignalSDKWorker.js', $sdkWorker);
        $sdkUpdateWorker = "importScripts('https://cdn.onesignal.com/sdks/OneSignalSDK.js');";
        file_put_contents($this->getBaseUrl().'OneSignalSDKUpdaterWorker.js', $sdkUpdateWorker);
        //return parent::save();  //call original save method so whatever happened
        return $this;
    }
}
