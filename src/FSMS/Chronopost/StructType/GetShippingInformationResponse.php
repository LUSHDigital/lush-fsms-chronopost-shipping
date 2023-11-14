<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformationResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetShippingInformationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultShippingInfo|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultShippingInfo $return = null;
    /**
     * Constructor method for getShippingInformationResponse
     * @uses GetShippingInformationResponse::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultShippingInfo $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultShippingInfo $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultShippingInfo|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultShippingInfo
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultShippingInfo $return
     * @return \FSMS\Chronopost\StructType\GetShippingInformationResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultShippingInfo $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
