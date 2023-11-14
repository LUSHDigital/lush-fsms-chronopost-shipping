<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRoutingResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getRoutingResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRoutingResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultGetRouting|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultGetRouting $return = null;
    /**
     * Constructor method for getRoutingResponse
     * @uses GetRoutingResponse::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultGetRouting $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultGetRouting $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultGetRouting|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultGetRouting
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultGetRouting $return
     * @return \FSMS\Chronopost\StructType\GetRoutingResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultGetRouting $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
