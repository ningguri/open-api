<?php
/**
 * DocumentQuery
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FlowAccount Open API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DocumentQuery Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DocumentQuery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'page_size' => 'int',
        'current_page' => 'int',
        'total_records' => 'int',
        'date_type' => '\OpenAPI\Client\Model\DateType',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'day' => 'int',
        'month' => 'int',
        'year' => 'int',
        'range' => '\OpenAPI\Client\Model\DataRange',
        'is_first_current' => 'int',
        'hash_tags' => 'string[]',
        'report_type' => '\OpenAPI\Client\Model\ReportTypes',
        'filter' => '\OpenAPI\Client\Model\FilterOptions[]',
        'sort_by' => '\OpenAPI\Client\Model\SortOptions[]',
        'total_value' => 'float',
        'total_vat' => 'float',
        'is_received' => 'bool',
        'document_type' => '\OpenAPI\Client\Model\DocumentTypes[]',
        'revenue' => '\OpenAPI\Client\Model\ListItem[]',
        'expenses' => '\OpenAPI\Client\Model\ListItem[]',
        'previous_months' => '\OpenAPI\Client\Model\ListItem[]',
        'previous_years' => '\OpenAPI\Client\Model\ListItem[]',
        'custom_document_models' => '\OpenAPI\Client\Model\CustomDocumentModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'page_size' => 'int32',
        'current_page' => 'int32',
        'total_records' => 'int32',
        'date_type' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'day' => 'int32',
        'month' => 'int32',
        'year' => 'int32',
        'range' => null,
        'is_first_current' => 'int32',
        'hash_tags' => null,
        'report_type' => null,
        'filter' => null,
        'sort_by' => null,
        'total_value' => 'decimal',
        'total_vat' => 'decimal',
        'is_received' => null,
        'document_type' => null,
        'revenue' => null,
        'expenses' => null,
        'previous_months' => null,
        'previous_years' => null,
        'custom_document_models' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'page_size' => 'pageSize',
        'current_page' => 'currentPage',
        'total_records' => 'totalRecords',
        'date_type' => 'dateType',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'day' => 'day',
        'month' => 'month',
        'year' => 'year',
        'range' => 'range',
        'is_first_current' => 'isFirstCurrent',
        'hash_tags' => 'hashTags',
        'report_type' => 'reportType',
        'filter' => 'filter',
        'sort_by' => 'sortBy',
        'total_value' => 'totalValue',
        'total_vat' => 'totalVAT',
        'is_received' => 'isReceived',
        'document_type' => 'documentType',
        'revenue' => 'revenue',
        'expenses' => 'expenses',
        'previous_months' => 'previousMonths',
        'previous_years' => 'previousYears',
        'custom_document_models' => 'customDocumentModels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page_size' => 'setPageSize',
        'current_page' => 'setCurrentPage',
        'total_records' => 'setTotalRecords',
        'date_type' => 'setDateType',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'day' => 'setDay',
        'month' => 'setMonth',
        'year' => 'setYear',
        'range' => 'setRange',
        'is_first_current' => 'setIsFirstCurrent',
        'hash_tags' => 'setHashTags',
        'report_type' => 'setReportType',
        'filter' => 'setFilter',
        'sort_by' => 'setSortBy',
        'total_value' => 'setTotalValue',
        'total_vat' => 'setTotalVat',
        'is_received' => 'setIsReceived',
        'document_type' => 'setDocumentType',
        'revenue' => 'setRevenue',
        'expenses' => 'setExpenses',
        'previous_months' => 'setPreviousMonths',
        'previous_years' => 'setPreviousYears',
        'custom_document_models' => 'setCustomDocumentModels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page_size' => 'getPageSize',
        'current_page' => 'getCurrentPage',
        'total_records' => 'getTotalRecords',
        'date_type' => 'getDateType',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'day' => 'getDay',
        'month' => 'getMonth',
        'year' => 'getYear',
        'range' => 'getRange',
        'is_first_current' => 'getIsFirstCurrent',
        'hash_tags' => 'getHashTags',
        'report_type' => 'getReportType',
        'filter' => 'getFilter',
        'sort_by' => 'getSortBy',
        'total_value' => 'getTotalValue',
        'total_vat' => 'getTotalVat',
        'is_received' => 'getIsReceived',
        'document_type' => 'getDocumentType',
        'revenue' => 'getRevenue',
        'expenses' => 'getExpenses',
        'previous_months' => 'getPreviousMonths',
        'previous_years' => 'getPreviousYears',
        'custom_document_models' => 'getCustomDocumentModels'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['page_size'] = $data['page_size'] ?? null;
        $this->container['current_page'] = $data['current_page'] ?? null;
        $this->container['total_records'] = $data['total_records'] ?? null;
        $this->container['date_type'] = $data['date_type'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['day'] = $data['day'] ?? null;
        $this->container['month'] = $data['month'] ?? null;
        $this->container['year'] = $data['year'] ?? null;
        $this->container['range'] = $data['range'] ?? null;
        $this->container['is_first_current'] = $data['is_first_current'] ?? null;
        $this->container['hash_tags'] = $data['hash_tags'] ?? null;
        $this->container['report_type'] = $data['report_type'] ?? null;
        $this->container['filter'] = $data['filter'] ?? null;
        $this->container['sort_by'] = $data['sort_by'] ?? null;
        $this->container['total_value'] = $data['total_value'] ?? null;
        $this->container['total_vat'] = $data['total_vat'] ?? null;
        $this->container['is_received'] = $data['is_received'] ?? null;
        $this->container['document_type'] = $data['document_type'] ?? null;
        $this->container['revenue'] = $data['revenue'] ?? null;
        $this->container['expenses'] = $data['expenses'] ?? null;
        $this->container['previous_months'] = $data['previous_months'] ?? null;
        $this->container['previous_years'] = $data['previous_years'] ?? null;
        $this->container['custom_document_models'] = $data['custom_document_models'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets page_size
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int|null $page_size page_size
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets current_page
     *
     * @return int|null
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int|null $current_page current_page
     *
     * @return self
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets total_records
     *
     * @return int|null
     */
    public function getTotalRecords()
    {
        return $this->container['total_records'];
    }

    /**
     * Sets total_records
     *
     * @param int|null $total_records total_records
     *
     * @return self
     */
    public function setTotalRecords($total_records)
    {
        $this->container['total_records'] = $total_records;

        return $this;
    }

    /**
     * Gets date_type
     *
     * @return \OpenAPI\Client\Model\DateType|null
     */
    public function getDateType()
    {
        return $this->container['date_type'];
    }

    /**
     * Sets date_type
     *
     * @param \OpenAPI\Client\Model\DateType|null $date_type date_type
     *
     * @return self
     */
    public function setDateType($date_type)
    {
        $this->container['date_type'] = $date_type;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets day
     *
     * @return int|null
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param int|null $day day
     *
     * @return self
     */
    public function setDay($day)
    {
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets month
     *
     * @return int|null
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int|null $month month
     *
     * @return self
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int|null
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int|null $year year
     *
     * @return self
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets range
     *
     * @return \OpenAPI\Client\Model\DataRange|null
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     * @param \OpenAPI\Client\Model\DataRange|null $range range
     *
     * @return self
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets is_first_current
     *
     * @return int|null
     */
    public function getIsFirstCurrent()
    {
        return $this->container['is_first_current'];
    }

    /**
     * Sets is_first_current
     *
     * @param int|null $is_first_current is_first_current
     *
     * @return self
     */
    public function setIsFirstCurrent($is_first_current)
    {
        $this->container['is_first_current'] = $is_first_current;

        return $this;
    }

    /**
     * Gets hash_tags
     *
     * @return string[]|null
     */
    public function getHashTags()
    {
        return $this->container['hash_tags'];
    }

    /**
     * Sets hash_tags
     *
     * @param string[]|null $hash_tags hash_tags
     *
     * @return self
     */
    public function setHashTags($hash_tags)
    {
        $this->container['hash_tags'] = $hash_tags;

        return $this;
    }

    /**
     * Gets report_type
     *
     * @return \OpenAPI\Client\Model\ReportTypes|null
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param \OpenAPI\Client\Model\ReportTypes|null $report_type report_type
     *
     * @return self
     */
    public function setReportType($report_type)
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \OpenAPI\Client\Model\FilterOptions[]|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \OpenAPI\Client\Model\FilterOptions[]|null $filter filter
     *
     * @return self
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets sort_by
     *
     * @return \OpenAPI\Client\Model\SortOptions[]|null
     */
    public function getSortBy()
    {
        return $this->container['sort_by'];
    }

    /**
     * Sets sort_by
     *
     * @param \OpenAPI\Client\Model\SortOptions[]|null $sort_by sort_by
     *
     * @return self
     */
    public function setSortBy($sort_by)
    {
        $this->container['sort_by'] = $sort_by;

        return $this;
    }

    /**
     * Gets total_value
     *
     * @return float|null
     */
    public function getTotalValue()
    {
        return $this->container['total_value'];
    }

    /**
     * Sets total_value
     *
     * @param float|null $total_value total_value
     *
     * @return self
     */
    public function setTotalValue($total_value)
    {
        $this->container['total_value'] = $total_value;

        return $this;
    }

    /**
     * Gets total_vat
     *
     * @return float|null
     */
    public function getTotalVat()
    {
        return $this->container['total_vat'];
    }

    /**
     * Sets total_vat
     *
     * @param float|null $total_vat total_vat
     *
     * @return self
     */
    public function setTotalVat($total_vat)
    {
        $this->container['total_vat'] = $total_vat;

        return $this;
    }

    /**
     * Gets is_received
     *
     * @return bool|null
     */
    public function getIsReceived()
    {
        return $this->container['is_received'];
    }

    /**
     * Sets is_received
     *
     * @param bool|null $is_received is_received
     *
     * @return self
     */
    public function setIsReceived($is_received)
    {
        $this->container['is_received'] = $is_received;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return \OpenAPI\Client\Model\DocumentTypes[]|null
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \OpenAPI\Client\Model\DocumentTypes[]|null $document_type document_type
     *
     * @return self
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets revenue
     *
     * @return \OpenAPI\Client\Model\ListItem[]|null
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param \OpenAPI\Client\Model\ListItem[]|null $revenue revenue
     *
     * @return self
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets expenses
     *
     * @return \OpenAPI\Client\Model\ListItem[]|null
     */
    public function getExpenses()
    {
        return $this->container['expenses'];
    }

    /**
     * Sets expenses
     *
     * @param \OpenAPI\Client\Model\ListItem[]|null $expenses expenses
     *
     * @return self
     */
    public function setExpenses($expenses)
    {
        $this->container['expenses'] = $expenses;

        return $this;
    }

    /**
     * Gets previous_months
     *
     * @return \OpenAPI\Client\Model\ListItem[]|null
     */
    public function getPreviousMonths()
    {
        return $this->container['previous_months'];
    }

    /**
     * Sets previous_months
     *
     * @param \OpenAPI\Client\Model\ListItem[]|null $previous_months previous_months
     *
     * @return self
     */
    public function setPreviousMonths($previous_months)
    {
        $this->container['previous_months'] = $previous_months;

        return $this;
    }

    /**
     * Gets previous_years
     *
     * @return \OpenAPI\Client\Model\ListItem[]|null
     */
    public function getPreviousYears()
    {
        return $this->container['previous_years'];
    }

    /**
     * Sets previous_years
     *
     * @param \OpenAPI\Client\Model\ListItem[]|null $previous_years previous_years
     *
     * @return self
     */
    public function setPreviousYears($previous_years)
    {
        $this->container['previous_years'] = $previous_years;

        return $this;
    }

    /**
     * Gets custom_document_models
     *
     * @return \OpenAPI\Client\Model\CustomDocumentModel[]|null
     */
    public function getCustomDocumentModels()
    {
        return $this->container['custom_document_models'];
    }

    /**
     * Sets custom_document_models
     *
     * @param \OpenAPI\Client\Model\CustomDocumentModel[]|null $custom_document_models custom_document_models
     *
     * @return self
     */
    public function setCustomDocumentModels($custom_document_models)
    {
        $this->container['custom_document_models'] = $custom_document_models;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


