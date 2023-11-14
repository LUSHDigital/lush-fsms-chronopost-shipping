<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV6 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV6
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelV6 extends AbstractStructBase
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
     * @var \FSMS\Chronopost\StructType\HeaderValueV2|null
     */
    protected ?\FSMS\Chronopost\StructType\HeaderValueV2 $headerValue = null;
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
     * @var \FSMS\Chronopost\StructType\RecipientValueV2[]
     */
    protected ?array $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\RefValueV2[]
     */
    protected ?array $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV7[]
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
     * @var \FSMS\Chronopost\StructType\RecipientLocalValueV2[]
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
     * Constructor method for shippingMultiParcelV6
     * @uses ShippingMultiParcelV6::setEsdValue()
     * @uses ShippingMultiParcelV6::setHeaderValue()
     * @uses ShippingMultiParcelV6::setShipperValue()
     * @uses ShippingMultiParcelV6::setCustomerValue()
     * @uses ShippingMultiParcelV6::setRecipientValue()
     * @uses ShippingMultiParcelV6::setRefValue()
     * @uses ShippingMultiParcelV6::setSkybillValue()
     * @uses ShippingMultiParcelV6::setSkybillParamsValue()
     * @uses ShippingMultiParcelV6::setPassword()
     * @uses ShippingMultiParcelV6::setModeRetour()
     * @uses ShippingMultiParcelV6::setNumberOfParcel()
     * @uses ShippingMultiParcelV6::setVersion()
     * @uses ShippingMultiParcelV6::setMultiParcel()
     * @uses ShippingMultiParcelV6::setScheduledValue()
     * @uses ShippingMultiParcelV6::setRecipientLocalValue()
     * @uses ShippingMultiParcelV6::setCustomsValue()
     * @param \FSMS\Chronopost\StructType\EsdValue3 $esdValue
     * @param \FSMS\Chronopost\StructType\HeaderValueV2 $headerValue
     * @param \FSMS\Chronopost\StructType\ShipperValueV2[] $shipperValue
     * @param \FSMS\Chronopost\StructType\CustomerValue $customerValue
     * @param \FSMS\Chronopost\StructType\RecipientValueV2[] $recipientValue
     * @param \FSMS\Chronopost\StructType\RefValueV2[] $refValue
     * @param \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV7[] $skybillValue
     * @param \FSMS\Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \FSMS\Chronopost\StructType\ScheduledValue[] $scheduledValue
     * @param \FSMS\Chronopost\StructType\RecipientLocalValueV2[] $recipientLocalValue
     * @param \FSMS\Chronopost\StructType\CustomsValue[] $customsValue
     */
    public function __construct(?\FSMS\Chronopost\StructType\EsdValue3 $esdValue = null, ?\FSMS\Chronopost\StructType\HeaderValueV2 $headerValue = null, ?array $shipperValue = null, ?\FSMS\Chronopost\StructType\CustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?\FSMS\Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?int $numberOfParcel = null, ?string $version = null, ?string $multiParcel = null, ?array $scheduledValue = null, ?array $recipientLocalValue = null, ?array $customsValue = null)
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
     */
    public function setEsdValue(?\FSMS\Chronopost\StructType\EsdValue3 $esdValue = null): self
    {
        $this->esdValue = $esdValue;
        
        return $this;
    }
    /**
     * Get headerValue value
     * @return \FSMS\Chronopost\StructType\HeaderValueV2|null
     */
    public function getHeaderValue(): ?\FSMS\Chronopost\StructType\HeaderValueV2
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \FSMS\Chronopost\StructType\HeaderValueV2 $headerValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
     */
    public function setHeaderValue(?\FSMS\Chronopost\StructType\HeaderValueV2 $headerValue = null): self
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
        foreach ($values as $shippingMultiParcelV6ShipperValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV6ShipperValueItem instanceof \FSMS\Chronopost\StructType\ShipperValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV6ShipperValueItem) ? get_class($shippingMultiParcelV6ShipperValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV6ShipperValueItem), var_export($shippingMultiParcelV6ShipperValueItem, true));
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
     */
    public function setCustomerValue(?\FSMS\Chronopost\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \FSMS\Chronopost\StructType\RecipientValueV2[]
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
        foreach ($values as $shippingMultiParcelV6RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV6RecipientValueItem instanceof \FSMS\Chronopost\StructType\RecipientValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV6RecipientValueItem) ? get_class($shippingMultiParcelV6RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV6RecipientValueItem), var_export($shippingMultiParcelV6RecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \FSMS\Chronopost\StructType\RecipientValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\RecipientValueV2[] $recipientValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @param \FSMS\Chronopost\StructType\RecipientValueV2 $item
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
     */
    public function addToRecipientValue(\FSMS\Chronopost\StructType\RecipientValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\Chronopost\StructType\RecipientValueV2) {
            throw new InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \FSMS\Chronopost\StructType\RecipientValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \FSMS\Chronopost\StructType\RefValueV2[]
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
        foreach ($values as $shippingMultiParcelV6RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV6RefValueItem instanceof \FSMS\Chronopost\StructType\RefValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV6RefValueItem) ? get_class($shippingMultiParcelV6RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV6RefValueItem), var_export($shippingMultiParcelV6RefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \FSMS\Chronopost\StructType\RefValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set refValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\RefValueV2[] $refValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @param \FSMS\Chronopost\StructType\RefValueV2 $item
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
     */
    public function addToRefValue(\FSMS\Chronopost\StructType\RefValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\Chronopost\StructType\RefValueV2) {
            throw new InvalidArgumentException(sprintf('The refValue property can only contain items of type \FSMS\Chronopost\StructType\RefValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV7[]
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
        foreach ($values as $shippingMultiParcelV6SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV6SkybillValueItem instanceof \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV7) {
                $invalidValues[] = is_object($shippingMultiParcelV6SkybillValueItem) ? get_class($shippingMultiParcelV6SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV6SkybillValueItem), var_export($shippingMultiParcelV6SkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV7, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV7[] $skybillValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @param \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV7 $item
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
     */
    public function addToSkybillValue(\FSMS\Chronopost\StructType\SkybillWithDimensionsValueV7 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV7) {
            throw new InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV7, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
        foreach ($values as $shippingMultiParcelV6ScheduledValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV6ScheduledValueItem instanceof \FSMS\Chronopost\StructType\ScheduledValue) {
                $invalidValues[] = is_object($shippingMultiParcelV6ScheduledValueItem) ? get_class($shippingMultiParcelV6ScheduledValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV6ScheduledValueItem), var_export($shippingMultiParcelV6ScheduledValueItem, true));
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @return \FSMS\Chronopost\StructType\RecipientLocalValueV2[]
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
        foreach ($values as $shippingMultiParcelV6RecipientLocalValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV6RecipientLocalValueItem instanceof \FSMS\Chronopost\StructType\RecipientLocalValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV6RecipientLocalValueItem) ? get_class($shippingMultiParcelV6RecipientLocalValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV6RecipientLocalValueItem), var_export($shippingMultiParcelV6RecipientLocalValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientLocalValue property can only contain items of type \FSMS\Chronopost\StructType\RecipientLocalValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientLocalValue value
     * @throws InvalidArgumentException
     * @param \FSMS\Chronopost\StructType\RecipientLocalValueV2[] $recipientLocalValue
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @param \FSMS\Chronopost\StructType\RecipientLocalValueV2 $item
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
     */
    public function addToRecipientLocalValue(\FSMS\Chronopost\StructType\RecipientLocalValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\Chronopost\StructType\RecipientLocalValueV2) {
            throw new InvalidArgumentException(sprintf('The recipientLocalValue property can only contain items of type \FSMS\Chronopost\StructType\RecipientLocalValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
        foreach ($values as $shippingMultiParcelV6CustomsValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV6CustomsValueItem instanceof \FSMS\Chronopost\StructType\CustomsValue) {
                $invalidValues[] = is_object($shippingMultiParcelV6CustomsValueItem) ? get_class($shippingMultiParcelV6CustomsValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV6CustomsValueItem), var_export($shippingMultiParcelV6CustomsValueItem, true));
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6
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
