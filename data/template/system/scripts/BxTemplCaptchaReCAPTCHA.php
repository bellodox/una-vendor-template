<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) Company - https://example.com
 * 
 *
 * @defgroup    UnaTemplate UNA Template Classes
 * @{
 */

/**
 * @see BxDolCaptcha
 */
class BxTemplCaptchaReCAPTCHA extends BxBaseCaptchaReCAPTCHA
{
    public function __construct ($aObject, $oTemplate = false)
    {
        parent::__construct ($aObject, $oTemplate);
    }
}

/** @} */
