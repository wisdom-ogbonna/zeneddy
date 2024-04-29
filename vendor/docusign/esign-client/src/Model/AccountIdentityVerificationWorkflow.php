<?php
/**
 * AccountIdentityVerificationWorkflow
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * AccountIdentityVerificationWorkflow Class Doc Comment
 *
 * @category    Class
 * @description Specifies an Identity Verification workflow.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountIdentityVerificationWorkflow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accountIdentityVerificationWorkflow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_description' => '?string',
        'default_name' => '?string',
        'input_options' => '\DocuSign\eSign\Model\AccountIdentityInputOption[]',
        'is_disabled' => '?string',
        'owner_type' => '?string',
        'signature_provider' => '\DocuSign\eSign\Model\AccountSignatureProvider',
        'steps' => '\DocuSign\eSign\Model\AccountIdentityVerificationStep[]',
        'workflow_id' => '?string',
        'workflow_label' => '?string',
        'workflow_resource_key' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'default_description' => null,
        'default_name' => null,
        'input_options' => null,
        'is_disabled' => null,
        'owner_type' => null,
        'signature_provider' => null,
        'steps' => null,
        'workflow_id' => null,
        'workflow_label' => null,
        'workflow_resource_key' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'default_description' => 'defaultDescription',
        'default_name' => 'defaultName',
        'input_options' => 'inputOptions',
        'is_disabled' => 'isDisabled',
        'owner_type' => 'ownerType',
        'signature_provider' => 'signatureProvider',
        'steps' => 'steps',
        'workflow_id' => 'workflowId',
        'workflow_label' => 'workflowLabel',
        'workflow_resource_key' => 'workflowResourceKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_description' => 'setDefaultDescription',
        'default_name' => 'setDefaultName',
        'input_options' => 'setInputOptions',
        'is_disabled' => 'setIsDisabled',
        'owner_type' => 'setOwnerType',
        'signature_provider' => 'setSignatureProvider',
        'steps' => 'setSteps',
        'workflow_id' => 'setWorkflowId',
        'workflow_label' => 'setWorkflowLabel',
        'workflow_resource_key' => 'setWorkflowResourceKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_description' => 'getDefaultDescription',
        'default_name' => 'getDefaultName',
        'input_options' => 'getInputOptions',
        'is_disabled' => 'getIsDisabled',
        'owner_type' => 'getOwnerType',
        'signature_provider' => 'getSignatureProvider',
        'steps' => 'getSteps',
        'workflow_id' => 'getWorkflowId',
        'workflow_label' => 'getWorkflowLabel',
        'workflow_resource_key' => 'getWorkflowResourceKey'
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
        return self::$swaggerModelName;
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
        $this->container['default_description'] = isset($data['default_description']) ? $data['default_description'] : null;
        $this->container['default_name'] = isset($data['default_name']) ? $data['default_name'] : null;
        $this->container['input_options'] = isset($data['input_options']) ? $data['input_options'] : null;
        $this->container['is_disabled'] = isset($data['is_disabled']) ? $data['is_disabled'] : null;
        $this->container['owner_type'] = isset($data['owner_type']) ? $data['owner_type'] : null;
        $this->container['signature_provider'] = isset($data['signature_provider']) ? $data['signature_provider'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['workflow_id'] = isset($data['workflow_id']) ? $data['workflow_id'] : null;
        $this->container['workflow_label'] = isset($data['workflow_label']) ? $data['workflow_label'] : null;
        $this->container['workflow_resource_key'] = isset($data['workflow_resource_key']) ? $data['workflow_resource_key'] : null;
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
     * Gets default_description
     *
     * @return ?string
     */
    public function getDefaultDescription()
    {
        return $this->container['default_description'];
    }

    /**
     * Sets default_description
     *
     * @param ?string $default_description 
     *
     * @return $this
     */
    public function setDefaultDescription($default_description)
    {
        $this->container['default_description'] = $default_description;

        return $this;
    }

    /**
     * Gets default_name
     *
     * @return ?string
     */
    public function getDefaultName()
    {
        return $this->container['default_name'];
    }

    /**
     * Sets default_name
     *
     * @param ?string $default_name 
     *
     * @return $this
     */
    public function setDefaultName($default_name)
    {
        $this->container['default_name'] = $default_name;

        return $this;
    }

    /**
     * Gets input_options
     *
     * @return \DocuSign\eSign\Model\AccountIdentityInputOption[]
     */
    public function getInputOptions()
    {
        return $this->container['input_options'];
    }

    /**
     * Sets input_options
     *
     * @param \DocuSign\eSign\Model\AccountIdentityInputOption[] $input_options 
     *
     * @return $this
     */
    public function setInputOptions($input_options)
    {
        $this->container['input_options'] = $input_options;

        return $this;
    }

    /**
     * Gets is_disabled
     *
     * @return ?string
     */
    public function getIsDisabled()
    {
        return $this->container['is_disabled'];
    }

    /**
     * Sets is_disabled
     *
     * @param ?string $is_disabled 
     *
     * @return $this
     */
    public function setIsDisabled($is_disabled)
    {
        $this->container['is_disabled'] = $is_disabled;

        return $this;
    }

    /**
     * Gets owner_type
     *
     * @return ?string
     */
    public function getOwnerType()
    {
        return $this->container['owner_type'];
    }

    /**
     * Sets owner_type
     *
     * @param ?string $owner_type 
     *
     * @return $this
     */
    public function setOwnerType($owner_type)
    {
        $this->container['owner_type'] = $owner_type;

        return $this;
    }

    /**
     * Gets signature_provider
     *
     * @return \DocuSign\eSign\Model\AccountSignatureProvider
     */
    public function getSignatureProvider()
    {
        return $this->container['signature_provider'];
    }

    /**
     * Sets signature_provider
     *
     * @param \DocuSign\eSign\Model\AccountSignatureProvider $signature_provider The signature provider associated with the Identity Verification workflow.
     *
     * @return $this
     */
    public function setSignatureProvider($signature_provider)
    {
        $this->container['signature_provider'] = $signature_provider;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \DocuSign\eSign\Model\AccountIdentityVerificationStep[]
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \DocuSign\eSign\Model\AccountIdentityVerificationStep[] $steps 
     *
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets workflow_id
     *
     * @return ?string
     */
    public function getWorkflowId()
    {
        return $this->container['workflow_id'];
    }

    /**
     * Sets workflow_id
     *
     * @param ?string $workflow_id 
     *
     * @return $this
     */
    public function setWorkflowId($workflow_id)
    {
        $this->container['workflow_id'] = $workflow_id;

        return $this;
    }

    /**
     * Gets workflow_label
     *
     * @return ?string
     */
    public function getWorkflowLabel()
    {
        return $this->container['workflow_label'];
    }

    /**
     * Sets workflow_label
     *
     * @param ?string $workflow_label 
     *
     * @return $this
     */
    public function setWorkflowLabel($workflow_label)
    {
        $this->container['workflow_label'] = $workflow_label;

        return $this;
    }

    /**
     * Gets workflow_resource_key
     *
     * @return ?string
     */
    public function getWorkflowResourceKey()
    {
        return $this->container['workflow_resource_key'];
    }

    /**
     * Sets workflow_resource_key
     *
     * @param ?string $workflow_resource_key 
     *
     * @return $this
     */
    public function setWorkflowResourceKey($workflow_resource_key)
    {
        $this->container['workflow_resource_key'] = $workflow_resource_key;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

