<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillWithDimensionsValueV7 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SkybillWithDimensionsValueV7 extends SkybillWithDimensionsValueV6
{
    /**
     * The bu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bu = null;
    /**
     * Constructor method for skybillWithDimensionsValueV7
     * @uses SkybillWithDimensionsValueV7::setBu()
     * @param string $bu
     */
    public function __construct(?string $bu = null)
    {
        $this
            ->setBu($bu);
    }
    /**
     * Get bu value
     * @return string|null
     */
    public function getBu(): ?string
    {
        return $this->bu;
    }
    /**
     * Set bu value
     * @param string $bu
     * @return \FSMS\Chronopost\StructType\SkybillWithDimensionsValueV7
     */
    public function setBu(?string $bu = null): self
    {
        // validation for constraint: string
        if (!is_null($bu) && !is_string($bu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bu, true), gettype($bu)), __LINE__);
        }
        $this->bu = $bu;
        
        return $this;
    }
}
