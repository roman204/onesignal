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

class Position implements \Magento\Framework\Option\ArrayInterface
{


    public function toOptionArray()
    {

        return array(
            array('value' => 'bottom-left', 'label'=>__('bottom-left')),
            array('value' => 'bottom-right', 'label'=>__('bottom-right')),
        );
    }

}