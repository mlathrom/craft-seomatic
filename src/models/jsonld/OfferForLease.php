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
 * OfferForLease - An [[OfferForLease]] in Schema.org represents an [[Offer]] to lease out
 * something, i.e. an [[Offer]] whose   [[businessFunction]] is [lease
 * out](http://purl.org/goodrelations/v1#LeaseOut.). See [Good
 * Relations](https://en.wikipedia.org/wiki/GoodRelations) for   background on
 * the underlying concepts.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/OfferForLease
 */
class OfferForLease extends MetaJsonLd implements OfferForLeaseInterface, OfferInterface, IntangibleInterface, ThingInterface
{
	use OfferForLeaseTrait;
	use OfferTrait;
	use IntangibleTrait;
	use ThingTrait;

	/**
	 * The Schema.org Type Name
	 *
	 * @var string
	 */
	public static $schemaTypeName = 'OfferForLease';

	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	public static $schemaTypeScope = 'https://schema.org/OfferForLease';

	/**
	 * The Schema.org Type Extends
	 *
	 * @var string
	 */
	public static $schemaTypeExtends = 'Offer';

	/**
	 * The Schema.org Type Description
	 *
	 * @var string
	 */
	public static $schemaTypeDescription = "An [[OfferForLease]] in Schema.org represents an [[Offer]] to lease out something, i.e. an [[Offer]] whose\n  [[businessFunction]] is [lease out](http://purl.org/goodrelations/v1#LeaseOut.). See [Good Relations](https://en.wikipedia.org/wiki/GoodRelations) for\n  background on the underlying concepts.\n  ";


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
		    'acceptedPaymentMethod' => ['PaymentMethod', 'LoanOrCredit'],
		    'addOn' => ['Offer'],
		    'additionalType' => ['URL'],
		    'advanceBookingRequirement' => ['QuantitativeValue'],
		    'aggregateRating' => ['AggregateRating'],
		    'alternateName' => ['Text'],
		    'areaServed' => ['Text', 'Place', 'GeoShape', 'AdministrativeArea'],
		    'asin' => ['Text', 'URL'],
		    'availability' => ['ItemAvailability'],
		    'availabilityEnds' => ['DateTime', 'Time', 'Date'],
		    'availabilityStarts' => ['Date', 'Time', 'DateTime'],
		    'availableAtOrFrom' => ['Place'],
		    'availableDeliveryMethod' => ['DeliveryMethod'],
		    'businessFunction' => ['BusinessFunction'],
		    'category' => ['URL', 'CategoryCode', 'Text', 'Thing', 'PhysicalActivityCategory'],
		    'checkoutPageURLTemplate' => ['Text'],
		    'deliveryLeadTime' => ['QuantitativeValue'],
		    'description' => ['Text'],
		    'disambiguatingDescription' => ['Text'],
		    'eligibleCustomerType' => ['BusinessEntityType'],
		    'eligibleDuration' => ['QuantitativeValue'],
		    'eligibleQuantity' => ['QuantitativeValue'],
		    'eligibleRegion' => ['Place', 'Text', 'GeoShape'],
		    'eligibleTransactionVolume' => ['PriceSpecification'],
		    'gtin' => ['Text', 'URL'],
		    'gtin12' => ['Text'],
		    'gtin13' => ['Text'],
		    'gtin14' => ['Text'],
		    'gtin8' => ['Text'],
		    'hasAdultConsideration' => ['AdultOrientedEnumeration'],
		    'hasMeasurement' => ['QuantitativeValue'],
		    'hasMerchantReturnPolicy' => ['MerchantReturnPolicy'],
		    'identifier' => ['PropertyValue', 'URL', 'Text'],
		    'image' => ['URL', 'ImageObject'],
		    'includesObject' => ['TypeAndQuantityNode'],
		    'ineligibleRegion' => ['Place', 'GeoShape', 'Text'],
		    'inventoryLevel' => ['QuantitativeValue'],
		    'isFamilyFriendly' => ['Boolean'],
		    'itemCondition' => ['OfferItemCondition'],
		    'itemOffered' => ['Product', 'Service', 'MenuItem', 'CreativeWork', 'Event', 'AggregateOffer', 'Trip'],
		    'leaseLength' => ['QuantitativeValue', 'Duration'],
		    'mainEntityOfPage' => ['URL', 'CreativeWork'],
		    'mobileUrl' => ['Text'],
		    'mpn' => ['Text'],
		    'name' => ['Text'],
		    'offeredBy' => ['Organization', 'Person'],
		    'potentialAction' => ['Action'],
		    'price' => ['Text', 'Number'],
		    'priceCurrency' => ['Text'],
		    'priceSpecification' => ['PriceSpecification'],
		    'priceValidUntil' => ['Date'],
		    'review' => ['Review'],
		    'reviews' => ['Review'],
		    'sameAs' => ['URL'],
		    'seller' => ['Organization', 'Person'],
		    'serialNumber' => ['Text'],
		    'shippingDetails' => ['OfferShippingDetails'],
		    'sku' => ['Text'],
		    'subjectOf' => ['Event', 'CreativeWork'],
		    'url' => ['URL'],
		    'validFrom' => ['Date', 'DateTime'],
		    'validThrough' => ['Date', 'DateTime'],
		    'warranty' => ['WarrantyPromise']
		];
	}


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyDescriptions(): array
	{
		return [
		    'acceptedPaymentMethod' => 'The payment method(s) accepted by seller for this offer.',
		    'addOn' => 'An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are available for a surcharge).',
		    'additionalType' => 'An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the \'typeof\' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.',
		    'advanceBookingRequirement' => 'The amount of time that is required between accepting the offer and the actual usage of the resource or service.',
		    'aggregateRating' => 'The overall rating, based on a collection of reviews or ratings, of the item.',
		    'alternateName' => 'An alias for the item.',
		    'areaServed' => 'The geographic area where a service or offered item is provided.',
		    'asin' => 'An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)\'s article).  Note also that this is a definition for how to include ASINs in Schema.org data, and not a definition of ASINs in general - see documentation from Amazon for authoritative details. ASINs are most commonly encoded as text strings, but the [asin] property supports URL/URI as potential values too.',
		    'availability' => 'The availability of this item—for example In stock, Out of stock, Pre-order, etc.',
		    'availabilityEnds' => 'The end of the availability of the product or service included in the offer.',
		    'availabilityStarts' => 'The beginning of the availability of the product or service included in the offer.',
		    'availableAtOrFrom' => 'The place(s) from which the offer can be obtained (e.g. store locations).',
		    'availableDeliveryMethod' => 'The delivery method(s) available for this offer.',
		    'businessFunction' => 'The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.',
		    'category' => 'A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.',
		    'checkoutPageURLTemplate' => 'A URL template (RFC 6570) for a checkout page for an offer. This approach allows merchants to specify a URL for online checkout of the offered product, by interpolating parameters such as the logged in user ID, product ID, quantity, discount code etc. Parameter naming and standardization are not specified here.',
		    'deliveryLeadTime' => 'The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.',
		    'description' => 'A description of the item.',
		    'disambiguatingDescription' => 'A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.',
		    'eligibleCustomerType' => 'The type(s) of customers for which the given offer is valid.',
		    'eligibleDuration' => 'The duration for which the given offer is valid.',
		    'eligibleQuantity' => 'The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.',
		    'eligibleRegion' => 'The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.  See also [[ineligibleRegion]].     ',
		    'eligibleTransactionVolume' => 'The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.',
		    'gtin' => 'A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes.  The GS1 [digital link specifications](https://www.gs1.org/standards/Digital-Link/) express GTINs as URLs (URIs, IRIs, etc.). Details including regular expression examples can be found in, Section 6 of the GS1 URI Syntax specification; see also [schema.org tracking issue](https://github.com/schemaorg/schemaorg/issues/3156#issuecomment-1209522809) for schema.org-specific discussion. A correct [[gtin]] value should be a valid GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a string. The numeric component should also have a [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator) and meet the other rules for valid GTINs. See also [GS1\'s GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more details. Left-padding of the gtin values is not required or encouraged. The [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties.  Note also that this is a definition for how to include GTINs in Schema.org data, and not a definition of GTINs in general - see the GS1 documentation for authoritative details.',
		    'gtin12' => 'The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.',
		    'gtin13' => 'The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.',
		    'gtin14' => 'The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.',
		    'gtin8' => 'The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.',
		    'hasAdultConsideration' => 'Used to tag an item to be intended or suitable for consumption or use by adults only.',
		    'hasMeasurement' => 'A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.',
		    'hasMerchantReturnPolicy' => 'Specifies a MerchantReturnPolicy that may be applicable.',
		    'identifier' => 'The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more details.         ',
		    'image' => 'An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].',
		    'includesObject' => 'This links to a node or nodes indicating the exact quantity of the products included in  an [[Offer]] or [[ProductCollection]].',
		    'ineligibleRegion' => 'The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.  See also [[eligibleRegion]].       ',
		    'inventoryLevel' => 'The current approximate inventory level for the item or items.',
		    'isFamilyFriendly' => 'Indicates whether this content is family friendly.',
		    'itemCondition' => 'A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.',
		    'itemOffered' => 'An item being offered (or demanded). The transactional nature of the offer or demand is documented using [[businessFunction]], e.g. sell, lease etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.',
		    'leaseLength' => 'Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.',
		    'mainEntityOfPage' => 'Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.',
		    'mobileUrl' => 'The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs is a dedicated \'mobile site\'.  To discourage over-use, and reflecting intial usecases, the property is expected only on [[Product]] and [[Offer]], rather than [[Thing]]. The general trend in web technology is towards [responsive design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content can be flexibly adapted to a wide range of browsing environments. Pages and sites referenced with the long-established [[url]] property should ideally also be usable on a wide variety of devices, including mobile phones. In most cases, it would be pointless and counter productive to attempt to update all [[url]] markup to use [[mobileUrl]] for more mobile-oriented pages. The property is intended for the case when items (primarily [[Product]] and [[Offer]]) have extra URLs hosted on an additional "mobile site" alongside the main one. It should not be taken as an endorsement of this publication style.     ',
		    'mpn' => 'The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.',
		    'name' => 'The name of the item.',
		    'offeredBy' => 'A pointer to the organization or person making the offer.',
		    'potentialAction' => 'Indicates a potential Action, which describes an idealized action in which this thing would play an \'object\' role.',
		    'price' => 'The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.  Usage guidelines:  * Use the [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as \'$\' in the value. * Use \'.\' (Unicode \'FULL STOP\' (U+002E)) rather than \',\' to indicate a decimal point. Avoid using these symbols as a readability separator. * Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting. * Use values from 0123456789 (Unicode \'DIGIT ZERO\' (U+0030) to \'DIGIT NINE\' (U+0039)) rather than superficially similar Unicode symbols.       ',
		    'priceCurrency' => 'The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.  Use standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".',
		    'priceSpecification' => 'One or more detailed price specifications, indicating the unit price and delivery or payment charges.',
		    'priceValidUntil' => 'The date after which the price is no longer available.',
		    'review' => 'A review of the item.',
		    'reviews' => 'Review of the item.',
		    'sameAs' => 'URL of a reference Web page that unambiguously indicates the item\'s identity. E.g. the URL of the item\'s Wikipedia page, Wikidata entry, or official website.',
		    'seller' => 'An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.',
		    'serialNumber' => 'The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.',
		    'shippingDetails' => 'Indicates information about the shipping policies and options associated with an [[Offer]].',
		    'sku' => 'The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.',
		    'subjectOf' => 'A CreativeWork or Event about this Thing.',
		    'url' => 'URL of the item.',
		    'validFrom' => 'The date when the item becomes valid.',
		    'validThrough' => 'The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.',
		    'warranty' => 'The warranty promise(s) included in the offer.'
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
