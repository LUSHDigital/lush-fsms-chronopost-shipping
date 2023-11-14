<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementNationalResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementNationalResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreerEnlevementNationalResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultEnlevementNational|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultEnlevementNational $return = null;
    /**
     * Constructor method for creerEnlevementNationalResponse
     * @uses CreerEnlevementNationalResponse::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultEnlevementNational $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultEnlevementNational $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultEnlevementNational|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultEnlevementNational
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultEnlevementNational $return
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNationalResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultEnlevementNational $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
