<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingWithReservationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultReservationExpeditionValue|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultReservationExpeditionValue $return = null;
    /**
     * Constructor method for shippingWithReservationResponse
     * @uses ShippingWithReservationResponse::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultReservationExpeditionValue $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultReservationExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultReservationExpeditionValue|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultReservationExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultReservationExpeditionValue $return
     * @return \FSMS\Chronopost\StructType\ShippingWithReservationResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
