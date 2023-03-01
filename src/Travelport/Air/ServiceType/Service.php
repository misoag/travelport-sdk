<?php

declare(strict_types=1);

namespace Travelport\Air\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Service ServiceType
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Sets the SessionContext SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Travelport\Air\StructType\SessionContext $sessionContext
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Travelport\Air\ServiceType\Service
     */
    public function setSoapHeaderSessionContext(\Travelport\Air\StructType\SessionContext $sessionContext, string $namespace = 'http://www.travelport.com/service/air_v52_0', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'SessionContext', $sessionContext, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named service
     * This method has been renamed because it is defined several times but with
     * different signature
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionContext
     * - SOAPHeaderNamespaces: http://www.travelport.com/service/air_v52_0
     * - SOAPHeaderTypes: \Travelport\Air\StructType\SessionContext
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Travelport\Air\StructType\AirRepriceReq $parameters
     * @return \Travelport\Air\StructType\AirRepriceRsp|bool
     */
    public function service(\Travelport\Air\StructType\AirRepriceReq $parameters)
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
     * @param \Travelport\Air\StructType\ScheduleSearchReq $parameters
     * @return \Travelport\Air\StructType\ScheduleSearchRsp|bool
     */
    public function service_6ce2096efc70a97e3c15bfe5ee0af892(\Travelport\Air\StructType\ScheduleSearchReq $parameters)
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
     * @param \Travelport\Air\StructType\LowFareSearchReq $parameters
     * @return \Travelport\Air\StructType\LowFareSearchRsp|bool
     */
    public function service_f2e510f1d80dba4111e90099b1c83b8c(\Travelport\Air\StructType\LowFareSearchReq $parameters)
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
     * @param \Travelport\Air\StructType\AirPriceReq $parameters
     * @return \Travelport\Air\StructType\AirPriceRsp|bool
     */
    public function service_5ef418b1aa42cfe7071fe870f8f6231c(\Travelport\Air\StructType\AirPriceReq $parameters)
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
     * @param \Travelport\Air\StructType\AirFareRulesReq $parameters
     * @return \Travelport\Air\StructType\AirFareRulesRsp|bool
     */
    public function service_3bcee713fea283eb85826d65b8757c29(\Travelport\Air\StructType\AirFareRulesReq $parameters)
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
     * @param \Travelport\Air\StructType\AvailabilitySearchReq $parameters
     * @return \Travelport\Air\StructType\AvailabilitySearchRsp|bool
     */
    public function service_1121af370577e87ce15bec1f0cafa231(\Travelport\Air\StructType\AvailabilitySearchReq $parameters)
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
     * @param \Travelport\Air\StructType\AirFareDisplayReq $parameters
     * @return \Travelport\Air\StructType\AirFareDisplayRsp|bool
     */
    public function service_d4fa59d7a9a3ef9e9b955dc1764d66e7(\Travelport\Air\StructType\AirFareDisplayReq $parameters)
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
     * @param \Travelport\Air\StructType\SeatMapReq $parameters
     * @return \Travelport\Air\StructType\SeatMapRsp|bool
     */
    public function service_1419844cfa4b1734a1753b8cdea403d4(\Travelport\Air\StructType\SeatMapReq $parameters)
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
     * @param \Travelport\Air\StructType\AirRefundQuoteReq $parameters
     * @return \Travelport\Air\StructType\AirRefundQuoteRsp|bool
     */
    public function service_311a749cdffe80e69cc668fd48754e9a(\Travelport\Air\StructType\AirRefundQuoteReq $parameters)
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
     * @param \Travelport\Air\StructType\AirRefundReq $parameters
     * @return \Travelport\Air\StructType\AirRefundRsp|bool
     */
    public function service_6644752676801751c92ee2f10b90153c(\Travelport\Air\StructType\AirRefundReq $parameters)
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
     * @param \Travelport\Air\StructType\AirTicketingReq $parameters
     * @return \Travelport\Air\StructType\AirTicketingRsp|bool
     */
    public function service_8f0da48aa194ee725e96affad55f12e6(\Travelport\Air\StructType\AirTicketingReq $parameters)
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
     * @param \Travelport\Air\StructType\AirVoidDocumentReq $parameters
     * @return \Travelport\Air\StructType\AirVoidDocumentRsp|bool
     */
    public function service_174ec3273e36269b41dd7dbb95fa12e7(\Travelport\Air\StructType\AirVoidDocumentReq $parameters)
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
     * @param \Travelport\Air\StructType\AirRetrieveDocumentReq $parameters
     * @return \Travelport\Air\StructType\AirRetrieveDocumentRsp|bool
     */
    public function service_fc66b026f74ead46e84657b6640c2bb3(\Travelport\Air\StructType\AirRetrieveDocumentReq $parameters)
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
     * @param \Travelport\Air\StructType\AirExchangeReq $parameters
     * @return \Travelport\Air\StructType\AirExchangeRsp|bool
     */
    public function service_0ae9c8628c39ed2acd430024a47c486a(\Travelport\Air\StructType\AirExchangeReq $parameters)
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
     * @param \Travelport\Air\StructType\AirExchangeQuoteReq $parameters
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp|bool
     */
    public function service_c8e5a303f0d3bb34d98141b468e776bc(\Travelport\Air\StructType\AirExchangeQuoteReq $parameters)
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
     * @param \Travelport\Air\StructType\AirExchangeMultiQuoteReq $parameters
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteRsp|bool
     */
    public function service_675c723c57dc00432ad1fb2168a2c769(\Travelport\Air\StructType\AirExchangeMultiQuoteReq $parameters)
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
     * @param \Travelport\Air\StructType\AirExchangeTicketingReq $parameters
     * @return \Travelport\Air\StructType\AirExchangeTicketingRsp|bool
     */
    public function service_dc4fd4f07aaa0edc91f17cf83e7537bf(\Travelport\Air\StructType\AirExchangeTicketingReq $parameters)
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
     * @param \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityReq $parameters
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityRsp|bool
     */
    public function service_10c615d42df657921462ae47427a7ae7(\Travelport\Air\StructType\AirMerchandisingOfferAvailabilityReq $parameters)
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
     * @param \Travelport\Air\StructType\AirUpsellSearchReq $parameters
     * @return \Travelport\Air\StructType\AirUpsellSearchRsp|bool
     */
    public function service_7c5cf06d2ed3e8afe46d6d5d40038025(\Travelport\Air\StructType\AirUpsellSearchReq $parameters)
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
     * @param \Travelport\Air\StructType\FlightTimeTableReq $parameters
     * @return \Travelport\Air\StructType\FlightTimeTableRsp|bool
     */
    public function service_444ccc4f4a57243ed48b31e7b02cd6a9(\Travelport\Air\StructType\FlightTimeTableReq $parameters)
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
     * @param \Travelport\Air\StructType\AirPrePayReq $parameters
     * @return \Travelport\Air\StructType\AirPrePayRsp|bool
     */
    public function service_7151d232925a6a888666303d1c0db2b5(\Travelport\Air\StructType\AirPrePayReq $parameters)
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
     * @param \Travelport\Air\StructType\EMDRetrieveReq $parameters
     * @return \Travelport\Air\StructType\EMDRetrieveRsp|bool
     */
    public function service_66f57287c5d29d5b2a03b4ae71b71913(\Travelport\Air\StructType\EMDRetrieveReq $parameters)
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
     * @param \Travelport\Air\StructType\EMDIssuanceReq $parameters
     * @return \Travelport\Air\StructType\EMDIssuanceRsp|bool
     */
    public function service_ab33b474765d62e89d5c276bd44e51fa(\Travelport\Air\StructType\EMDIssuanceReq $parameters)
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
     * @param \Travelport\Air\StructType\AirMerchandisingDetailsReq $parameters
     * @return \Travelport\Air\StructType\AirMerchandisingDetailsRsp|bool
     */
    public function service_4e49246cdc2546816f14fa1532664db8(\Travelport\Air\StructType\AirMerchandisingDetailsReq $parameters)
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
     * @param \Travelport\Air\StructType\AirExchangeEligibilityReq $parameters
     * @return \Travelport\Air\StructType\AirExchangeEligibilityRsp|bool
     */
    public function service_631de50d3ea0642ff231a356c4eccf1f(\Travelport\Air\StructType\AirExchangeEligibilityReq $parameters)
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
     * @param \Travelport\Air\StructType\FlightInformationReq $parameters
     * @return \Travelport\Air\StructType\FlightInformationRsp|bool
     */
    public function service_a30f9bb2ffdfa373415fa3298d709994(\Travelport\Air\StructType\FlightInformationReq $parameters)
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
     * @param \Travelport\Air\StructType\FlightDetailsReq $parameters
     * @return \Travelport\Air\StructType\FlightDetailsRsp|bool
     */
    public function service_2346c4e2c9cb5fd2a6f890d3b349e386(\Travelport\Air\StructType\FlightDetailsReq $parameters)
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
     * @return \Travelport\Air\StructType\AirExchangeEligibilityRsp|\Travelport\Air\StructType\AirExchangeMultiQuoteRsp|\Travelport\Air\StructType\AirExchangeQuoteRsp|\Travelport\Air\StructType\AirExchangeRsp|\Travelport\Air\StructType\AirExchangeTicketingRsp|\Travelport\Air\StructType\AirFareDisplayRsp|\Travelport\Air\StructType\AirFareRulesRsp|\Travelport\Air\StructType\AirMerchandisingDetailsRsp|\Travelport\Air\StructType\AirMerchandisingOfferAvailabilityRsp|\Travelport\Air\StructType\AirPrePayRsp|\Travelport\Air\StructType\AirPriceRsp|\Travelport\Air\StructType\AirRefundQuoteRsp|\Travelport\Air\StructType\AirRefundRsp|\Travelport\Air\StructType\AirRepriceRsp|\Travelport\Air\StructType\AirRetrieveDocumentRsp|\Travelport\Air\StructType\AirTicketingRsp|\Travelport\Air\StructType\AirUpsellSearchRsp|\Travelport\Air\StructType\AirVoidDocumentRsp|\Travelport\Air\StructType\AvailabilitySearchRsp|\Travelport\Air\StructType\EMDIssuanceRsp|\Travelport\Air\StructType\EMDRetrieveRsp|\Travelport\Air\StructType\FlightDetailsRsp|\Travelport\Air\StructType\FlightInformationRsp|\Travelport\Air\StructType\FlightTimeTableRsp|\Travelport\Air\StructType\LowFareSearchRsp|\Travelport\Air\StructType\ScheduleSearchRsp|\Travelport\Air\StructType\SeatMapRsp
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
