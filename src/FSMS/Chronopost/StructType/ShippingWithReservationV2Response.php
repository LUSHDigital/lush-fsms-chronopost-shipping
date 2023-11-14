<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationV2Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingWithReservationV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultReservationExpeditionValueV2|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultReservationExpeditionValueV2 $return = null;
    /**
     * Constructor method for shippingWithReservationV2Response
     * @uses ShippingWithReservationV2Response::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultReservationExpeditionValueV2 $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultReservationExpeditionValueV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultReservationExpeditionValueV2|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultReservationExpeditionValueV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultReservationExpeditionValueV2 $return
     * @return \FSMS\Chronopost\StructType\ShippingWithReservationV2Response
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultReservationExpeditionValueV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
