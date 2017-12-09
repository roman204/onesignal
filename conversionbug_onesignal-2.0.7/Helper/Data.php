<?php
namespace ConversionBug\Onesignal\Helper;

/**
 * Utility Helper
 *
 * @category   Marketing
 * @package    ConversionBug_Onesignal
 * @author     shiv kumar singh <shivam.kumar@conversionbug.com>
 * @website    http://www.conversionbug.com/
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

	const XML_CONFIG_PATH_ONESIGNAL_ENABLED = 'onesignal/general/status';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_SSL = 'onesignal/general/ssl';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_SUBDOMAIN = 'onesignal/general/subdomain';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_GCM = 'onesignal/general/gcm';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_AUTOREGISTER = 'onesignal/general/autoregister';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_NOTIFYBUTTON = 'onesignal/general/notifybutton';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_APPID = 'onesignal/general/appid';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_SAFARI_WEB_ID = 'onesignal/general/safari_web_id';
	const XML_CONFIG_PATH_ONESIGNAL_ICON_SIZE = 'onesignal/icon/size';
	const XML_CONFIG_PATH_ONESIGNAL_ICON_POSITION = 'onesignal/icon/position';
	const XML_CONFIG_PATH_ONESIGNAL_ICON_LEFT = 'onesignal/icon/left';
	const XML_CONFIG_PATH_ONESIGNAL_ICON_RIGHT = 'onesignal/icon/right';
	const XML_CONFIG_PATH_ONESIGNAL_ICON_THEME = 'onesignal/icon/theme';
	const XML_CONFIG_PATH_ONESIGNAL_ICON_PRENOTIFY = 'onesignal/icon/prenotify';
	const XML_CONFIG_PATH_ONESIGNAL_COLOR_CIRCLE_BACKGROUND = 'onesignal/color/circle_background';
	const XML_CONFIG_PATH_ONESIGNAL_COLOR_CIRCLE_FOREGROUND = 'onesignal/color/circle_foreground';
	const XML_CONFIG_PATH_ONESIGNAL_COLOR_BADGE_FOREGROUND = 'onesignal/color/badge_foreground';
	const XML_CONFIG_PATH_ONESIGNAL_COLOR_BADGE_BORDERCOLOR = 'onesignal/color/badge_bordercolor';
	const XML_CONFIG_PATH_ONESIGNAL_COLOR_BADGE_BACKGROUND = 'onesignal/color/badge_background';
	const XML_CONFIG_PATH_ONESIGNAL_COLOR_PULSE_COLOR = 'onesignal/color/pulse_color';
	const XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_HOVERING = 'onesignal/color/dialog_hovering';
	const XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_ACTIVE = 'onesignal/color/dialog_active';
	const XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_BACKGROUND = 'onesignal/color/dialog_background';
	const XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_FOREGROUND = 'onesignal/color/dialog_foreground';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_TIP_STATE_UNSUBSCRIBED = 'onesignal/text/tip_state_unsubscribed';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_TIP_STATE_SUBSCRIBED = 'onesignal/text/tip_state_subscribed';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_TIP_STATE_BLOCKED = 'onesignal/text/tip_state_blocked';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_PRENOTIFY = 'onesignal/text/message_prenotify';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_ACTION_SUBSCRIBED = 'onesignal/text/message_action_subscribed';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_ACTION_RESUBSCRIBED = 'onesignal/text/message_action_resubscribed';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_ACTION_UNSUBSCRIBED = 'onesignal/text/message_action_unsubscribed';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_MAIN_TITLE = 'onesignal/text/dialog_main_title';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_MAIN_BUTTON_SUBSCRIBE = 'onesignal/text/dialog_main_button_subscribe';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_MAIN_BUTTON_UNSUBSCRIBE = 'onesignal/text/dialog_main_button_unsubscribe';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_BLOCKED_MESSAGE = 'onesignal/text/dialog_blocked_message';
	const XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_BLOCKED_TITLE = 'onesignal/text/dialog_blocked_title';
	const XML_CONFIG_PATH_ONESIGNAL_PROMPT_ACTIONMESSAGE = 'onesignal/prompt/actionmessage';
	const XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONTITLEDESKTOP = 'onesignal/prompt/examplenotificationtitledesktop';

	const XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONMESSAGEDESKTOP = 'onesignal/prompt/examplenotificationmessagedesktop';
	const XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONTITLEMOBILE = 'onesignal/prompt/examplenotificationtitlemobile';
	const XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONMESSAGEMOBILE = 'onesignal/prompt/examplenotificationmessagemobile';
	const XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONCAPTION = 'onesignal/prompt/examplenotificationcaption';
	const XML_CONFIG_PATH_ONESIGNAL_PROMPT_ACCEPTBUTTONTEXT = 'onesignal/prompt/acceptbuttontext';
	const XML_CONFIG_PATH_ONESIGNAL_PROMPT_CANCELBUTTONTEXT = 'onesignal/prompt/cancelbuttontext';
	const ONESIGNAL_ENABLED = 1;

//for sending push notification
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_TITLE = 'onesignalpush/general/title';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_CONTENT = 'onesignalpush/general/content';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_HEADING = 'onesignalpush/general/headings';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_CHROMEWEBICON = 'onesignalpush/general/chrome_web_icon';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_FIREFOX_ICON = 'onesignalpush/general/firefox_icon';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_URL = 'onesignalpush/general/url';
	const XML_CONFIG_PATH_ONESIGNAL_GENERAL_RESTAPIKEY = 'onesignalpush/general/rest_api_key';


	/**
	 * Check if enabled
	 *
	 * @return string|1|0
	 */
	public function isEnabled()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_ENABLED,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * check for ssl enable
	 *
	 * @return string|1|0
	 */
	public function isSslEnabled()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_SSL,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * get Subdomain name
	 *
	 * @return string|null
	 */
	public function getSubdomainName()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_SUBDOMAIN,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * get GCM
	 *
	 * @return string|null
	 */
	public function getGCM()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_GCM,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * is autoregister enabled
	 *
	 * @return string|1|0
	 */
	public function isAutoRegisterEnabled()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_AUTOREGISTER,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * is notifybutton enabled
	 *
	 * @return string|1|0
	 */
	public function isNotifyButtonEnabled()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_NOTIFYBUTTON,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * get App Id
	 *
	 * @return string|null
	 */
	public function getAppId()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_APPID,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * get SAFARI WEB ID
	 *
	 * @return string|null
	 */
	public function getSafariWebId()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_SAFARI_WEB_ID,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * get Icon Size
	 *
	 * @return string|null
	 */
	public function getIconSize()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_ICON_SIZE,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * get Icon Position
	 *
	 * @return string|null
	 */
	public function getIconPosition()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_ICON_POSITION,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * get Icon left in px
	 *
	 * @return string|null
	 */
	public function getIconLeft()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_ICON_LEFT,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * get Icon right in px
	 *
	 * @return string|null
	 */
	public function getIconRight()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_ICON_RIGHT,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * get Icon Theme
	 *
	 * @return string|null
	 */
	public function getIconTheme()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_ICON_THEME,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * check to show prenotify icon with 1 message
	 *
	 * @return string|null
	 */
	public function isPrenotify()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_ICON_PRENOTIFY,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}


	/**
	 * getColorCircleBackground
	 *
	 * @return string|null
	 */
	public function getColorCircleBackground()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_COLOR_CIRCLE_BACKGROUND,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getColorCircleForeground
	 *
	 * @return string|null
	 */
	public function getColorCircleForeground()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_COLOR_CIRCLE_FOREGROUND,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getColorBadgeForeground
	 *
	 * @return string|null
	 */
	public function getColorBadgeForeground()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_COLOR_BADGE_FOREGROUND,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getColorBadgeBorderColor
	 *
	 * @return string|null
	 */
	public function getColorBadgeBorderColor()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_COLOR_BADGE_BORDERCOLOR,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getColorBadgeBackground
	 *
	 * @return string|null
	 */
	public function getColorBadgeBackground()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_COLOR_BADGE_BACKGROUND,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getColorPulseColor
	 *
	 * @return string|null
	 */
	public function getColorPulseColor()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_COLOR_PULSE_COLOR,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getColorDialogHovering
	 *
	 * @return string|null
	 */
	public function getColorDialogHovering()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_HOVERING,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getColorDialogActive
	 *
	 * @return string|null
	 */
	public function getColorDialogActive()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_ACTIVE,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getColorDialogBackground
	 *
	 * @return string|null
	 */
	public function getColorDialogBackground()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_BACKGROUND,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getColorDialogBackground
	 *
	 * @return string|null
	 */
	public function getColorDialogForeground()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_FOREGROUND,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getTextTipStateUnsubscribed
	 *
	 * @return string|null
	 */
	public function getTextTipStateUnsubscribed()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_TIP_STATE_UNSUBSCRIBED,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getTextTipStateSubscribed
	 *
	 * @return string|null
	 */
	public function getTextTipStateSubscribed()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_TIP_STATE_SUBSCRIBED,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getTextTipStateBlocked
	 *
	 * @return string|null
	 */
	public function getTextTipStateBlocked()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_TIP_STATE_BLOCKED,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getTextMessagePrenotify
	 *
	 * @return string|null
	 */
	public function getTextMessagePrenotify()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_PRENOTIFY,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getTextMessageActionSubscribed
	 *
	 * @return string|null
	 */
	public function getTextMessageActionSubscribed()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_ACTION_SUBSCRIBED,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}


	/**
	 * getTextMessageActionResubscribed
	 *
	 * @return string|null
	 */
	public function getTextMessageActionResubscribed()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_ACTION_RESUBSCRIBED,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getTextMessageActionUnsubscribed
	 *
	 * @return string|null
	 */
	public function getTextMessageActionUnsubscribed()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_ACTION_UNSUBSCRIBED,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getTextDialogMainTitle
	 *
	 * @return string|null
	 */
	public function getTextDialogMainTitle()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_MAIN_TITLE,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getTextDialogMainButtonSubscribe
	 *
	 * @return string|null
	 */
	public function getTextDialogMainButtonSubscribe()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_MAIN_BUTTON_SUBSCRIBE,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getTextDialogMainButtonUnsubscribe
	 *
	 * @return string|null
	 */
	public function getTextDialogMainButtonUnsubscribe()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_MAIN_BUTTON_UNSUBSCRIBE,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getTextDialogBlockedMessage
	 *
	 * @return string|null
	 */
	public function getTextDialogBlockedMessage()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_BLOCKED_MESSAGE,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getTextDialogBlockedTitle
	 *
	 * @return string|null
	 */
	public function getTextDialogBlockedTitle()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_BLOCKED_TITLE,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalPromptActionMessage
	 *
	 * @return string|null
	 */
	public function getOnesignalPromptActionMessage()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_PROMPT_ACTIONMESSAGE,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalPromptExampleNotificationTitleDesktop
	 *
	 * @return string|null
	 */
	public function getOnesignalPromptExampleNotificationTitleDesktop()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONTITLEDESKTOP,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalPromptExampleNotificationMessageDesktop
	 *
	 * @return string|null
	 */
	public function getOnesignalPromptExampleNotificationMessageDesktop()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONMESSAGEDESKTOP,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalPromptExampleNotificationMessageMobile
	 *
	 * @return string|null
	 */
	public function getOnesignalPromptExampleNotificationMessageMobile()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONMESSAGEMOBILE,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}


	/**
	 * getOnesignalPromptExampleNotificationTitleMobile
	 *
	 * @return string|null
	 */
	public function getOnesignalPromptExampleNotificationTitleMobile()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONTITLEMOBILE,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalPromptExampleNotificationCaption
	 *
	 * @return string|null
	 */
	public function getOnesignalPromptExampleNotificationCaption()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONCAPTION,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalPromptAcceptbuttontext
	 *
	 * @return string|null
	 */
	public function getOnesignalPromptAcceptbuttontext()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_PROMPT_ACCEPTBUTTONTEXT,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalPromptCancelbuttontext
	 *
	 * @return string|null
	 */
	public function getOnesignalPromptCancelbuttontext()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_PROMPT_CANCELBUTTONTEXT,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalGeneralTitle
	 *
	 * @return string|null
	 */
	public function getOnesignalGeneralTitle()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_TITLE,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalGeneralContent
	 *
	 * @return string|null
	 */
	public function getOnesignalGeneralContent()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_CONTENT,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalGeneralHeading
	 *
	 * @return string|null
	 */
	public function getOnesignalGeneralHeading()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_HEADING,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalGeneralChromewebicon
	 *
	 * @return string|null
	 */
	public function getOnesignalGeneralChromewebicon()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_CHROMEWEBICON,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalGeneralfirefoxicon
	 *
	 * @return string|null
	 */
	public function getOnesignalGeneralfirefoxicon()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_FIREFOX_ICON,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalGeneralUrl
	 *
	 * @return string|null
	 */
	public function getOnesignalGeneralUrl()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_URL,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	/**
	 * getOnesignalGeneralRestapikey
	 *
	 * @return string|null
	 */
	public function getOnesignalGeneralRestapikey()
	{
		return $this->scopeConfig->getValue(
			self::XML_CONFIG_PATH_ONESIGNAL_GENERAL_RESTAPIKEY,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}


}