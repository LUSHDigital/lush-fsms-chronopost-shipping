<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeAuthResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeAuthResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReservedSkybillWithTypeAndModeAuthResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return = null;
    /**
     * Constructor method for getReservedSkybillWithTypeAndModeAuthResponse
     * @uses GetReservedSkybillWithTypeAndModeAuthResponse::setReturn()
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
     * @return \FSMS\Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuthResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
