<?php

declare(strict_types=1);

namespace Travelport\Hotel\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Service ServiceType
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    public function service($parameters)
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
     * @param \Travelport\Hotel\StructType\HotelMediaLinksReq $parameters
     * @return \Travelport\Hotel\StructType\HotelMediaLinksRsp|bool
     */
    public function service_7ef71e3598034fd211addede8e06bba6(\Travelport\Hotel\StructType\HotelMediaLinksReq $parameters)
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
     * @param \Travelport\Hotel\StructType\HotelDetailsReq $parameters
     * @return \Travelport\Hotel\StructType\HotelDetailsRsp|bool
     */
    public function service_55dfd2154e264648fd5fab19f4534d4d(\Travelport\Hotel\StructType\HotelDetailsReq $parameters)
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
     * @param \Travelport\Hotel\StructType\HotelRetrieveReq $parameters
     * @return \Travelport\Hotel\StructType\HotelRetrieveRsp|bool
     */
    public function service_22e6730693bcb6f02bdcde297d84ad04(\Travelport\Hotel\StructType\HotelRetrieveReq $parameters)
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
     * @param \Travelport\Hotel\StructType\HotelRulesReq $parameters
     * @return \Travelport\Hotel\StructType\HotelRulesRsp|bool
     */
    public function service_4fa667a3acace189a655fb3de494db06(\Travelport\Hotel\StructType\HotelRulesReq $parameters)
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
     * @param \Travelport\Hotel\StructType\HotelUpsellDetailsReq $parameters
     * @return \Travelport\Hotel\StructType\HotelUpsellDetailsRsp|bool
     */
    public function service_6755f1c71f7e8c5848c46b6d8a94109a(\Travelport\Hotel\StructType\HotelUpsellDetailsReq $parameters)
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
     * @param \Travelport\Hotel\StructType\HotelKeywordReq $parameters
     * @return \Travelport\Hotel\StructType\HotelKeywordRsp|bool
     */
    public function service_220573ccee144878268677c7fa327480(\Travelport\Hotel\StructType\HotelKeywordReq $parameters)
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
     * @param \Travelport\Hotel\StructType\HotelSuperShopperReq $parameters
     * @return \Travelport\Hotel\StructType\HotelSuperShopperRsp|bool
     */
    public function service_7fa91cbcf26a7d6938c755697a70b888(\Travelport\Hotel\StructType\HotelSuperShopperReq $parameters)
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
     * @return \Travelport\Hotel\StructType\BaseHotelSearchRsp|\Travelport\Hotel\StructType\HotelDetailsRsp|\Travelport\Hotel\StructType\HotelKeywordRsp|\Travelport\Hotel\StructType\HotelMediaLinksRsp|\Travelport\Hotel\StructType\HotelRetrieveRsp|\Travelport\Hotel\StructType\HotelRulesRsp|\Travelport\Hotel\StructType\HotelSuperShopperRsp|\Travelport\Hotel\StructType\HotelUpsellDetailsRsp
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
