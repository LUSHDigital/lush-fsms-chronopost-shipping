<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevementResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevementResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RechercherContraintesEnlevementResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\EsdResultContraintesAgenceValue|null
     */
    protected ?\FSMS\Chronopost\StructType\EsdResultContraintesAgenceValue $return = null;
    /**
     * Constructor method for rechercherContraintesEnlevementResponse
     * @uses RechercherContraintesEnlevementResponse::setReturn()
     * @param \FSMS\Chronopost\StructType\EsdResultContraintesAgenceValue $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\EsdResultContraintesAgenceValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\EsdResultContraintesAgenceValue|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\EsdResultContraintesAgenceValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\EsdResultContraintesAgenceValue $return
     * @return \FSMS\Chronopost\StructType\RechercherContraintesEnlevementResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\EsdResultContraintesAgenceValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
