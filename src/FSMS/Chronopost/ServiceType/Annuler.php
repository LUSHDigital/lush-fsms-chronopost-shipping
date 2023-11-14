<?php

declare(strict_types=1);

namespace FSMS\Chronopost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Annuler ServiceType
 * @subpackage Services
 */
class Annuler extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named annulerEnlevements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\AnnulerEnlevements $parameters
     * @return \FSMS\Chronopost\StructType\AnnulerEnlevementsResponse|bool
     */
    public function annulerEnlevements(\FSMS\Chronopost\StructType\AnnulerEnlevements $parameters)
    {
        try {
            $this->setResult($resultAnnulerEnlevements = $this->getSoapClient()->__soapCall('annulerEnlevements', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnulerEnlevements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \FSMS\Chronopost\StructType\AnnulerEnlevementsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
