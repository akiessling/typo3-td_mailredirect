<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Core\Mail\MailMessage::class] = ['className' => \TechDivision\TdMailredirect\Xclass\Mail\MailMessage::class];