<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV6Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV6Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelV6Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultMultiParcelExpeditionValue|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultMultiParcelExpeditionValue $return = null;
    /**
     * Constructor method for shippingMultiParcelV6Response
     * @uses ShippingMultiParcelV6Response::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultMultiParcelExpeditionValue $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultMultiParcelExpeditionValue|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultMultiParcelExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultMultiParcelExpeditionValue $return
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6Response
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
