<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationAndESDWithRefClientResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationAndESDWithRefClientResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingWithReservationAndESDWithRefClientResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultReservationExpeditionValue|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultReservationExpeditionValue $return = null;
    /**
     * Constructor method for shippingWithReservationAndESDWithRefClientResponse
     * @uses ShippingWithReservationAndESDWithRefClientResponse::setReturn()
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
     * @return \FSMS\Chronopost\StructType\ShippingWithReservationAndESDWithRefClientResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
