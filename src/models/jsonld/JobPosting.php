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
 * JobPosting - A listing that describes a job opening in a certain organization.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/JobPosting
 */
class JobPosting extends MetaJsonLd implements JobPostingInterface, IntangibleInterface, ThingInterface
{
	use JobPostingTrait;
	use IntangibleTrait;
	use ThingTrait;

	/**
	 * The Schema.org Type Name
	 *
	 * @var string
	 */
	public static $schemaTypeName = 'JobPosting';

	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	public static $schemaTypeScope = 'https://schema.org/JobPosting';

	/**
	 * The Schema.org Type Extends
	 *
	 * @var string
	 */
	public static $schemaTypeExtends = 'Intangible';

	/**
	 * The Schema.org Type Description
	 *
	 * @var string
	 */
	public static $schemaTypeDescription = 'A listing that describes a job opening in a certain organization.';


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
		    'applicantLocationRequirements' => ['AdministrativeArea'],
		    'applicationContact' => ['ContactPoint'],
		    'baseSalary' => ['MonetaryAmount', 'Number', 'PriceSpecification'],
		    'benefits' => ['Text'],
		    'datePosted' => ['DateTime', 'Date'],
		    'description' => ['Text'],
		    'directApply' => ['Boolean'],
		    'disambiguatingDescription' => ['Text'],
		    'educationRequirements' => ['EducationalOccupationalCredential', 'Text'],
		    'eligibilityToWorkRequirement' => ['Text'],
		    'employerOverview' => ['Text'],
		    'employmentType' => ['Text'],
		    'employmentUnit' => ['Organization'],
		    'estimatedSalary' => ['MonetaryAmount', 'Number', 'MonetaryAmountDistribution'],
		    'experienceInPlaceOfEducation' => ['Boolean'],
		    'experienceRequirements' => ['OccupationalExperienceRequirements', 'Text'],
		    'hiringOrganization' => ['Organization', 'Person'],
		    'identifier' => ['PropertyValue', 'URL', 'Text'],
		    'image' => ['URL', 'ImageObject'],
		    'incentiveCompensation' => ['Text'],
		    'incentives' => ['Text'],
		    'industry' => ['DefinedTerm', 'Text'],
		    'jobBenefits' => ['Text'],
		    'jobImmediateStart' => ['Boolean'],
		    'jobLocation' => ['Place'],
		    'jobLocationType' => ['Text'],
		    'jobStartDate' => ['Text', 'Date'],
		    'mainEntityOfPage' => ['URL', 'CreativeWork'],
		    'name' => ['Text'],
		    'occupationalCategory' => ['Text', 'CategoryCode'],
		    'physicalRequirement' => ['DefinedTerm', 'Text', 'URL'],
		    'potentialAction' => ['Action'],
		    'qualifications' => ['EducationalOccupationalCredential', 'Text'],
		    'relevantOccupation' => ['Occupation'],
		    'responsibilities' => ['Text'],
		    'salaryCurrency' => ['Text'],
		    'sameAs' => ['URL'],
		    'securityClearanceRequirement' => ['Text', 'URL'],
		    'sensoryRequirement' => ['URL', 'DefinedTerm', 'Text'],
		    'skills' => ['Text', 'DefinedTerm'],
		    'specialCommitments' => ['Text'],
		    'subjectOf' => ['Event', 'CreativeWork'],
		    'title' => ['Text'],
		    'totalJobOpenings' => ['Integer'],
		    'url' => ['URL'],
		    'validThrough' => ['Date', 'DateTime'],
		    'workHours' => ['Text']
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
		    'applicantLocationRequirements' => 'The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be in a physical office. Note: This should not be used for citizenship or work visa requirements.',
		    'applicationContact' => 'Contact details for further information relevant to this job posting.',
		    'baseSalary' => 'The base salary of the job or of an employee in an EmployeeRole.',
		    'benefits' => 'Description of benefits associated with the job.',
		    'datePosted' => 'Publication date of an online listing.',
		    'description' => 'A description of the item.',
		    'directApply' => 'Indicates whether an [[url]] that is associated with a [[JobPosting]] enables direct application for the job, via the posting website. A job posting is considered to have directApply of [[True]] if an application process for the specified job can be directly initiated via the url(s) given (noting that e.g. multiple internet domains might nevertheless be involved at an implementation level). A value of [[False]] is appropriate if there is no clear path to applying directly online for the specified job, navigating directly from the JobPosting url(s) supplied.',
		    'disambiguatingDescription' => 'A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.',
		    'educationRequirements' => 'Educational background needed for the position or Occupation.',
		    'eligibilityToWorkRequirement' => 'The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.',
		    'employerOverview' => 'A description of the employer, career opportunities and work environment for this position.',
		    'employmentType' => 'Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).',
		    'employmentUnit' => 'Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.',
		    'estimatedSalary' => 'An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.',
		    'experienceInPlaceOfEducation' => 'Indicates whether a [[JobPosting]] will accept experience (as indicated by [[OccupationalExperienceRequirements]]) in place of its formal educational qualifications (as indicated by [[educationRequirements]]). If true, indicates that satisfying one of these requirements is sufficient.',
		    'experienceRequirements' => 'Description of skills and experience needed for the position or Occupation.',
		    'hiringOrganization' => 'Organization or Person offering the job position.',
		    'identifier' => 'The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more details.         ',
		    'image' => 'An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].',
		    'incentiveCompensation' => 'Description of bonus and commission compensation aspects of the job.',
		    'incentives' => 'Description of bonus and commission compensation aspects of the job.',
		    'industry' => 'The industry associated with the job position.',
		    'jobBenefits' => 'Description of benefits associated with the job.',
		    'jobImmediateStart' => 'An indicator as to whether a position is available for an immediate start.',
		    'jobLocation' => 'A (typically single) geographic location associated with the job position.',
		    'jobLocationType' => 'A description of the job location (e.g. TELECOMMUTE for telecommute jobs).',
		    'jobStartDate' => 'The date on which a successful applicant for this job would be expected to start work. Choose a specific date in the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.',
		    'mainEntityOfPage' => 'Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.',
		    'name' => 'The name of the item.',
		    'occupationalCategory' => 'A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.  Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.',
		    'physicalRequirement' => 'A description of the types of physical activity associated with the job. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.',
		    'potentialAction' => 'Indicates a potential Action, which describes an idealized action in which this thing would play an \'object\' role.',
		    'qualifications' => 'Specific qualifications required for this role or Occupation.',
		    'relevantOccupation' => 'The Occupation for the JobPosting.',
		    'responsibilities' => 'Responsibilities associated with this role or Occupation.',
		    'salaryCurrency' => 'The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.',
		    'sameAs' => 'URL of a reference Web page that unambiguously indicates the item\'s identity. E.g. the URL of the item\'s Wikipedia page, Wikidata entry, or official website.',
		    'securityClearanceRequirement' => 'A description of any security clearance requirements of the job.',
		    'sensoryRequirement' => 'A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.',
		    'skills' => 'A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill this role or to work in this occupation.',
		    'specialCommitments' => 'Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.',
		    'subjectOf' => 'A CreativeWork or Event about this Thing.',
		    'title' => 'The title of the job.',
		    'totalJobOpenings' => 'The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions is unclear or not known.',
		    'url' => 'URL of the item.',
		    'validThrough' => 'The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.',
		    'workHours' => 'The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).'
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
