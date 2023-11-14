<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultExpeditionValue|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultExpeditionValue $return = null;
    /**
     * Constructor method for shippingResponse
     * @uses ShippingResponse::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultExpeditionValue $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultExpeditionValue|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultExpeditionValue $return
     * @return \FSMS\Chronopost\StructType\ShippingResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
