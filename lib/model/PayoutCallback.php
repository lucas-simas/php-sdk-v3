<?php

/**
 * PHP SDK for Cardpay API v3. All rights reserved.
 */

namespace Cardpay\model;

use \ArrayAccess;
use \Cardpay\ObjectSerializer;

class PayoutCallback implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayoutCallback';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'callback_time' => 'string',
        'card_account' => '\Cardpay\model\PayoutResponseCardAccount',
        'cryptocurrency_account' => '\Cardpay\model\PayoutResponseCryptocurrencyAccount',
        'customer' => '\Cardpay\model\PayoutResponseCustomer',
        'ewallet_account' => '\Cardpay\model\PayoutResponseEWalletAccount',
        'merchant_order' => '\Cardpay\model\TransactionResponseMerchantOrder',
        'payment_data' => '\Cardpay\model\PayoutPaymentData',
        'payment_method' => 'string',
        'payout_data' => '\Cardpay\model\PayoutResponsePayoutData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'callback_time' => null,
        'card_account' => null,
        'cryptocurrency_account' => null,
        'customer' => null,
        'ewallet_account' => null,
        'merchant_order' => null,
        'payment_data' => null,
        'payment_method' => null,
        'payout_data' => null
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
        'callback_time' => 'callback_time',
        'card_account' => 'card_account',
        'cryptocurrency_account' => 'cryptocurrency_account',
        'customer' => 'customer',
        'ewallet_account' => 'ewallet_account',
        'merchant_order' => 'merchant_order',
        'payment_data' => 'payment_data',
        'payment_method' => 'payment_method',
        'payout_data' => 'payout_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callback_time' => 'setCallbackTime',
        'card_account' => 'setCardAccount',
        'cryptocurrency_account' => 'setCryptocurrencyAccount',
        'customer' => 'setCustomer',
        'ewallet_account' => 'setEwalletAccount',
        'merchant_order' => 'setMerchantOrder',
        'payment_data' => 'setPaymentData',
        'payment_method' => 'setPaymentMethod',
        'payout_data' => 'setPayoutData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callback_time' => 'getCallbackTime',
        'card_account' => 'getCardAccount',
        'cryptocurrency_account' => 'getCryptocurrencyAccount',
        'customer' => 'getCustomer',
        'ewallet_account' => 'getEwalletAccount',
        'merchant_order' => 'getMerchantOrder',
        'payment_data' => 'getPaymentData',
        'payment_method' => 'getPaymentMethod',
        'payout_data' => 'getPayoutData'
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
        $this->container['callback_time'] = isset($data['callback_time']) ? $data['callback_time'] : null;
        $this->container['card_account'] = isset($data['card_account']) ? $data['card_account'] : null;
        $this->container['cryptocurrency_account'] = isset($data['cryptocurrency_account']) ? $data['cryptocurrency_account'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['ewallet_account'] = isset($data['ewallet_account']) ? $data['ewallet_account'] : null;
        $this->container['merchant_order'] = isset($data['merchant_order']) ? $data['merchant_order'] : null;
        $this->container['payment_data'] = isset($data['payment_data']) ? $data['payment_data'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payout_data'] = isset($data['payout_data']) ? $data['payout_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchant_order'] === null) {
            $invalidProperties[] = "'merchant_order' can't be null";
        }
        if ($this->container['payment_method'] === null) {
            $invalidProperties[] = "'payment_method' can't be null";
        }
        if ($this->container['payout_data'] === null) {
            $invalidProperties[] = "'payout_data' can't be null";
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
     * Gets callback_time
     *
     * @return string
     */
    public function getCallbackTime()
    {
        return $this->container['callback_time'];
    }

    /**
     * Sets callback_time
     *
     * @param string $callback_time Date and time of created callback in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format
     *
     * @return $this
     */
    public function setCallbackTime($callback_time)
    {
        $this->container['callback_time'] = $callback_time;

        return $this;
    }

    /**
     * Gets card_account
     *
     * @return \Cardpay\model\PayoutResponseCardAccount
     */
    public function getCardAccount()
    {
        return $this->container['card_account'];
    }

    /**
     * Sets card_account
     *
     * @param \Cardpay\model\PayoutResponseCardAccount $card_account Card account data *(for BANKCARD method only)*
     *
     * @return $this
     */
    public function setCardAccount($card_account)
    {
        $this->container['card_account'] = $card_account;

        return $this;
    }

    /**
     * Gets cryptocurrency_account
     *
     * @return \Cardpay\model\PayoutResponseCryptocurrencyAccount
     */
    public function getCryptocurrencyAccount()
    {
        return $this->container['cryptocurrency_account'];
    }

    /**
     * Sets cryptocurrency_account
     *
     * @param \Cardpay\model\PayoutResponseCryptocurrencyAccount $cryptocurrency_account Cryptocurrency account data *(for BITCOIN method only)*
     *
     * @return $this
     */
    public function setCryptocurrencyAccount($cryptocurrency_account)
    {
        $this->container['cryptocurrency_account'] = $cryptocurrency_account;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Cardpay\model\PayoutResponseCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Cardpay\model\PayoutResponseCustomer $customer Customer data
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets ewallet_account
     *
     * @return \Cardpay\model\PayoutResponseEWalletAccount
     */
    public function getEwalletAccount()
    {
        return $this->container['ewallet_account'];
    }

    /**
     * Sets ewallet_account
     *
     * @param \Cardpay\model\PayoutResponseEWalletAccount $ewallet_account eWallet account data *(for payout methods only)*
     *
     * @return $this
     */
    public function setEwalletAccount($ewallet_account)
    {
        $this->container['ewallet_account'] = $ewallet_account;

        return $this;
    }

    /**
     * Gets merchant_order
     *
     * @return \Cardpay\model\TransactionResponseMerchantOrder
     */
    public function getMerchantOrder()
    {
        return $this->container['merchant_order'];
    }

    /**
     * Sets merchant_order
     *
     * @param \Cardpay\model\TransactionResponseMerchantOrder $merchant_order Merchant order data
     *
     * @return $this
     */
    public function setMerchantOrder($merchant_order)
    {
        $this->container['merchant_order'] = $merchant_order;

        return $this;
    }

    /**
     * Gets payment_data
     *
     * @return \Cardpay\model\PayoutPaymentData
     */
    public function getPaymentData()
    {
        return $this->container['payment_data'];
    }

    /**
     * Sets payment_data
     *
     * @param \Cardpay\model\PayoutPaymentData $payment_data Payment data
     *
     * @return $this
     */
    public function setPaymentData($payment_data)
    {
        $this->container['payment_data'] = $payment_data;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method Used payment method type name from payment methods list
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payout_data
     *
     * @return \Cardpay\model\PayoutResponsePayoutData
     */
    public function getPayoutData()
    {
        return $this->container['payout_data'];
    }

    /**
     * Sets payout_data
     *
     * @param \Cardpay\model\PayoutResponsePayoutData $payout_data Payout data
     *
     * @return $this
     */
    public function setPayoutData($payout_data)
    {
        $this->container['payout_data'] = $payout_data;

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
     * @return mixed
     */
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

