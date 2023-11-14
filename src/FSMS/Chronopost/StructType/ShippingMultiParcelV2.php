<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV2
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelV2 extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ShipperValueV2[]
     */
    protected ?array $shipperValue = null;
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\RecipientValue[]
     */
    protected ?array $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\RefValue[]
     */
    protected ?array $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV4[]
     */
    protected ?array $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\SkybillParamsValueV2|null
     */
    protected ?\FSMS\Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue = null;
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
     * The numberOfParcel
     * @var int|null
     */
    protected ?int $numberOfParcel = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The multiParcel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $multiParcel = null;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ScheduledValue[]
     */
    protected ?array $scheduledValue = null;
    /**
     * The recipientLocalValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\RecipientLocalValue[]
     */
    protected ?array $recipientLocalValue = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\CustomsValue[]
     */
    protected ?array $customsValue = null;
    /**
     * Constructor method for shippingMultiParcelV2
     * @uses ShippingMultiParcelV2::setEsdValue()
     * @uses ShippingMultiParcelV2::setHeaderValue()
     * @uses ShippingMultiParcelV2::setShipperValue()
     * @uses ShippingMultiParcelV2::setCustomerValue()
     * @uses ShippingMultiParcelV2::setRecipientValue()
     * @uses ShippingMultiParcelV2::setRefValue()
     * @uses ShippingMultiParcelV2::setSkybillValue()
     * @uses ShippingMultiParcelV2::setSkybillParamsValue()
     * @uses ShippingMultiParcelV2::setPassword()
     * @uses ShippingMultiParcelV2::setModeRetour()
     * @uses ShippingMultiParcelV2::setNumberOfParcel()
     * @uses ShippingMultiParcelV2::setVersion()
     * @uses ShippingMultiParcelV2::setMultiParcel()
     * @uses ShippingMultiParcelV2::setScheduledValue()
     * @uses ShippingMultiParcelV2::setRecipientLocalValue()
     * @uses ShippingMultiParcelV2::setCustomsValue()
     * @param \FSMS\Chronopost\StructType\EsdValue3 $esdValue
     * @param \FSMS\Chronopost\StructType\HeaderValue $headerValue
     * @param \FSMS\Chronopost\StructType\ShipperValueV2[] $shipperValue
     * @param \FSMS\Chronopost\StructType\CustomerValue $customerValue
     * @param \FSMS\Chronopost\StructType\RecipientValue[] $recipientValue
     * @param \FSMS\Chronopost\StructType\RefValue[] $refValue
     * @param \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV4[] $skybillValue
     * @param \FSMS\Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \FSMS\Chronopost\StructType\ScheduledValue[] $scheduledValue
     * @param \FSMS\Chronopost\StructType\RecipientLocalValue[] $recipientLocalValue
     * @param \FSMS\Chronopost\StructType\CustomsValue[] $customsValue
     */
    public function __construct(?\FSMS\Chronopost\StructType\EsdValue3 $esdValue = null, ?\FSMS\Chronopost\StructType\HeaderValue $headerValue = null, ?array $shipperValue = null, ?\FSMS\Chronopost\StructType\CustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?\FSMS\Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?int $numberOfParcel = null, ?string $version = null, ?string $multiParcel = null, ?array $scheduledValue = null, ?array $recipientLocalValue = null, ?array $customsValue = null)
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
            ->setNumberOfParcel($numberOfParcel)
            ->setVersion($version)
            ->setMultiParcel($multiParcel)
            ->setScheduledValue($scheduledValue)
            ->setRecipientLocalValue($recipientLocalValue)
            ->setCustomsValue($customsValue);
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setHeaderValue(?\FSMS\Chronopost\StructType\HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \FSMS\Chronopost\StructType\ShipperValueV2[]
     */
    public function getShipperValue(): ?array
    {
        return $this->shipperValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setShipperValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipperValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipperValueForArrayConstraintFromSetShipperValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2ShipperValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2ShipperValueItem instanceof \FSMS\Chronopost\StructType\ShipperValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV2ShipperValueItem) ? get_class($shippingMultiParcelV2ShipperValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2ShipperValueItem), var_export($shippingMultiParcelV2ShipperValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipperValue property can only contain items of type \FSMS\Chronopost\StructType\ShipperValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set shipperValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\ShipperValueV2[] $shipperValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setShipperValue(?array $shipperValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($shipperValueArrayErrorMessage = self::validateShipperValueForArrayConstraintFromSetShipperValue($shipperValue))) {
            throw new InvalidArgumentException($shipperValueArrayErrorMessage, __LINE__);
        }
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Add item to shipperValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\ShipperValueV2 $item
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function addToShipperValue(\FSMS\Chronopost\StructType\ShipperValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\Chronopost\StructType\ShipperValueV2) {
            throw new InvalidArgumentException(sprintf('The shipperValue property can only contain items of type \FSMS\Chronopost\StructType\ShipperValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipperValue[] = $item;
        
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setCustomerValue(?\FSMS\Chronopost\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \FSMS\Chronopost\StructType\RecipientValue[]
     */
    public function getRecipientValue(): ?array
    {
        return $this->recipientValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRecipientValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientValueForArrayConstraintFromSetRecipientValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2RecipientValueItem instanceof \FSMS\Chronopost\StructType\RecipientValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2RecipientValueItem) ? get_class($shippingMultiParcelV2RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2RecipientValueItem), var_export($shippingMultiParcelV2RecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \FSMS\Chronopost\StructType\RecipientValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\RecipientValue[] $recipientValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setRecipientValue(?array $recipientValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientValueArrayErrorMessage = self::validateRecipientValueForArrayConstraintFromSetRecipientValue($recipientValue))) {
            throw new InvalidArgumentException($recipientValueArrayErrorMessage, __LINE__);
        }
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Add item to recipientValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\RecipientValue $item
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function addToRecipientValue(\FSMS\Chronopost\StructType\RecipientValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\Chronopost\StructType\RecipientValue) {
            throw new InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \FSMS\Chronopost\StructType\RecipientValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \FSMS\Chronopost\StructType\RefValue[]
     */
    public function getRefValue(): ?array
    {
        return $this->refValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRefValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefValueForArrayConstraintFromSetRefValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2RefValueItem instanceof \FSMS\Chronopost\StructType\RefValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2RefValueItem) ? get_class($shippingMultiParcelV2RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2RefValueItem), var_export($shippingMultiParcelV2RefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \FSMS\Chronopost\StructType\RefValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set refValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\RefValue[] $refValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setRefValue(?array $refValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($refValueArrayErrorMessage = self::validateRefValueForArrayConstraintFromSetRefValue($refValue))) {
            throw new InvalidArgumentException($refValueArrayErrorMessage, __LINE__);
        }
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Add item to refValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\RefValue $item
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function addToRefValue(\FSMS\Chronopost\StructType\RefValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\Chronopost\StructType\RefValue) {
            throw new InvalidArgumentException(sprintf('The refValue property can only contain items of type \FSMS\Chronopost\StructType\RefValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV4[]
     */
    public function getSkybillValue(): ?array
    {
        return $this->skybillValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSkybillValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkybillValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkybillValueForArrayConstraintFromSetSkybillValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2SkybillValueItem instanceof \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV4) {
                $invalidValues[] = is_object($shippingMultiParcelV2SkybillValueItem) ? get_class($shippingMultiParcelV2SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2SkybillValueItem), var_export($shippingMultiParcelV2SkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV4[] $skybillValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setSkybillValue(?array $skybillValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($skybillValueArrayErrorMessage = self::validateSkybillValueForArrayConstraintFromSetSkybillValue($skybillValue))) {
            throw new InvalidArgumentException($skybillValueArrayErrorMessage, __LINE__);
        }
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Add item to skybillValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV4 $item
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function addToSkybillValue(\FSMS\Chronopost\StructType\SkybillWithDimensionsValueV4 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV4) {
            throw new InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \FSMS\Chronopost\StructType\SkybillParamsValueV2|null
     */
    public function getSkybillParamsValue(): ?\FSMS\Chronopost\StructType\SkybillParamsValueV2
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \FSMS\Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setSkybillParamsValue(?\FSMS\Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue = null): self
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
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
     * Get numberOfParcel value
     * @return int|null
     */
    public function getNumberOfParcel(): ?int
    {
        return $this->numberOfParcel;
    }
    /**
     * Set numberOfParcel value
     * @param int $numberOfParcel
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setNumberOfParcel(?int $numberOfParcel = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfParcel) && !(is_int($numberOfParcel) || ctype_digit($numberOfParcel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcel, true), gettype($numberOfParcel)), __LINE__);
        }
        $this->numberOfParcel = $numberOfParcel;
        
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
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
     * Get multiParcel value
     * @return string|null
     */
    public function getMultiParcel(): ?string
    {
        return $this->multiParcel;
    }
    /**
     * Set multiParcel value
     * @param string $multiParcel
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setMultiParcel(?string $multiParcel = null): self
    {
        // validation for constraint: string
        if (!is_null($multiParcel) && !is_string($multiParcel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multiParcel, true), gettype($multiParcel)), __LINE__);
        }
        $this->multiParcel = $multiParcel;
        
        return $this;
    }
    /**
     * Get scheduledValue value
     * @return \FSMS\Chronopost\StructType\ScheduledValue[]
     */
    public function getScheduledValue(): ?array
    {
        return $this->scheduledValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setScheduledValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setScheduledValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateScheduledValueForArrayConstraintFromSetScheduledValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2ScheduledValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2ScheduledValueItem instanceof \FSMS\Chronopost\StructType\ScheduledValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2ScheduledValueItem) ? get_class($shippingMultiParcelV2ScheduledValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2ScheduledValueItem), var_export($shippingMultiParcelV2ScheduledValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The scheduledValue property can only contain items of type \FSMS\Chronopost\StructType\ScheduledValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set scheduledValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\ScheduledValue[] $scheduledValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setScheduledValue(?array $scheduledValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($scheduledValueArrayErrorMessage = self::validateScheduledValueForArrayConstraintFromSetScheduledValue($scheduledValue))) {
            throw new InvalidArgumentException($scheduledValueArrayErrorMessage, __LINE__);
        }
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
    /**
     * Add item to scheduledValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\ScheduledValue $item
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function addToScheduledValue(\FSMS\Chronopost\StructType\ScheduledValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\Chronopost\StructType\ScheduledValue) {
            throw new InvalidArgumentException(sprintf('The scheduledValue property can only contain items of type \FSMS\Chronopost\StructType\ScheduledValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->scheduledValue[] = $item;
        
        return $this;
    }
    /**
     * Get recipientLocalValue value
     * @return \FSMS\Chronopost\StructType\RecipientLocalValue[]
     */
    public function getRecipientLocalValue(): ?array
    {
        return $this->recipientLocalValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRecipientLocalValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientLocalValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientLocalValueForArrayConstraintFromSetRecipientLocalValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2RecipientLocalValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2RecipientLocalValueItem instanceof \FSMS\Chronopost\StructType\RecipientLocalValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2RecipientLocalValueItem) ? get_class($shippingMultiParcelV2RecipientLocalValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2RecipientLocalValueItem), var_export($shippingMultiParcelV2RecipientLocalValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientLocalValue property can only contain items of type \FSMS\Chronopost\StructType\RecipientLocalValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientLocalValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\RecipientLocalValue[] $recipientLocalValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setRecipientLocalValue(?array $recipientLocalValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientLocalValueArrayErrorMessage = self::validateRecipientLocalValueForArrayConstraintFromSetRecipientLocalValue($recipientLocalValue))) {
            throw new InvalidArgumentException($recipientLocalValueArrayErrorMessage, __LINE__);
        }
        $this->recipientLocalValue = $recipientLocalValue;
        
        return $this;
    }
    /**
     * Add item to recipientLocalValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\RecipientLocalValue $item
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function addToRecipientLocalValue(\FSMS\Chronopost\StructType\RecipientLocalValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\Chronopost\StructType\RecipientLocalValue) {
            throw new InvalidArgumentException(sprintf('The recipientLocalValue property can only contain items of type \FSMS\Chronopost\StructType\RecipientLocalValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientLocalValue[] = $item;
        
        return $this;
    }
    /**
     * Get customsValue value
     * @return \FSMS\Chronopost\StructType\CustomsValue[]
     */
    public function getCustomsValue(): ?array
    {
        return $this->customsValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCustomsValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomsValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomsValueForArrayConstraintFromSetCustomsValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2CustomsValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2CustomsValueItem instanceof \FSMS\Chronopost\StructType\CustomsValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2CustomsValueItem) ? get_class($shippingMultiParcelV2CustomsValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2CustomsValueItem), var_export($shippingMultiParcelV2CustomsValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customsValue property can only contain items of type \FSMS\Chronopost\StructType\CustomsValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set customsValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\CustomsValue[] $customsValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function setCustomsValue(?array $customsValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($customsValueArrayErrorMessage = self::validateCustomsValueForArrayConstraintFromSetCustomsValue($customsValue))) {
            throw new InvalidArgumentException($customsValueArrayErrorMessage, __LINE__);
        }
        $this->customsValue = $customsValue;
        
        return $this;
    }
    /**
     * Add item to customsValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\CustomsValue $item
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2
     */
    public function addToCustomsValue(\FSMS\Chronopost\StructType\CustomsValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\Chronopost\StructType\CustomsValue) {
            throw new InvalidArgumentException(sprintf('The customsValue property can only contain items of type \FSMS\Chronopost\StructType\CustomsValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->customsValue[] = $item;
        
        return $this;
    }
}
