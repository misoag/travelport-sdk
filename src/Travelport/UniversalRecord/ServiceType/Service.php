<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\ServiceType;

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
     * @param \Travelport\UniversalRecord\StructType\SessionContext $sessionContext
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Travelport\UniversalRecord\ServiceType\Service
     */
    public function setSoapHeaderSessionContext(\Travelport\UniversalRecord\StructType\SessionContext $sessionContext, string $namespace = 'http://www.travelport.com/service/universal_v51_0', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'SessionContext', $sessionContext, $mustUnderstand, $actor);
    }
    /**
     * Sets the SupportedVersions SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Travelport\UniversalRecord\StructType\SupportedVersions $supportedVersions
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Travelport\UniversalRecord\ServiceType\Service
     */
    public function setSoapHeaderSupportedVersions(\Travelport\UniversalRecord\StructType\SupportedVersions $supportedVersions, string $namespace = 'http://www.travelport.com/service/universal_v51_0', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'SupportedVersions', $supportedVersions, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named service
     * This method has been renamed because it is defined several times but with
     * different signature
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionContext, SupportedVersions
     * - SOAPHeaderNamespaces: http://www.travelport.com/service/universal_v51_0, http://www.travelport.com/service/universal_v51_0
     * - SOAPHeaderTypes: \Travelport\UniversalRecord\StructType\SessionContext, \Travelport\UniversalRecord\StructType\SupportedVersions
     * - SOAPHeaders: required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveReq $parameters
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveRsp|bool
     */
    public function service(\Travelport\UniversalRecord\StructType\UniversalRecordRetrieveReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchReq $parameters
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchRsp|bool
     */
    public function service_4111e37120ff09df2941830aac7fcd9f(\Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq $parameters
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchRsp|bool
     */
    public function service_0349794fd2ce9d0c757e151023a88bed(\Travelport\UniversalRecord\StructType\UniversalRecordSearchReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\AckScheduleChangeReq $parameters
     * @return \Travelport\UniversalRecord\StructType\AckScheduleChangeRsp|bool
     */
    public function service_456f91b8b00170e86273bc4adfecb037(\Travelport\UniversalRecord\StructType\AckScheduleChangeReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordImportReq $parameters
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordImportRsp|bool
     */
    public function service_3efe2a29ab406edffa9c7a4657a6f5d0(\Travelport\UniversalRecord\StructType\UniversalRecordImportReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq $parameters
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp|bool
     */
    public function service_565c19bff58e49dbf86720d9738b4de8(\Travelport\UniversalRecord\StructType\UniversalRecordModifyReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordCancelReq $parameters
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordCancelRsp|bool
     */
    public function service_949ba5bad3729a3983cc47471640737b(\Travelport\UniversalRecord\StructType\UniversalRecordCancelReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq $parameters
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsRsp|bool
     */
    public function service_4377ff826e824bed049a5a2b67416aaf(\Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationDivideReq $parameters
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDivideRsp|bool
     */
    public function service_83f1c0ca6f1bc6e7542a19cb9c23cc63(\Travelport\UniversalRecord\StructType\ProviderReservationDivideReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\SavedTripCreateReq $parameters
     * @return \Travelport\UniversalRecord\StructType\SavedTripCreateRsp|bool
     */
    public function service_c1b4efeb9ba701c9fba0611d8d9a5275(\Travelport\UniversalRecord\StructType\SavedTripCreateReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\SavedTripModifyReq $parameters
     * @return \Travelport\UniversalRecord\StructType\SavedTripModifyRsp|bool
     */
    public function service_0f155582bed16d7ca5101298f328d6c4(\Travelport\UniversalRecord\StructType\SavedTripModifyReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\SavedTripRetrieveReq $parameters
     * @return \Travelport\UniversalRecord\StructType\SavedTripRetrieveRsp|bool
     */
    public function service_f6eeab680817d63e53887962c6d5ee12(\Travelport\UniversalRecord\StructType\SavedTripRetrieveReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\SavedTripDeleteReq $parameters
     * @return \Travelport\UniversalRecord\StructType\SavedTripDeleteRsp|bool
     */
    public function service_3244c193fc9a7421499e7eadf44d4c07(\Travelport\UniversalRecord\StructType\SavedTripDeleteReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\SavedTripSearchReq $parameters
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchRsp|bool
     */
    public function service_29270eaa79be99f4da92a499589142c4(\Travelport\UniversalRecord\StructType\SavedTripSearchReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq $parameters
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationRsp|bool
     */
    public function service_d816df0f45ba226c1ccd7c747d16e7ec(\Travelport\UniversalRecord\StructType\VehicleCreateReservationReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\VehicleCancelReq $parameters
     * @return \Travelport\UniversalRecord\StructType\VehicleCancelRsp|bool
     */
    public function service_359ab8977ce467c57c391c9ee02682de(\Travelport\UniversalRecord\StructType\VehicleCancelReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\HotelCreateReservationReq $parameters
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationRsp|bool
     */
    public function service_6d362ba3ccf2cdb6bed26a40b7a158c1(\Travelport\UniversalRecord\StructType\HotelCreateReservationReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\HotelCancelReq $parameters
     * @return \Travelport\UniversalRecord\StructType\HotelCancelRsp|bool
     */
    public function service_ad902d6a3193e9134b6c7344bcf05858(\Travelport\UniversalRecord\StructType\HotelCancelReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\RailCreateReservationReq $parameters
     * @return \Travelport\UniversalRecord\StructType\RailCreateReservationRsp|bool
     */
    public function service_6a708fdf98abf6ae0ae15e0ceaeea645(\Travelport\UniversalRecord\StructType\RailCreateReservationReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\AirCreateReservationReq $parameters
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationRsp|bool
     */
    public function service_1cd364ede385a0eeb57ca2d70b9a5f5c(\Travelport\UniversalRecord\StructType\AirCreateReservationReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\AirCancelReq $parameters
     * @return \Travelport\UniversalRecord\StructType\AirCancelRsp|bool
     */
    public function service_d5f0b60241e4eaa207aff6efb76b843f(\Travelport\UniversalRecord\StructType\AirCancelReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq $parameters
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentRsp|bool
     */
    public function service_dc4e6a271eeab681b09fe9abb3a42b75(\Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq $parameters
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationRsp|bool
     */
    public function service_6bd77651fc461f35d94a4e3df3d7c851(\Travelport\UniversalRecord\StructType\PassiveCreateReservationReq $parameters)
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
     * @param \Travelport\UniversalRecord\StructType\PassiveCancelReq $parameters
     * @return \Travelport\UniversalRecord\StructType\PassiveCancelRsp|bool
     */
    public function service_7ff5bf93a0111db6b49313e6f863164e(\Travelport\UniversalRecord\StructType\PassiveCancelReq $parameters)
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
     * @return \Travelport\UniversalRecord\StructType\AckScheduleChangeRsp|\Travelport\UniversalRecord\StructType\AirCancelRsp|\Travelport\UniversalRecord\StructType\AirCreateReservationRsp|\Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentRsp|\Travelport\UniversalRecord\StructType\HotelCancelRsp|\Travelport\UniversalRecord\StructType\HotelCreateReservationRsp|\Travelport\UniversalRecord\StructType\PassiveCancelRsp|\Travelport\UniversalRecord\StructType\PassiveCreateReservationRsp|\Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsRsp|\Travelport\UniversalRecord\StructType\ProviderReservationDivideRsp|\Travelport\UniversalRecord\StructType\RailCreateReservationRsp|\Travelport\UniversalRecord\StructType\SavedTripCreateRsp|\Travelport\UniversalRecord\StructType\SavedTripDeleteRsp|\Travelport\UniversalRecord\StructType\SavedTripModifyRsp|\Travelport\UniversalRecord\StructType\SavedTripRetrieveRsp|\Travelport\UniversalRecord\StructType\SavedTripSearchRsp|\Travelport\UniversalRecord\StructType\UniversalRecordCancelRsp|\Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchRsp|\Travelport\UniversalRecord\StructType\UniversalRecordImportRsp|\Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp|\Travelport\UniversalRecord\StructType\UniversalRecordRetrieveRsp|\Travelport\UniversalRecord\StructType\UniversalRecordSearchRsp|\Travelport\UniversalRecord\StructType\VehicleCancelRsp|\Travelport\UniversalRecord\StructType\VehicleCreateReservationRsp
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
