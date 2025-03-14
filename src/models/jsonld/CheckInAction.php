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
 * CheckInAction - The act of an agent communicating (service provider, social media, etc)
 * their arrival by registering/confirming for a previously reserved service
 * (e.g. flight check-in) or at a place (e.g. hotel), possibly resulting in a
 * result (boarding pass, etc).  Related actions:  * [[CheckOutAction]]: The
 * antonym of CheckInAction. * [[ArriveAction]]: Unlike ArriveAction,
 * CheckInAction implies that the agent is informing/confirming the start of a
 * previously reserved service. * [[ConfirmAction]]: Unlike ConfirmAction,
 * CheckInAction implies that the agent is informing/confirming the *start* of
 * a previously reserved service rather than its validity/existence.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/CheckInAction
 */
class CheckInAction extends MetaJsonLd implements CheckInActionInterface, CommunicateActionInterface, InteractActionInterface, ActionInterface, ThingInterface
{
	use CheckInActionTrait;
	use CommunicateActionTrait;
	use InteractActionTrait;
	use ActionTrait;
	use ThingTrait;

	/**
	 * The Schema.org Type Name
	 *
	 * @var string
	 */
	public static $schemaTypeName = 'CheckInAction';

	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	public static $schemaTypeScope = 'https://schema.org/CheckInAction';

	/**
	 * The Schema.org Type Extends
	 *
	 * @var string
	 */
	public static $schemaTypeExtends = 'CommunicateAction';

	/**
	 * The Schema.org Type Description
	 *
	 * @var string
	 */
	public static $schemaTypeDescription = 'The act of an agent communicating (service provider, social media, etc) their arrival by registering/confirming for a previously reserved service (e.g. flight check-in) or at a place (e.g. hotel), possibly resulting in a result (boarding pass, etc).\n\nRelated actions:\n\n* [[CheckOutAction]]: The antonym of CheckInAction.\n* [[ArriveAction]]: Unlike ArriveAction, CheckInAction implies that the agent is informing/confirming the start of a previously reserved service.\n* [[ConfirmAction]]: Unlike ConfirmAction, CheckInAction implies that the agent is informing/confirming the *start* of a previously reserved service rather than its validity/existence.';


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
		    'about' => ['Thing'],
		    'actionStatus' => ['ActionStatusType'],
		    'additionalType' => ['URL'],
		    'agent' => ['Organization', 'Person'],
		    'alternateName' => ['Text'],
		    'description' => ['Text'],
		    'disambiguatingDescription' => ['Text'],
		    'endTime' => ['DateTime', 'Time'],
		    'error' => ['Thing'],
		    'identifier' => ['PropertyValue', 'URL', 'Text'],
		    'image' => ['URL', 'ImageObject'],
		    'inLanguage' => ['Text', 'Language'],
		    'instrument' => ['Thing'],
		    'language' => ['Language'],
		    'location' => ['Place', 'Text', 'VirtualLocation', 'PostalAddress'],
		    'mainEntityOfPage' => ['URL', 'CreativeWork'],
		    'name' => ['Text'],
		    'object' => ['Thing'],
		    'participant' => ['Organization', 'Person'],
		    'potentialAction' => ['Action'],
		    'provider' => ['Organization', 'Person'],
		    'recipient' => ['Organization', 'ContactPoint', 'Person', 'Audience'],
		    'result' => ['Thing'],
		    'sameAs' => ['URL'],
		    'startTime' => ['Time', 'DateTime'],
		    'subjectOf' => ['Event', 'CreativeWork'],
		    'target' => ['URL', 'EntryPoint'],
		    'url' => ['URL']
		];
	}


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyDescriptions(): array
	{
		return [
		    'about' => 'The subject matter of the content.',
		    'actionStatus' => 'Indicates the current disposition of the Action.',
		    'additionalType' => 'An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the \'typeof\' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.',
		    'agent' => 'The direct performer or driver of the action (animate or inanimate). E.g. *John* wrote a book.',
		    'alternateName' => 'An alias for the item.',
		    'description' => 'A description of the item.',
		    'disambiguatingDescription' => 'A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.',
		    'endTime' => 'The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it\'s the time offset of the end of a clip within a larger file.  Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.',
		    'error' => 'For failed actions, more information on the cause of the failure.',
		    'identifier' => 'The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more details.         ',
		    'image' => 'An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].',
		    'inLanguage' => 'The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].',
		    'instrument' => 'The object that helped the agent perform the action. E.g. John wrote a book with *a pen*.',
		    'language' => 'A sub property of instrument. The language used on this action.',
		    'location' => 'The location of, for example, where an event is happening, where an organization is located, or where an action takes place.',
		    'mainEntityOfPage' => 'Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.',
		    'name' => 'The name of the item.',
		    'object' => 'The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn\'t). E.g. John read *a book*.',
		    'participant' => 'Other co-agents that participated in the action indirectly. E.g. John wrote a book with *Steve*.',
		    'potentialAction' => 'Indicates a potential Action, which describes an idealized action in which this thing would play an \'object\' role.',
		    'provider' => 'The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.',
		    'recipient' => 'A sub property of participant. The participant who is at the receiving end of the action.',
		    'result' => 'The result produced in the action. E.g. John wrote *a book*.',
		    'sameAs' => 'URL of a reference Web page that unambiguously indicates the item\'s identity. E.g. the URL of the item\'s Wikipedia page, Wikidata entry, or official website.',
		    'startTime' => 'The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it\'s the time offset of the start of a clip within a larger file.  Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.',
		    'subjectOf' => 'A CreativeWork or Event about this Thing.',
		    'target' => 'Indicates a target EntryPoint, or url, for an Action.',
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
