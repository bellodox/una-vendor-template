<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) Company - https://example.com
 * 
 *
 * @defgroup    UnaTemplate UNA Template Classes
 * @{
 */

/**
 * @see BxDolUploader
 */
class BxTemplUploaderSimple extends BxBaseUploaderSimple
{
    function __construct($aObject, $sStorageObject, $sUniqId, $oTemplate)
    {
        parent::__construct($aObject, $sStorageObject, $sUniqId, $oTemplate);
    }
}

/** @} */
