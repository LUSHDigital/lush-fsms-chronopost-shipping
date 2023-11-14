<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESDResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FaisabiliteESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ResultFaisabiliteESD|null
     */
    protected ?\FSMS\Chronopost\StructType\ResultFaisabiliteESD $return = null;
    /**
     * Constructor method for faisabiliteESDResponse
     * @uses FaisabiliteESDResponse::setReturn()
     * @param \FSMS\Chronopost\StructType\ResultFaisabiliteESD $return
     */
    public function __construct(?\FSMS\Chronopost\StructType\ResultFaisabiliteESD $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\Chronopost\StructType\ResultFaisabiliteESD|null
     */
    public function getReturn(): ?\FSMS\Chronopost\StructType\ResultFaisabiliteESD
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\Chronopost\StructType\ResultFaisabiliteESD $return
     * @return \FSMS\Chronopost\StructType\FaisabiliteESDResponse
     */
    public function setReturn(?\FSMS\Chronopost\StructType\ResultFaisabiliteESD $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
