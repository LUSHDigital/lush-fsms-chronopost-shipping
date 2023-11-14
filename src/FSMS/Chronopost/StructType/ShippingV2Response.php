<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV2Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultExpeditionValue|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultExpeditionValue $return = null;
    /**
     * Constructor method for shippingV2Response
     * @uses ShippingV2Response::setReturn()
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
     * @return \FSMS\Chronopost\StructType\ShippingV2Response
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
