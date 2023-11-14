<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV5 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV5
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingV5 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\EsdValue3|null
     */
    protected ?\FSMS\Chronopost\StructType\EsdValue3 $esdValue = null;
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\HeaderValue|null
     */
    protected ?\FSMS\Chronopost\StructType\HeaderValue $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ShipperValue|null
     */
    protected ?\FSMS\Chronopost\StructType\ShipperValue $shipperValue = null;
    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\CustomerValue|null
     */
    protected ?\FSMS\Chronopost\StructType\CustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\RecipientValue|null
     */
    protected ?\FSMS\Chronopost\StructType\RecipientValue $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\RefValue|null
     */
    protected ?\FSMS\Chronopost\StructType\RefValue $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\SkybillValueV2|null
     */
    protected ?\FSMS\Chronopost\StructType\SkybillValueV2 $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\SkybillParamsValue|null
     */
    protected ?\FSMS\Chronopost\StructType\SkybillParamsValue $skybillParamsValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ScheduledValue|null
     */
    protected ?\FSMS\Chronopost\StructType\ScheduledValue $scheduledValue = null;
    /**
     * Constructor method for shippingV5
     * @uses ShippingV5::setEsdValue()
     * @uses ShippingV5::setHeaderValue()
     * @uses ShippingV5::setShipperValue()
     * @uses ShippingV5::setCustomerValue()
     * @uses ShippingV5::setRecipientValue()
     * @uses ShippingV5::setRefValue()
     * @uses ShippingV5::setSkybillValue()
     * @uses ShippingV5::setSkybillParamsValue()
     * @uses ShippingV5::setPassword()
     * @uses ShippingV5::setVersion()
     * @uses ShippingV5::setScheduledValue()
     * @param \FSMS\Chronopost\StructType\EsdValue3 $esdValue
     * @param \FSMS\Chronopost\StructType\HeaderValue $headerValue
     * @param \FSMS\Chronopost\StructType\ShipperValue $shipperValue
     * @param \FSMS\Chronopost\StructType\CustomerValue $customerValue
     * @param \FSMS\Chronopost\StructType\RecipientValue $recipientValue
     * @param \FSMS\Chronopost\StructType\RefValue $refValue
     * @param \FSMS\Chronopost\StructType\SkybillValueV2 $skybillValue
     * @param \FSMS\Chronopost\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $version
     * @param \FSMS\Chronopost\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\FSMS\Chronopost\StructType\EsdValue3 $esdValue = null, ?\FSMS\Chronopost\StructType\HeaderValue $headerValue = null, ?\FSMS\Chronopost\StructType\ShipperValue $shipperValue = null, ?\FSMS\Chronopost\StructType\CustomerValue $customerValue = null, ?\FSMS\Chronopost\StructType\RecipientValue $recipientValue = null, ?\FSMS\Chronopost\StructType\RefValue $refValue = null, ?\FSMS\Chronopost\StructType\SkybillValueV2 $skybillValue = null, ?\FSMS\Chronopost\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $version = null, ?\FSMS\Chronopost\StructType\ScheduledValue $scheduledValue = null)
    {
        $this
            ->setEsdValue($esdValue)
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setCustomerValue($customerValue)
            ->setRecipientValue($recipientValue)
            ->setRefValue($refValue)
            ->setSkybillValue($skybillValue)
            ->setSkybillParamsValue($skybillParamsValue)
            ->setPassword($password)
            ->setVersion($version)
            ->setScheduledValue($scheduledValue);
    }
    /**
     * Get esdValue value
     * @return \FSMS\Chronopost\StructType\EsdValue3|null
     */
    public function getEsdValue(): ?\FSMS\Chronopost\StructType\EsdValue3
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \FSMS\Chronopost\StructType\EsdValue3 $esdValue
     * @return \FSMS\Chronopost\StructType\ShippingV5
     */
    public function setEsdValue(?\FSMS\Chronopost\StructType\EsdValue3 $esdValue = null): self
    {
        $this->esdValue = $esdValue;
        
        return $this;
    }
    /**
     * Get headerValue value
     * @return \FSMS\Chronopost\StructType\HeaderValue|null
     */
    public function getHeaderValue(): ?\FSMS\Chronopost\StructType\HeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \FSMS\Chronopost\StructType\HeaderValue $headerValue
     * @return \FSMS\Chronopost\StructType\ShippingV5
     */
    public function setHeaderValue(?\FSMS\Chronopost\StructType\HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \FSMS\Chronopost\StructType\ShipperValue|null
     */
    public function getShipperValue(): ?\FSMS\Chronopost\StructType\ShipperValue
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \FSMS\Chronopost\StructType\ShipperValue $shipperValue
     * @return \FSMS\Chronopost\StructType\ShippingV5
     */
    public function setShipperValue(?\FSMS\Chronopost\StructType\ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get customerValue value
     * @return \FSMS\Chronopost\StructType\CustomerValue|null
     */
    public function getCustomerValue(): ?\FSMS\Chronopost\StructType\CustomerValue
    {
        return $this->customerValue;
    }
    /**
     * Set customerValue value
     * @param \FSMS\Chronopost\StructType\CustomerValue $customerValue
     * @return \FSMS\Chronopost\StructType\ShippingV5
     */
    public function setCustomerValue(?\FSMS\Chronopost\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \FSMS\Chronopost\StructType\RecipientValue|null
     */
    public function getRecipientValue(): ?\FSMS\Chronopost\StructType\RecipientValue
    {
        return $this->recipientValue;
    }
    /**
     * Set recipientValue value
     * @param \FSMS\Chronopost\StructType\RecipientValue $recipientValue
     * @return \FSMS\Chronopost\StructType\ShippingV5
     */
    public function setRecipientValue(?\FSMS\Chronopost\StructType\RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \FSMS\Chronopost\StructType\RefValue|null
     */
    public function getRefValue(): ?\FSMS\Chronopost\StructType\RefValue
    {
        return $this->refValue;
    }
    /**
     * Set refValue value
     * @param \FSMS\Chronopost\StructType\RefValue $refValue
     * @return \FSMS\Chronopost\StructType\ShippingV5
     */
    public function setRefValue(?\FSMS\Chronopost\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \FSMS\Chronopost\StructType\SkybillValueV2|null
     */
    public function getSkybillValue(): ?\FSMS\Chronopost\StructType\SkybillValueV2
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \FSMS\Chronopost\StructType\SkybillValueV2 $skybillValue
     * @return \FSMS\Chronopost\StructType\ShippingV5
     */
    public function setSkybillValue(?\FSMS\Chronopost\StructType\SkybillValueV2 $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \FSMS\Chronopost\StructType\SkybillParamsValue|null
     */
    public function getSkybillParamsValue(): ?\FSMS\Chronopost\StructType\SkybillParamsValue
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \FSMS\Chronopost\StructType\SkybillParamsValue $skybillParamsValue
     * @return \FSMS\Chronopost\StructType\ShippingV5
     */
    public function setSkybillParamsValue(?\FSMS\Chronopost\StructType\SkybillParamsValue $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \FSMS\Chronopost\StructType\ShippingV5
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \FSMS\Chronopost\StructType\ShippingV5
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get scheduledValue value
     * @return \FSMS\Chronopost\StructType\ScheduledValue|null
     */
    public function getScheduledValue(): ?\FSMS\Chronopost\StructType\ScheduledValue
    {
        return $this->scheduledValue;
    }
    /**
     * Set scheduledValue value
     * @param \FSMS\Chronopost\StructType\ScheduledValue $scheduledValue
     * @return \FSMS\Chronopost\StructType\ShippingV5
     */
    public function setScheduledValue(?\FSMS\Chronopost\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
