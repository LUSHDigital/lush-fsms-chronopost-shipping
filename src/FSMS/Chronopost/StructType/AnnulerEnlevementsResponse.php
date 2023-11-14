<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevementsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevementsResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnulerEnlevementsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultAnnulerEnlevement|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultAnnulerEnlevement $return = null;
    /**
     * Constructor method for annulerEnlevementsResponse
     * @uses AnnulerEnlevementsResponse::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultAnnulerEnlevement $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultAnnulerEnlevement $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultAnnulerEnlevement|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultAnnulerEnlevement
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultAnnulerEnlevement $return
     * @return \FSMS\Chronopost\StructType\AnnulerEnlevementsResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultAnnulerEnlevement $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
