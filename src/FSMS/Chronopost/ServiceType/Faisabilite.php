<?php

declare(strict_types=1);

namespace FSMS\Chronopost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Faisabilite ServiceType
 * @subpackage Services
 */
class Faisabilite extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named faisabiliteESD
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\FaisabiliteESD $parameters
     * @return \FSMS\Chronopost\StructType\FaisabiliteESDResponse|bool
     */
    public function faisabiliteESD(\FSMS\Chronopost\StructType\FaisabiliteESD $parameters)
    {
        try {
            $this->setResult($resultFaisabiliteESD = $this->getSoapClient()->__soapCall('faisabiliteESD', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFaisabiliteESD;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \FSMS\Chronopost\StructType\FaisabiliteESDResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
