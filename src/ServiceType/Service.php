<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Service ServiceType
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named service
     * This method has been renamed because it is defined several times but with
     * different signature
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\HotelSearchAvailabilityReq $parameters
     * @return \StructType\BaseHotelSearchRsp|bool
     */
    public function service(\StructType\HotelSearchAvailabilityReq $parameters)
    {
        try {
            $this->setResult($resultService = $this->getSoapClient()->__soapCall('service', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named service
     * This method has been renamed because it is defined several times but with
     * different signature
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\HotelMediaLinksReq $parameters
     * @return \StructType\HotelMediaLinksRsp|bool
     */
    public function service_7ef71e3598034fd211addede8e06bba6(\StructType\HotelMediaLinksReq $parameters)
    {
        try {
            $this->setResult($resultService = $this->getSoapClient()->__soapCall('service', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named service
     * This method has been renamed because it is defined several times but with
     * different signature
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\HotelDetailsReq $parameters
     * @return \StructType\HotelDetailsRsp|bool
     */
    public function service_55dfd2154e264648fd5fab19f4534d4d(\StructType\HotelDetailsReq $parameters)
    {
        try {
            $this->setResult($resultService = $this->getSoapClient()->__soapCall('service', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named service
     * This method has been renamed because it is defined several times but with
     * different signature
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\HotelRetrieveReq $parameters
     * @return \StructType\HotelRetrieveRsp|bool
     */
    public function service_22e6730693bcb6f02bdcde297d84ad04(\StructType\HotelRetrieveReq $parameters)
    {
        try {
            $this->setResult($resultService = $this->getSoapClient()->__soapCall('service', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named service
     * This method has been renamed because it is defined several times but with
     * different signature
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\HotelRulesReq $parameters
     * @return \StructType\HotelRulesRsp|bool
     */
    public function service_4fa667a3acace189a655fb3de494db06(\StructType\HotelRulesReq $parameters)
    {
        try {
            $this->setResult($resultService = $this->getSoapClient()->__soapCall('service', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named service
     * This method has been renamed because it is defined several times but with
     * different signature
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\HotelUpsellDetailsReq $parameters
     * @return \StructType\HotelUpsellDetailsRsp|bool
     */
    public function service_6755f1c71f7e8c5848c46b6d8a94109a(\StructType\HotelUpsellDetailsReq $parameters)
    {
        try {
            $this->setResult($resultService = $this->getSoapClient()->__soapCall('service', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named service
     * This method has been renamed because it is defined several times but with
     * different signature
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\HotelKeywordReq $parameters
     * @return \StructType\HotelKeywordRsp|bool
     */
    public function service_220573ccee144878268677c7fa327480(\StructType\HotelKeywordReq $parameters)
    {
        try {
            $this->setResult($resultService = $this->getSoapClient()->__soapCall('service', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named service
     * This method has been renamed because it is defined several times but with
     * different signature
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\HotelSuperShopperReq $parameters
     * @return \StructType\HotelSuperShopperRsp|bool
     */
    public function service_7fa91cbcf26a7d6938c755697a70b888(\StructType\HotelSuperShopperReq $parameters)
    {
        try {
            $this->setResult($resultService = $this->getSoapClient()->__soapCall('service', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\BaseHotelSearchRsp|\StructType\HotelDetailsRsp|\StructType\HotelKeywordRsp|\StructType\HotelMediaLinksRsp|\StructType\HotelRetrieveRsp|\StructType\HotelRulesRsp|\StructType\HotelSuperShopperRsp|\StructType\HotelUpsellDetailsRsp
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
