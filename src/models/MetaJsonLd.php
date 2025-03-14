<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\models;

use nystudio107\seomatic\Seomatic;
use nystudio107\seomatic\base\NonceItem;
use nystudio107\seomatic\helpers\JsonLd as JsonLdHelper;

use Craft;
use craft\helpers\Json;
use craft\helpers\Template;

use yii\validators\UrlValidator;
use yii\validators\BooleanValidator;
use yii\validators\NumberValidator;
use yii\validators\DateValidator;

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */
class MetaJsonLd extends NonceItem
{
    // Constants
    // =========================================================================

    const ITEM_TYPE = 'MetaJsonLd';

    // Static Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'JsonLd';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'Generic JsonLd type.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = '';

    // Public Properties
    // =========================================================================

    /**
     * The schema context.
     *
     * @var string [schema.org types: Text]
     */
    public $context;

    /**
     * The item's type.
     *
     * @var string [schema.org types: Text]
     */
    public $type;

    /**
     * The item's id.
     *
     * @var string [schema.org types: Text]
     */
    public $id;

    /**
     * The JSON-LD graph https://json-ld.org/spec/latest/json-ld/#named-graphs
     *
     * @var null|array
     */
    public $graph;


    // Static Methods
    // =========================================================================

    /**
     * Create a new JSON-LD schema type object
     *
     * @param string $schemaType
     * @param array  $config
     *
     * @return MetaJsonLd
     */
    public static function create($schemaType, array $config = []): MetaJsonLd
    {
        $model = null;

        $className = 'nystudio107\\seomatic\\models\\jsonld\\'.$schemaType;
        /** @var $model MetaJsonLd */
        if (class_exists($className)) {
            self::cleanProperties($className, $config);
            $model = new $className($config);
        } else {
            self::cleanProperties(__CLASS__, $config);
            $model = new MetaJsonLd($config);
        }

        return $model;
    }

    // Public Methods
    // =========================================================================

    /**
     * Set the $type & $context properties
     *
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->type = static::$schemaTypeName;
        $this->context = 'http://schema.org';
        // Make sure we have a valid key
        $this->key = $this->key ?: lcfirst($this->type);
    }

    /**
     * Renders a JSON-LD representation of the schema
     *
     * @return string The resulting JSON-LD
     */
    public function __toString()
    {
        return $this->render([
            'renderRaw' => false,
            'renderScriptTags' => true,
            'array' => false,
        ]);
    }


    /**
     * Return the Schema.org Property Names
     *
     * @return array
     */
    public function getSchemaPropertyNames(): array
    {
        return array_keys($this->getSchemaPropertyExpectedTypes());
    }


    /**
     * Return the Schema.org Property Expected Types
     *
     * @return array
     */
    public function getSchemaPropertyExpectedTypes(): array
    {
        return [];
    }

    /**
     * Return the Schema.org Property Descriptions
     *
     * @return array
     */
    public function getSchemaPropertyDescriptions(): array
    {
        return [];
    }

    /**
     * Return the Schema.org Google Required Schema for this type
     *
     * @return array
     */
    public function getGoogleRequiredSchema(): array
    {
        return [];
    }

    /**
     * Return the Schema.org Google Recommended Schema for this type
     *
     * @return array
     */
    public function getGoogleRecommendedSchema(): array
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function prepForRender(&$data): bool
    {
        $shouldRender = parent::prepForRender($data);
        if ($shouldRender) {
        }

        return $shouldRender;
    }

    /**
     * Renders a JSON-LD representation of the schema
     *
     * @param array $params
     *
     * @return string
     */
    public function render(
        array $params = [
            'renderRaw' => true,
            'renderScriptTags' => true,
            'array' => false,
        ]
    ): string {
        $html = '';
        $options = $this->tagAttributes();
        if ($this->prepForRender($options)) {
            $linebreak = '';
            // If we're rendering for an array, don't add linebreaks
            $oldDevMode = Seomatic::$devMode;
            if ($params['array'] === true) {
                Seomatic::$devMode = false;
            }
            // If `devMode` is enabled, make the JSON-LD human-readable
            if (Seomatic::$devMode) {
                $linebreak = PHP_EOL;
            }
            // Render the resulting JSON-LD
            $scenario = $this->scenario;
            $this->setScenario('render');
            try {
                $html = JsonLdHelper::encode($this);
            } catch (\Exception $e) {
                Craft::error($e, __METHOD__);
                Craft::$app->getErrorHandler()->logException($e);
            }
            $this->setScenario($scenario);
            if ($params['array'] === true) {
                Seomatic::$devMode = $oldDevMode;
            }
            if ($params['renderScriptTags']) {
                $html =
                    '<script type="application/ld+json">'
                    .$linebreak
                    .$html
                    .$linebreak
                    .'</script>';
            } elseif (Seomatic::$devMode) {
                $html =
                    $linebreak
                    .$html
                    .$linebreak;
            }
            if ($params['renderRaw'] === true) {
                $html = Template::raw($html);
            }
        }

        return $html;
    }

