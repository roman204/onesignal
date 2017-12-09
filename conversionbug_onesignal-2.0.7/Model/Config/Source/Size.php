<?php
/**
 *
 * @category   Marketing
 * @package    ConversionBug_Onesignal
 * @author     shiv kumar singh <shivam.kumar@conversionbug.com>
 * @website    http://www.conversionbug.com/
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace ConversionBug\Onesignal\Model\Config\Source;

class Size implements \Magento\Framework\Option\ArrayInterface
{


    public function toOptionArray()
    {

        return array(
            array('value' => 'small', 'label'=>'small'),
            array('value' => 'medium', 'label'=>'medium'),
            array('value' => 'large', 'label'=>'large'),
        );
    }

}