<?php
/**
 * LoggingNewrelic
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */

/**
 * Fastly API
 *
 * A PHP client library for interacting with most facets of the Fastly API.
 *
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Fastly\Model;

use \ArrayAccess;
use \Fastly\ObjectSerializer;

/**
 * LoggingNewrelic Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LoggingNewrelic implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_newrelic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'placement' => 'string',
        'format_version' => 'int',
        'response_condition' => 'string',
        'format' => 'string',
        'token' => 'string',
        'region' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'name' => null,
        'placement' => null,
        'format_version' => null,
        'response_condition' => null,
        'format' => null,
        'token' => null,
        'region' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyTypes()
    {
        return self::$fastlyTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyFormats()
    {
        return self::$fastlyFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'placement' => 'placement',
        'format_version' => 'format_version',
        'response_condition' => 'response_condition',
        'format' => 'format',
        'token' => 'token',
        'region' => 'region'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'placement' => 'setPlacement',
        'format_version' => 'setFormatVersion',
        'response_condition' => 'setResponseCondition',
        'format' => 'setFormat',
        'token' => 'setToken',
        'region' => 'setRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'placement' => 'getPlacement',
        'format_version' => 'getFormatVersion',
        'response_condition' => 'getResponseCondition',
        'format' => 'getFormat',
        'token' => 'getToken',
        'region' => 'getRegion'
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
        return self::$fastlyModelName;
    }

    const PLACEMENT_NONE = 'none';
    const PLACEMENT_WAF_DEBUG = 'waf_debug';
    const PLACEMENT_NULL = 'null';
    const FORMAT_VERSION_v1 = 1;
    const FORMAT_VERSION_v2 = 2;
    const REGION_US = 'US';
    const REGION_EU = 'EU';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlacementAllowableValues()
    {
        return [
            self::PLACEMENT_NONE,
            self::PLACEMENT_WAF_DEBUG,
            self::PLACEMENT_NULL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatVersionAllowableValues()
    {
        return [
            self::FORMAT_VERSION_v1,
            self::FORMAT_VERSION_v2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegionAllowableValues()
    {
        return [
            self::REGION_US,
            self::REGION_EU,
        ];
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['placement'] = $data['placement'] ?? null;
        $this->container['format_version'] = $data['format_version'] ?? self::FORMAT_VERSION_v2;
        $this->container['response_condition'] = $data['response_condition'] ?? null;
        $this->container['format'] = $data['format'] ?? '{"timestamp":"%{begin:%Y-%m-%dT%H:%M:%S}t","time_elapsed":"%{time.elapsed.usec}V","is_tls":"%{if(req.is_ssl, \"true\", \"false\")}V","client_ip":"%{req.http.Fastly-Client-IP}V","geo_city":"%{client.geo.city}V","geo_country_code":"%{client.geo.country_code}V","request":"%{req.request}V","host":"%{req.http.Fastly-Orig-Host}V","url":"%{json.escape(req.url)}V","request_referer":"%{json.escape(req.http.Referer)}V","request_user_agent":"%{json.escape(req.http.User-Agent)}V","request_accept_language":"%{json.escape(req.http.Accept-Language)}V","request_accept_charset":"%{json.escape(req.http.Accept-Charset)}V","cache_status":"%{regsub(fastly_info.state, \"^(HIT-(SYNTH)|(HITPASS|HIT|MISS|PASS|ERROR|PIPE)).*\", \"\\2\\3\") }V"}';
        $this->container['token'] = $data['token'] ?? null;
        $this->container['region'] = $data['region'] ?? 'US';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPlacementAllowableValues();
        if (!is_null($this->container['placement']) && !in_array($this->container['placement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'placement', must be one of '%s'",
                $this->container['placement'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFormatVersionAllowableValues();
        if (!is_null($this->container['format_version']) && !in_array($this->container['format_version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format_version', must be one of '%s'",
                $this->container['format_version'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($this->container['region']) && !in_array($this->container['region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'region', must be one of '%s'",
                $this->container['region'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name for the real-time logging configuration.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets placement
     *
     * @return string|null
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement
     *
     * @param string|null $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
     *
     * @return self
     */
    public function setPlacement($placement)
    {
        $allowedValues = $this->getPlacementAllowableValues();
        if (!is_null($placement) && !in_array($placement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'placement', must be one of '%s'",
                    $placement,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['placement'] = $placement;

        return $this;
    }

    /**
     * Gets format_version
     *
     * @return int|null
     */
    public function getFormatVersion()
    {
        return $this->container['format_version'];
    }

    /**
     * Sets format_version
     *
     * @param int|null $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
     *
     * @return self
     */
    public function setFormatVersion($format_version)
    {
        $allowedValues = $this->getFormatVersionAllowableValues();
        if (!is_null($format_version) && !in_array($format_version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format_version', must be one of '%s'",
                    $format_version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format_version'] = $format_version;

        return $this;
    }

    /**
     * Gets response_condition
     *
     * @return string|null
     */
    public function getResponseCondition()
    {
        return $this->container['response_condition'];
    }

    /**
     * Sets response_condition
     *
     * @param string|null $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute.
     *
     * @return self
     */
    public function setResponseCondition($response_condition)
    {
        $this->container['response_condition'] = $response_condition;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that New Relic Logs can ingest.
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token The Insert API key from the Account page of your New Relic account. Required.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region The region to which to stream logs.
     *
     * @return self
     */
    public function setRegion($region)
    {
        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($region) && !in_array($region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'region', must be one of '%s'",
                    $region,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['region'] = $region;

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

