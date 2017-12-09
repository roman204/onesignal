<?php
namespace ConversionBug\Onesignal\Block;

/**
 *
 * @category   Marketing
 * @package    ConversionBug_Onesignal
 * @author     shiv kumar singh <shivam.kumar@conversionbug.com>
 * @website    http://www.conversionbug.com/
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Onesignal extends \Magento\Framework\View\Element\Template
{
	/**
	 * @var \ConversionBug\Onesignal\Helper\Data $helper
	 */
	protected $_helper;

	/**
	 * @param \Magento\Framework\View\Element\Template\Context $context,
	 * @param \ConversionBug\Onesignal\Helper\Data $helper
	 */
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\ConversionBug\Onesignal\Helper\Data $helper
	) {
		$this->_helper = $helper;
		parent::__construct($context);
	}
	/**
	 * Check if enabled
	 *
	 * @return string|null
	 */
	public function getHelper()
	{
		return $this->_helper;
	}
}