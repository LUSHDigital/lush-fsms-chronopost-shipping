<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultShippingInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultShippingInfo extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\Error|null
     */
    protected ?\FSMS\Chronopost\StructType\Error $error = null;
    /**
     * The shippingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ShippingInfo|null
     */
    protected ?\FSMS\Chronopost\StructType\ShippingInfo $shippingInfo = null;
    /**
     * Constructor method for resultShippingInfo
     * @uses ResultShippingInfo::setError()
     * @uses ResultShippingInfo::setShippingInfo()
     * @param \FSMS\Chronopost\StructType\Error $error
     * @param \FSMS\Chronopost\StructType\ShippingInfo $shippingInfo
     */
    public function __construct(?\FSMS\Chronopost\StructType\Error $error = null, ?\FSMS\Chronopost\StructType\ShippingInfo $shippingInfo = null)
    {
        $this
            ->setError($error)
            ->setShippingInfo($shippingInfo);
    }
    /**
     * Get error value
     * @return \FSMS\Chronopost\StructType\Error|null
     */
    public function getError(): ?\FSMS\Chronopost\StructType\Error
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \FSMS\Chronopost\StructType\Error $error
     * @return \FSMS\Chronopost\StructType\ResultShippingInfo
     */
    public function setError(?\FSMS\Chronopost\StructType\Error $error = null): self
    {
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get shippingInfo value
     * @return \FSMS\Chronopost\StructType\ShippingInfo|null
     */
    public function getShippingInfo(): ?\FSMS\Chronopost\StructType\ShippingInfo
    {
        return $this->shippingInfo;
    }
    /**
     * Set shippingInfo value
     * @param \FSMS\Chronopost\StructType\ShippingInfo $shippingInfo
     * @return \FSMS\Chronopost\StructType\ResultShippingInfo
     */
    public function setShippingInfo(?\FSMS\Chronopost\StructType\ShippingInfo $shippingInfo = null): self
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
}
