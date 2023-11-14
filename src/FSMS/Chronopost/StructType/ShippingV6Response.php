<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV6Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV6Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingV6Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultExpeditionValueV3|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultExpeditionValueV3 $return = null;
    /**
     * Constructor method for shippingV6Response
     * @uses ShippingV6Response::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultExpeditionValueV3 $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultExpeditionValueV3 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultExpeditionValueV3|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultExpeditionValueV3
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultExpeditionValueV3 $return
     * @return \FSMS\Chronopost\StructType\ShippingV6Response
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultExpeditionValueV3 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
