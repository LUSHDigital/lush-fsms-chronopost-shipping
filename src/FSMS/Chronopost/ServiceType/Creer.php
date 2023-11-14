<?php

declare(strict_types=1);

namespace FSMS\Chronopost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Creer ServiceType
 * @subpackage Services
 */
class Creer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named creerEnlevementNational
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\CreerEnlevementNational $parameters
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNationalResponse|bool
     */
    public function creerEnlevementNational(\FSMS\Chronopost\StructType\CreerEnlevementNational $parameters)
    {
        try {
            $this->setResult($resultCreerEnlevementNational = $this->getSoapClient()->__soapCall('creerEnlevementNational', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreerEnlevementNational;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named creerEnlevementEurope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\CreerEnlevementEurope $parameters
     * @return \FSMS\Chronopost\StructType\CreerEnlevementEuropeResponse|bool
     */
    public function creerEnlevementEurope(\FSMS\Chronopost\StructType\CreerEnlevementEurope $parameters)
    {
        try {
            $this->setResult($resultCreerEnlevementEurope = $this->getSoapClient()->__soapCall('creerEnlevementEurope', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreerEnlevementEurope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \FSMS\Chronopost\StructType\CreerEnlevementEuropeResponse|\FSMS\Chronopost\StructType\CreerEnlevementNationalResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
