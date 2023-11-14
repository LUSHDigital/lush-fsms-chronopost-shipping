<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV7Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV7Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShippingV7Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultMonoParcelExpeditionValue|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultMonoParcelExpeditionValue $return = null;
    /**
     * Constructor method for shippingV7Response
     * @uses ShippingV7Response::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultMonoParcelExpeditionValue $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultMonoParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultMonoParcelExpeditionValue|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultMonoParcelExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultMonoParcelExpeditionValue $return
     * @return \FSMS\Chronopost\StructType\ShippingV7Response
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultMonoParcelExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
