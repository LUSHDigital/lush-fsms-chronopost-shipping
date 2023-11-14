<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEuropeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEuropeResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreerEnlevementEuropeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultPickupOrCollectionRequest|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultPickupOrCollectionRequest $return = null;
    /**
     * Constructor method for creerEnlevementEuropeResponse
     * @uses CreerEnlevementEuropeResponse::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultPickupOrCollectionRequest $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultPickupOrCollectionRequest $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultPickupOrCollectionRequest|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultPickupOrCollectionRequest
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultPickupOrCollectionRequest $return
     * @return \FSMS\Chronopost\StructType\CreerEnlevementEuropeResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultPickupOrCollectionRequest $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
