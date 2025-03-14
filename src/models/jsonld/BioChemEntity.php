<?php

/**
 * SEOmatic plugin for Craft CMS 3
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful, and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2023 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\MetaJsonLd;

/**
 * schema.org version: v15.0-release
 * BioChemEntity - Any biological, chemical, or biochemical thing. For example: a protein; a
 * gene; a chemical; a synthetic chemical.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/BioChemEntity
 */
class BioChemEntity extends MetaJsonLd implements BioChemEntityInterface, ThingInterface
{
	use BioChemEntityTrait;
	use ThingTrait;

	/**
	 * The Schema.org Type Name
	 *
	 * @var string
	 */
	public static $schemaTypeName = 'BioChemEntity';

	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	public static $schemaTypeScope = 'https://schema.org/BioChemEntity';

	/**
	 * The Schema.org Type Extends
	 *
	 * @var string
	 */
	public static $schemaTypeExtends = 'Thing';

	/**
	 * The Schema.org Type Description
	 *
	 * @var string
	 */
	public static $schemaTypeDescription = 'Any biological, chemical, or biochemical thing. For example: a protein; a gene; a chemical; a synthetic chemical.';


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyNames(): array
	{
		return array_keys($this->getSchemaPropertyExpectedTypes());
	}


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyExpectedTypes(): array
	{
		return [
		    'additionalType' => ['URL'],
		    'alternateName' => ['Text'],
		    'associatedDisease' => ['MedicalCondition', 'URL', 'PropertyValue'],
		    'bioChemInteraction' => ['BioChemEntity'],
		    'bioChemSimilarity' => ['BioChemEntity'],
		    'biologicalRole' => ['DefinedTerm'],
		    'description' => ['Text'],
		    'disambiguatingDescription' => ['Text'],
		    'funding' => ['Grant'],
		    'hasBioChemEntityPart' => ['BioChemEntity'],
		    'hasMolecularFunction' => ['URL', 'DefinedTerm', 'PropertyValue'],
		    'hasRepresentation' => ['Text', 'URL', 'PropertyValue'],
		    'identifier' => ['PropertyValue', 'URL', 'Text'],
		    'image' => ['URL', 'ImageObject'],
		    'isEncodedByBioChemEntity' => ['Gene'],
		    'isInvolvedInBiologicalProcess' => ['DefinedTerm', 'PropertyValue', 'URL'],
		    'isLocatedInSubcellularLocation' => ['URL', 'DefinedTerm', 'PropertyValue'],
		    'isPartOfBioChemEntity' => ['BioChemEntity'],
		    'mainEntityOfPage' => ['URL', 'CreativeWork'],
		    'name' => ['Text'],
		    'potentialAction' => ['Action'],
		    'sameAs' => ['URL'],
		    'subjectOf' => ['Event', 'CreativeWork'],
		    'taxonomicRange' => ['URL', 'DefinedTerm', 'Text', 'Taxon'],
		    'url' => ['URL']
		];
	}


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyDescriptions(): array
	{
		return [
		    'additionalType' => 'An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the \'typeof\' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.',
		    'alternateName' => 'An alias for the item.',
		    'associatedDisease' => 'Disease associated to this BioChemEntity. Such disease can be a MedicalCondition or a URL. If you want to add an evidence supporting the association, please use PropertyValue.',
		    'bioChemInteraction' => 'A BioChemEntity that is known to interact with this item.',
		    'bioChemSimilarity' => 'A similar BioChemEntity, e.g., obtained by fingerprint similarity algorithms.',
		    'biologicalRole' => 'A role played by the BioChemEntity within a biological context.',
		    'description' => 'A description of the item.',
		    'disambiguatingDescription' => 'A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.',
		    'funding' => 'A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].',
		    'hasBioChemEntityPart' => 'Indicates a BioChemEntity that (in some sense) has this BioChemEntity as a part. ',
		    'hasMolecularFunction' => 'Molecular function performed by this BioChemEntity; please use PropertyValue if you want to include any evidence.',
		    'hasRepresentation' => 'A common representation such as a protein sequence or chemical structure for this entity. For images use schema.org/image.',
		    'identifier' => 'The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more details.         ',
		    'image' => 'An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].',
		    'isEncodedByBioChemEntity' => 'Another BioChemEntity encoding by this one.',
		    'isInvolvedInBiologicalProcess' => 'Biological process this BioChemEntity is involved in; please use PropertyValue if you want to include any evidence.',
		    'isLocatedInSubcellularLocation' => 'Subcellular location where this BioChemEntity is located; please use PropertyValue if you want to include any evidence.',
		    'isPartOfBioChemEntity' => 'Indicates a BioChemEntity that is (in some sense) a part of this BioChemEntity. ',
		    'mainEntityOfPage' => 'Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.',
		    'name' => 'The name of the item.',
		    'potentialAction' => 'Indicates a potential Action, which describes an idealized action in which this thing would play an \'object\' role.',
		    'sameAs' => 'URL of a reference Web page that unambiguously indicates the item\'s identity. E.g. the URL of the item\'s Wikipedia page, Wikidata entry, or official website.',
		    'subjectOf' => 'A CreativeWork or Event about this Thing.',
		    'taxonomicRange' => 'The taxonomic grouping of the organism that expresses, encodes, or in some way related to the BioChemEntity.',
		    'url' => 'URL of the item.'
		];
	}


	/**
	 * @inheritdoc
	 */
	public function getGoogleRequiredSchema(): array
	{
		return ['description', 'name'];
	}


	/**
	 * @inheritdoc
	 */
	public function getGoogleRecommendedSchema(): array
	{
		return ['image', 'url'];
	}


	/**
	 * @inheritdoc
	 */
	public function defineRules(): array
	{
		$rules = parent::defineRules();
		    $rules = array_merge($rules, [
		        [$this->getSchemaPropertyNames(), 'validateJsonSchema'],
		        [$this->getGoogleRequiredSchema(), 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
		        [$this->getGoogleRecommendedSchema(), 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
		    ]);

		    return $rules;
	}
}
