<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultGetRouting StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultGetRouting extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The geopostResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\GeopostResult|null
     */
    protected ?\FSMS\Chronopost\StructType\GeopostResult $geopostResult = null;
    /**
     * The posteComptable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $posteComptable = null;
    /**
     * Constructor method for resultGetRouting
     * @uses ResultGetRouting::setErrorCode()
     * @uses ResultGetRouting::setErrorMessage()
     * @uses ResultGetRouting::setGeopostResult()
     * @uses ResultGetRouting::setPosteComptable()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \FSMS\Chronopost\StructType\GeopostResult $geopostResult
     * @param string $posteComptable
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\FSMS\Chronopost\StructType\GeopostResult $geopostResult = null, ?string $posteComptable = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setGeopostResult($geopostResult)
            ->setPosteComptable($posteComptable);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \FSMS\Chronopost\StructType\ResultGetRouting
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \FSMS\Chronopost\StructType\ResultGetRouting
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get geopostResult value
     * @return \FSMS\Chronopost\StructType\GeopostResult|null
     */
    public function getGeopostResult(): ?\FSMS\Chronopost\StructType\GeopostResult
    {
        return $this->geopostResult;
    }
    /**
     * Set geopostResult value
     * @param \FSMS\Chronopost\StructType\GeopostResult $geopostResult
     * @return \FSMS\Chronopost\StructType\ResultGetRouting
     */
    public function setGeopostResult(?\FSMS\Chronopost\StructType\GeopostResult $geopostResult = null): self
    {
        $this->geopostResult = $geopostResult;
        
        return $this;
    }
    /**
     * Get posteComptable value
     * @return string|null
     */
    public function getPosteComptable(): ?string
    {
        return $this->posteComptable;
    }
    /**
     * Set posteComptable value
     * @param string $posteComptable
     * @return \FSMS\Chronopost\StructType\ResultGetRouting
     */
    public function setPosteComptable(?string $posteComptable = null): self
    {
        // validation for constraint: string
        if (!is_null($posteComptable) && !is_string($posteComptable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($posteComptable, true), gettype($posteComptable)), __LINE__);
        }
        $this->posteComptable = $posteComptable;
        
        return $this;
    }
}
