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
 * Trait for Artery.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Artery
 */

trait ArteryTrait
{
    
    /**
     * The area to which the artery supplies blood.
     *
     * @var AnatomicalStructure
     */
    public $supplyTo;

    /**
     * The branches that comprise the arterial structure.
     *
     * @var AnatomicalStructure
     */
    public $arterialBranch;

}
