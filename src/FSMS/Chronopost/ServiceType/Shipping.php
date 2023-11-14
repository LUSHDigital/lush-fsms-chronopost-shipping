<?php

declare(strict_types=1);

namespace FSMS\Chronopost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Shipping ServiceType
 * @subpackage Services
 */
class Shipping extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClientPC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingWithReservationAndESDWithRefClientPC $parameters
     * @return \FSMS\Chronopost\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClientPC(\FSMS\Chronopost\StructType\ShippingWithReservationAndESDWithRefClientPC $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationAndESDWithRefClientPC = $this->getSoapClient()->__soapCall('shippingWithReservationAndESDWithRefClientPC', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservationAndESDWithRefClientPC;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingV3 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingV3Response|bool
     */
    public function shippingV3(\FSMS\Chronopost\StructType\ShippingV3 $parameters)
    {
        try {
            $this->setResult($resultShippingV3 = $this->getSoapClient()->__soapCall('shippingV3', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingV2 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingV2Response|bool
     */
    public function shippingV2(\FSMS\Chronopost\StructType\ShippingV2 $parameters)
    {
        try {
            $this->setResult($resultShippingV2 = $this->getSoapClient()->__soapCall('shippingV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithESDOnlyV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingWithESDOnlyV2 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnlyV2Response|bool
     */
    public function shippingWithESDOnlyV2(\FSMS\Chronopost\StructType\ShippingWithESDOnlyV2 $parameters)
    {
        try {
            $this->setResult($resultShippingWithESDOnlyV2 = $this->getSoapClient()->__soapCall('shippingWithESDOnlyV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithESDOnlyV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingMultiParcelV6 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV6Response|bool
     */
    public function shippingMultiParcelV6(\FSMS\Chronopost\StructType\ShippingMultiParcelV6 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV6 = $this->getSoapClient()->__soapCall('shippingMultiParcelV6', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV6;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingMultiParcelV5 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV5Response|bool
     */
    public function shippingMultiParcelV5(\FSMS\Chronopost\StructType\ShippingMultiParcelV5 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV5 = $this->getSoapClient()->__soapCall('shippingMultiParcelV5', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV5;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV7
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingV7 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingV7Response|bool
     */
    public function shippingV7(\FSMS\Chronopost\StructType\ShippingV7 $parameters)
    {
        try {
            $this->setResult($resultShippingV7 = $this->getSoapClient()->__soapCall('shippingV7', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV7;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingMultiParcelV4 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV4Response|bool
     */
    public function shippingMultiParcelV4(\FSMS\Chronopost\StructType\ShippingMultiParcelV4 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV4 = $this->getSoapClient()->__soapCall('shippingMultiParcelV4', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV4;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingV6 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingV6Response|bool
     */
    public function shippingV6(\FSMS\Chronopost\StructType\ShippingV6 $parameters)
    {
        try {
            $this->setResult($resultShippingV6 = $this->getSoapClient()->__soapCall('shippingV6', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV6;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingMultiParcelV3 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV3Response|bool
     */
    public function shippingMultiParcelV3(\FSMS\Chronopost\StructType\ShippingMultiParcelV3 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV3 = $this->getSoapClient()->__soapCall('shippingMultiParcelV3', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingV5 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingV5Response|bool
     */
    public function shippingV5(\FSMS\Chronopost\StructType\ShippingV5 $parameters)
    {
        try {
            $this->setResult($resultShippingV5 = $this->getSoapClient()->__soapCall('shippingV5', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV5;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingMultiParcelV2 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelV2Response|bool
     */
    public function shippingMultiParcelV2(\FSMS\Chronopost\StructType\ShippingMultiParcelV2 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV2 = $this->getSoapClient()->__soapCall('shippingMultiParcelV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingV4 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingV4Response|bool
     */
    public function shippingV4(\FSMS\Chronopost\StructType\ShippingV4 $parameters)
    {
        try {
            $this->setResult($resultShippingV4 = $this->getSoapClient()->__soapCall('shippingV4', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingV4;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithESDOnly
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingWithESDOnly $parameters
     * @return \FSMS\Chronopost\StructType\ShippingWithESDOnlyResponse|bool
     */
    public function shippingWithESDOnly(\FSMS\Chronopost\StructType\ShippingWithESDOnly $parameters)
    {
        try {
            $this->setResult($resultShippingWithESDOnly = $this->getSoapClient()->__soapCall('shippingWithESDOnly', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithESDOnly;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelWithReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingMultiParcelWithReservation $parameters
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelWithReservationResponse|bool
     */
    public function shippingMultiParcelWithReservation(\FSMS\Chronopost\StructType\ShippingMultiParcelWithReservation $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservation = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelWithReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClient
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingWithReservationAndESDWithRefClient $parameters
     * @return \FSMS\Chronopost\StructType\ShippingWithReservationAndESDWithRefClientResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClient(\FSMS\Chronopost\StructType\ShippingWithReservationAndESDWithRefClient $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationAndESDWithRefClient = $this->getSoapClient()->__soapCall('shippingWithReservationAndESDWithRefClient', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservationAndESDWithRefClient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingMultiParcel $parameters
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelResponse|bool
     */
    public function shippingMultiParcel(\FSMS\Chronopost\StructType\ShippingMultiParcel $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcel = $this->getSoapClient()->__soapCall('shippingMultiParcel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shipping
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\Shipping $parameters
     * @return \FSMS\Chronopost\StructType\ShippingResponse|bool
     */
    public function shipping(\FSMS\Chronopost\StructType\Shipping $parameters)
    {
        try {
            $this->setResult($resultShipping = $this->getSoapClient()->__soapCall('shipping', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingMultiParcelWithReservationV3 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelWithReservationV3Response|bool
     */
    public function shippingMultiParcelWithReservationV3(\FSMS\Chronopost\StructType\ShippingMultiParcelWithReservationV3 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservationV3 = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservationV3', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelWithReservationV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingMultiParcelWithReservationV2 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelWithReservationV2Response|bool
     */
    public function shippingMultiParcelWithReservationV2(\FSMS\Chronopost\StructType\ShippingMultiParcelWithReservationV2 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservationV2 = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservationV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingMultiParcelWithReservationV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithReservationV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingWithReservationV2 $parameters
     * @return \FSMS\Chronopost\StructType\ShippingWithReservationV2Response|bool
     */
    public function shippingWithReservationV2(\FSMS\Chronopost\StructType\ShippingWithReservationV2 $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationV2 = $this->getSoapClient()->__soapCall('shippingWithReservationV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservationV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\Chronopost\StructType\ShippingWithReservation $parameters
     * @return \FSMS\Chronopost\StructType\ShippingWithReservationResponse|bool
     */
    public function shippingWithReservation(\FSMS\Chronopost\StructType\ShippingWithReservation $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservation = $this->getSoapClient()->__soapCall('shippingWithReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShippingWithReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \FSMS\Chronopost\StructType\ShippingMultiParcelResponse|\FSMS\Chronopost\StructType\ShippingMultiParcelV2Response|\FSMS\Chronopost\StructType\ShippingMultiParcelV3Response|\FSMS\Chronopost\StructType\ShippingMultiParcelV4Response|\FSMS\Chronopost\StructType\ShippingMultiParcelV5Response|\FSMS\Chronopost\StructType\ShippingMultiParcelV6Response|\FSMS\Chronopost\StructType\ShippingMultiParcelWithReservationResponse|\FSMS\Chronopost\StructType\ShippingMultiParcelWithReservationV2Response|\FSMS\Chronopost\StructType\ShippingMultiParcelWithReservationV3Response|\FSMS\Chronopost\StructType\ShippingResponse|\FSMS\Chronopost\StructType\ShippingV2Response|\FSMS\Chronopost\StructType\ShippingV3Response|\FSMS\Chronopost\StructType\ShippingV4Response|\FSMS\Chronopost\StructType\ShippingV5Response|\FSMS\Chronopost\StructType\ShippingV6Response|\FSMS\Chronopost\StructType\ShippingV7Response|\FSMS\Chronopost\StructType\ShippingWithESDOnlyResponse|\FSMS\Chronopost\StructType\ShippingWithESDOnlyV2Response|\FSMS\Chronopost\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|\FSMS\Chronopost\StructType\ShippingWithReservationAndESDWithRefClientResponse|\FSMS\Chronopost\StructType\ShippingWithReservationResponse|\FSMS\Chronopost\StructType\ShippingWithReservationV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
