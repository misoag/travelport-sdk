<?php

declare(strict_types=1);

namespace Travelport\Util\ServiceType;

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
     * @param \Travelport\Util\StructType\CreditCardAuthReq $parameters
     * @return \Travelport\Util\StructType\CreditCardAuthRsp|bool
     */
    public function service(\Travelport\Util\StructType\CreditCardAuthReq $parameters)
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
     * @param \Travelport\Util\StructType\CreateAgencyFeeMcoReq $parameters
     * @return \Travelport\Util\StructType\CreateAgencyFeeMcoRsp|bool
     */
    public function service_ff2fbd0cb66f20c9e6143622c67b06e7(\Travelport\Util\StructType\CreateAgencyFeeMcoReq $parameters)
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
     * @param \Travelport\Util\StructType\McoVoidReq $parameters
     * @return \Travelport\Util\StructType\McoVoidRsp|bool
     */
    public function service_1012f8108f401f52a4f391021342de90(\Travelport\Util\StructType\McoVoidReq $parameters)
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
     * @param \Travelport\Util\StructType\McoSearchReq $parameters
     * @return \Travelport\Util\StructType\McoSearchRsp|bool
     */
    public function service_bc6fb824a094f9b2b62e638fd69448f6(\Travelport\Util\StructType\McoSearchReq $parameters)
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
     * @param \Travelport\Util\StructType\MirReportRetrieveReq $parameters
     * @return \Travelport\Util\StructType\MirReportRetrieveRsp|bool
     */
    public function service_0b80a7a315cb95cb2f96364693b5a4bb(\Travelport\Util\StructType\MirReportRetrieveReq $parameters)
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
     * @param \Travelport\Util\StructType\MctCountReq $parameters
     * @return \Travelport\Util\StructType\MctCountRsp|bool
     */
    public function service_5fb10a9204c629542d10afda45b725e4(\Travelport\Util\StructType\MctCountReq $parameters)
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
     * @param \Travelport\Util\StructType\MctLookupReq $parameters
     * @return \Travelport\Util\StructType\MctLookupRsp|bool
     */
    public function service_afe44ed2fdd1115b05fd928a5caf2b64(\Travelport\Util\StructType\MctLookupReq $parameters)
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
     * @param \Travelport\Util\StructType\CalculateTaxReq $parameters
     * @return \Travelport\Util\StructType\CalculateTaxRsp|bool
     */
    public function service_740fb53f6a4bffbf87d1473e6d0199dd(\Travelport\Util\StructType\CalculateTaxReq $parameters)
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
     * @param \Travelport\Util\StructType\UpsellAdminReq $parameters
     * @return \Travelport\Util\StructType\UpsellAdminRsp|bool
     */
    public function service_9fc238d7c7269a0ba7bb105dac825dc5(\Travelport\Util\StructType\UpsellAdminReq $parameters)
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
     * @param \Travelport\Util\StructType\BrandedFareAdminReq $parameters
     * @return \Travelport\Util\StructType\BrandedFareAdminRsp|bool
     */
    public function service_101202a1089bfa3594f343c21c3b7f5b(\Travelport\Util\StructType\BrandedFareAdminReq $parameters)
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
     * @param \Travelport\Util\StructType\BrandedFareSearchReq $parameters
     * @return \Travelport\Util\StructType\BrandedFareSearchRsp|bool
     */
    public function service_912c7685462e28d62654642b2658ad01(\Travelport\Util\StructType\BrandedFareSearchReq $parameters)
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
     * @param \Travelport\Util\StructType\UpsellSearchReq $parameters
     * @return \Travelport\Util\StructType\UpsellSearchRsp|bool
     */
    public function service_8122e2950dcd0d969fbf33c414dbd574(\Travelport\Util\StructType\UpsellSearchReq $parameters)
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
     * @param \Travelport\Util\StructType\ContentProviderRetrieveReq $parameters
     * @return \Travelport\Util\StructType\ContentProviderRetrieveRsp|bool
     */
    public function service_c5fb72d8261d096358115d437b0d3a18(\Travelport\Util\StructType\ContentProviderRetrieveReq $parameters)
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
     * @param \Travelport\Util\StructType\CurrencyConversionReq $parameters
     * @return \Travelport\Util\StructType\CurrencyConversionRsp|bool
     */
    public function service_15a6886d6799ff9a497e8fe2f2d2c2ae(\Travelport\Util\StructType\CurrencyConversionReq $parameters)
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
     * @param \Travelport\Util\StructType\ReferenceDataRetrieveReq $parameters
     * @return \Travelport\Util\StructType\ReferenceDataRetrieveRsp|bool
     */
    public function service_25c3c99d51cdc43c4f817c55d4429363(\Travelport\Util\StructType\ReferenceDataRetrieveReq $parameters)
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
     * @param \Travelport\Util\StructType\ReferenceDataSearchReq $parameters
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp|bool
     */
    public function service_c733f7f9120e84b5d6ba583c41bb6367(\Travelport\Util\StructType\ReferenceDataSearchReq $parameters)
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
     * @param \Travelport\Util\StructType\ReferenceDataUpdateReq $parameters
     * @return \Travelport\Util\StructType\ReferenceDataUpdateRsp|bool
     */
    public function service_914efd07c28972acbdca13e4c7d43ffd(\Travelport\Util\StructType\ReferenceDataUpdateReq $parameters)
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
     * @param \Travelport\Util\StructType\AgencyServiceFeeCreateReq $parameters
     * @return \Travelport\Util\StructType\AgencyServiceFeeCreateRsp|bool
     */
    public function service_1eb20c3424ae723f48b455d7fef33206(\Travelport\Util\StructType\AgencyServiceFeeCreateReq $parameters)
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
     * @param \Travelport\Util\StructType\FindEmployeesOnFlightReq $parameters
     * @return \Travelport\Util\StructType\FindEmployeesOnFlightRsp|bool
     */
    public function service_b602b78f29382cf89acf0f463ceb7e23(\Travelport\Util\StructType\FindEmployeesOnFlightReq $parameters)
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
     * @return \Travelport\Util\StructType\AgencyServiceFeeCreateRsp|\Travelport\Util\StructType\BrandedFareAdminRsp|\Travelport\Util\StructType\BrandedFareSearchRsp|\Travelport\Util\StructType\CalculateTaxRsp|\Travelport\Util\StructType\ContentProviderRetrieveRsp|\Travelport\Util\StructType\CreateAgencyFeeMcoRsp|\Travelport\Util\StructType\CreditCardAuthRsp|\Travelport\Util\StructType\CurrencyConversionRsp|\Travelport\Util\StructType\FindEmployeesOnFlightRsp|\Travelport\Util\StructType\McoSearchRsp|\Travelport\Util\StructType\McoVoidRsp|\Travelport\Util\StructType\MctCountRsp|\Travelport\Util\StructType\MctLookupRsp|\Travelport\Util\StructType\MirReportRetrieveRsp|\Travelport\Util\StructType\ReferenceDataRetrieveRsp|\Travelport\Util\StructType\ReferenceDataSearchRsp|\Travelport\Util\StructType\ReferenceDataUpdateRsp|\Travelport\Util\StructType\UpsellAdminRsp|\Travelport\Util\StructType\UpsellSearchRsp
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
