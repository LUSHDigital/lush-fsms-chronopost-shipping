<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV3Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV3Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelWithReservationV3Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return = null;
    /**
     * Constructor method for shippingMultiParcelWithReservationV3Response
     * @uses ShippingMultiParcelWithReservationV3Response::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelWithReservationV3Response
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
