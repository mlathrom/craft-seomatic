<?php
/**
 * SEOmatic plugin for Craft CMS 3
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2022 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

/**
 * schema.org version: v14.0-release
 * Trait for CategoryCode.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/CategoryCode
 */

trait CategoryCodeTrait
{
    
    /**
     * A short textual code that uniquely identifies the value.
     *
     * @var string|Text
     */
    public $codeValue;

    /**
     * A [[CategoryCodeSet]] that contains this category code.
     *
     * @var CategoryCodeSet|URL
     */
    public $inCodeSet;

}