    /**
     * @inheritdoc
     */
    public function renderAttributes(array $params = []): array
    {
        $attributes = [];

        $result = Json::decodeIfJson($this->render([
            'renderRaw' => true,
            'renderScriptTags' => false,
            'array' => true,

        ]));
        if ($result !== false) {
            $attributes = $result;
        }

        return $attributes;
    }

    /**
     * @inheritdoc
     */
    public function fields()
    {
        $fields = parent::fields();
        switch ($this->scenario) {
            case 'google':
            case 'default':
                break;
        }

        return $fields;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge($rules, [
            [
                [
                    'id',
                    'type',
                    'context',
                ],
                'string',
            ],
        ]);

        return $rules;
    }

    /**
     * Validate the passed in $attribute based on $schemaPropertyExpectedTypes
     *
     * @param string $attribute the attribute currently being validated
     * @param mixed  $params    the value of the "params" given in the rule
     */
    public function validateJsonSchema(
        $attribute,
        $params
    ) {
        if (!\in_array($attribute, $this->getSchemaPropertyNames(), true)) {
            $this->addError($attribute, 'The attribute does not exist.');
        } else {
            $expectedTypes = $this->getSchemaPropertyExpectedTypes()[$attribute];
            $validated = false;
            $dataToValidate = $this->$attribute;
            if (!\is_array($dataToValidate)) {
                $dataToValidate = [$dataToValidate];
            }
            foreach ($dataToValidate as $data) {
                /** @var array $expectedTypes */
                foreach ($expectedTypes as $expectedType) {
                    $className = 'nystudio107\\seomatic\\models\\jsonld\\'.$expectedType;
                    switch ($expectedType) {
                        // Text always validates
                        case 'Text':
                            $validated = true;
                            break;

                        // Use Yii's validator for URLs
                        case 'URL':
                            $validator = new UrlValidator;
                            if ($validator->validate($data, $error)) {
                                $validated = true;
                            }
                            break;

                        // Use Yii's validator for Booleans
                        case 'Boolean':
                            $validator = new BooleanValidator;
                            if ($validator->validate($data, $error)) {
                                $validated = true;
                            }
                            break;

                        // Use Yii's validator for Numbers
                        case 'Number':
                        case 'Float':
                        case 'Integer':
                            $validator = new NumberValidator;
                            if ($expectedType === 'Integer') {
                                $validator->integerOnly = true;
                            }
                            if ($validator->validate($data, $error)) {
                                $validated = true;
                            }
                            break;

                        // Use Yii's validator for Dates
                        case 'Date':
                            $validator = new DateValidator;
                            $validator->type = DateValidator::TYPE_DATE;
                            $validator->format = 'YYYY-MM-DD';
                            if ($validator->validate($data, $error)) {
                                $validated = true;
                            }
                            break;

                        // Use Yii's validator for DateTimes
                        case 'DateTime':
                            $validator = new DateValidator;
                            $validator->type = DateValidator::TYPE_DATETIME;
                            $validator->format = 'YYYY-MM-DDThh:mm:ss.sTZD';
                            if ($validator->validate($data, $error)) {
                                $validated = true;
                            }
                            break;

                        // Use Yii's validator for Times
                        case 'Time':
                            $validator = new DateValidator;
                            $validator->type = DateValidator::TYPE_TIME;
                            $validator->format = 'hh:mm:ss.sTZD';
                            if ($validator->validate($data, $error)) {
                                $validated = true;
                            }
                            break;
                        // Match an ISO 8601 duration as per: https://stackoverflow.com/questions/32044846/regex-for-iso-8601-durations
                        case 'Duration':
                            if (preg_match('/^P(?!$)((\d+Y)|(\d+\.\d+Y$))?((\d+M)|(\d+\.\d+M$))?((\d+W)|(\d+\.\d+W$))?((\d+D)|(\d+\.\d+D$))?(T(?=\d)((\d+H)|(\d+\.\d+H$))?((\d+M)|(\d+\.\d+M$))?(\d+(\.\d+)?S)?)??$/', $data) === 1) {
                                $validated = true;
                            }
                            break;

                        // By default, assume it's a schema.org JSON-LD object, and validate that
                        default:
                            if (\is_object($data) && is_a($data, $className)) {
                                $validated = true;
                            }
                            break;
                    }
                }
                if (!$validated) {
                    $this->addError($attribute, 'Must be one of these types: '.implode(', ', $expectedTypes));
                }
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function generateNonce()
    {
        $result = parent::generateNonce();
        if (Seomatic::$plugin->metaContainers->cachedJsonLdNonce !== null) {
            return Seomatic::$plugin->metaContainers->cachedJsonLdNonce;
        }

        Seomatic::$plugin->metaContainers->cachedJsonLdNonce = $result;

        return $result;
    }

// Private Methods
// =========================================================================
}
