<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithESDOnly StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithESDOnly
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingWithESDOnly extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\EsdWithRefClientValue|null
     */
    protected ?\FSMS\Chronopost\StructType\EsdWithRefClientValue $esdValue = null;
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
     * @var \FSMS\Chronopost\StructType\SkybillValue|null
     */
    protected ?\FSMS\Chronopost\StructType\SkybillValue $skybillValue = null;
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
     * The modeRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $modeRetour = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * Constructor method for shippingWithESDOnly
     * @uses ShippingWithESDOnly::setEsdValue()
     * @uses ShippingWithESDOnly::setHeaderValue()
     * @uses ShippingWithESDOnly::setShipperValue()
     * @uses ShippingWithESDOnly::setCustomerValue()
     * @uses ShippingWithESDOnly::setRecipientValue()
     * @uses ShippingWithESDOnly::setRefValue()
     * @uses ShippingWithESDOnly::setSkybillValue()
     * @uses ShippingWithESDOnly::setSkybillParamsValue()
     * @uses ShippingWithESDOnly::setPassword()
     * @uses ShippingWithESDOnly::setModeRetour()
     * @uses ShippingWithESDOnly::setVersion()
     * @param \FSMS\Chronopost\StructType\EsdWithRefClientValue $esdValue
     * @param \FSMS\Chronopost\StructType\HeaderValue $headerValue
     * @param \FSMS\Chronopost\StructType\ShipperValue $shipperValue
     * @param \FSMS\Chronopost\StructType\CustomerValue $customerValue
     * @param \FSMS\Chronopost\StructType\RecipientValue $recipientValue
     * @param \FSMS\Chronopost\StructType\RefValue $refValue
     * @param \FSMS\Chronopost\StructType\SkybillValue $skybillValue
     * @param \FSMS\Chronopost\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param string $version
     */
    public function __construct(?\FSMS\Chronopost\StructType\EsdWithRefClientValue $esdValue = null, ?\FSMS\Chronopost\StructType\HeaderValue $headerValue = null, ?\FSMS\Chronopost\StructType\ShipperValue $shipperValue = null, ?\FSMS\Chronopost\StructType\CustomerValue $customerValue = null, ?\FSMS\Chronopost\StructType\RecipientValue $recipientValue = null, ?\FSMS\Chronopost\StructType\RefValue $refValue = null, ?\FSMS\Chronopost\StructType\SkybillValue $skybillValue = null, ?\FSMS\Chronopost\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null)
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
            ->setModeRetour($modeRetour)
            ->setVersion($version);
    }
    /**
     * Get esdValue value
     * @return \FSMS\Chronopost\StructType\EsdWithRefClientValue|null
     */
    public function getEsdValue(): ?\FSMS\Chronopost\StructType\EsdWithRefClientValue
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \FSMS\Chronopost\StructType\EsdWithRefClientValue $esdValue
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnly
     */
    public function setEsdValue(?\FSMS\Chronopost\StructType\EsdWithRefClientValue $esdValue = null): self
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
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnly
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
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnly
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
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnly
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
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnly
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
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnly
     */
    public function setRefValue(?\FSMS\Chronopost\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \FSMS\Chronopost\StructType\SkybillValue|null
     */
    public function getSkybillValue(): ?\FSMS\Chronopost\StructType\SkybillValue
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \FSMS\Chronopost\StructType\SkybillValue $skybillValue
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnly
     */
    public function setSkybillValue(?\FSMS\Chronopost\StructType\SkybillValue $skybillValue = null): self
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
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnly
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
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnly
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
     * Get modeRetour value
     * @return string|null
     */
    public function getModeRetour(): ?string
    {
        return $this->modeRetour;
    }
    /**
     * Set modeRetour value
     * @param string $modeRetour
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnly
     */
    public function setModeRetour(?string $modeRetour = null): self
    {
        // validation for constraint: string
        if (!is_null($modeRetour) && !is_string($modeRetour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRetour, true), gettype($modeRetour)), __LINE__);
        }
        $this->modeRetour = $modeRetour;
        
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
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnly
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
}
