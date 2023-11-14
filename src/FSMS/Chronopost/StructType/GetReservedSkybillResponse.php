<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReservedSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultGetReservedSkybillValue|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultGetReservedSkybillValue $return = null;
    /**
     * Constructor method for getReservedSkybillResponse
     * @uses GetReservedSkybillResponse::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultGetReservedSkybillValue $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultGetReservedSkybillValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultGetReservedSkybillValue|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultGetReservedSkybillValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultGetReservedSkybillValue $return
     * @return \FSMS\Chronopost\StructType\GetReservedSkybillResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultGetReservedSkybillValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
