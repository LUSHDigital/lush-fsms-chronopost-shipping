<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReservedSkybillWithTypeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return = null;
    /**
     * Constructor method for getReservedSkybillWithTypeResponse
     * @uses GetReservedSkybillWithTypeResponse::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return
     * @return \FSMS\Chronopost\StructType\GetReservedSkybillWithTypeResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
