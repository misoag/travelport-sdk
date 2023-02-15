<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => './wsdl/uAPI_WSDLschema_Release-V22.3.1.9440/universal_v52_0/UniversalRecord.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => './wsdl/uAPI_WSDLschema_Release-V22.3.1.9440/universal_v52_0/UniversalRecord.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Travelport\UniversalRecord\ClassMap::get(),
];
/**
 * Samples for Service ServiceType
 */
$service = new \Travelport\UniversalRecord\ServiceType\Service($options);
$service->setSoapHeaderSessionContext(new \Travelport\UniversalRecord\StructType\SessionContext());
$service->setSoapHeaderSupportedVersions(new \Travelport\UniversalRecord\StructType\SupportedVersions());
/**
 * Sample call for service operation/method
 */
if ($service->service(new \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_4111e37120ff09df2941830aac7fcd9f operation/method
 */
if ($service->service_4111e37120ff09df2941830aac7fcd9f(new \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_0349794fd2ce9d0c757e151023a88bed operation/method
 */
if ($service->service_0349794fd2ce9d0c757e151023a88bed(new \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_456f91b8b00170e86273bc4adfecb037 operation/method
 */
if ($service->service_456f91b8b00170e86273bc4adfecb037(new \Travelport\UniversalRecord\StructType\AckScheduleChangeReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_3efe2a29ab406edffa9c7a4657a6f5d0 operation/method
 */
if ($service->service_3efe2a29ab406edffa9c7a4657a6f5d0(new \Travelport\UniversalRecord\StructType\UniversalRecordImportReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_565c19bff58e49dbf86720d9738b4de8 operation/method
 */
if ($service->service_565c19bff58e49dbf86720d9738b4de8(new \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_949ba5bad3729a3983cc47471640737b operation/method
 */
if ($service->service_949ba5bad3729a3983cc47471640737b(new \Travelport\UniversalRecord\StructType\UniversalRecordCancelReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_4377ff826e824bed049a5a2b67416aaf operation/method
 */
if ($service->service_4377ff826e824bed049a5a2b67416aaf(new \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_83f1c0ca6f1bc6e7542a19cb9c23cc63 operation/method
 */
if ($service->service_83f1c0ca6f1bc6e7542a19cb9c23cc63(new \Travelport\UniversalRecord\StructType\ProviderReservationDivideReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_c1b4efeb9ba701c9fba0611d8d9a5275 operation/method
 */
if ($service->service_c1b4efeb9ba701c9fba0611d8d9a5275(new \Travelport\UniversalRecord\StructType\SavedTripCreateReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_0f155582bed16d7ca5101298f328d6c4 operation/method
 */
if ($service->service_0f155582bed16d7ca5101298f328d6c4(new \Travelport\UniversalRecord\StructType\SavedTripModifyReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_f6eeab680817d63e53887962c6d5ee12 operation/method
 */
if ($service->service_f6eeab680817d63e53887962c6d5ee12(new \Travelport\UniversalRecord\StructType\SavedTripRetrieveReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_3244c193fc9a7421499e7eadf44d4c07 operation/method
 */
if ($service->service_3244c193fc9a7421499e7eadf44d4c07(new \Travelport\UniversalRecord\StructType\SavedTripDeleteReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_29270eaa79be99f4da92a499589142c4 operation/method
 */
if ($service->service_29270eaa79be99f4da92a499589142c4(new \Travelport\UniversalRecord\StructType\SavedTripSearchReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_d816df0f45ba226c1ccd7c747d16e7ec operation/method
 */
if ($service->service_d816df0f45ba226c1ccd7c747d16e7ec(new \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_359ab8977ce467c57c391c9ee02682de operation/method
 */
if ($service->service_359ab8977ce467c57c391c9ee02682de(new \Travelport\UniversalRecord\StructType\VehicleCancelReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_6d362ba3ccf2cdb6bed26a40b7a158c1 operation/method
 */
if ($service->service_6d362ba3ccf2cdb6bed26a40b7a158c1(new \Travelport\UniversalRecord\StructType\HotelCreateReservationReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_ad902d6a3193e9134b6c7344bcf05858 operation/method
 */
if ($service->service_ad902d6a3193e9134b6c7344bcf05858(new \Travelport\UniversalRecord\StructType\HotelCancelReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_6a708fdf98abf6ae0ae15e0ceaeea645 operation/method
 */
if ($service->service_6a708fdf98abf6ae0ae15e0ceaeea645(new \Travelport\UniversalRecord\StructType\RailCreateReservationReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_1cd364ede385a0eeb57ca2d70b9a5f5c operation/method
 */
if ($service->service_1cd364ede385a0eeb57ca2d70b9a5f5c(new \Travelport\UniversalRecord\StructType\AirCreateReservationReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_d5f0b60241e4eaa207aff6efb76b843f operation/method
 */
if ($service->service_d5f0b60241e4eaa207aff6efb76b843f(new \Travelport\UniversalRecord\StructType\AirCancelReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_dc4e6a271eeab681b09fe9abb3a42b75 operation/method
 */
if ($service->service_dc4e6a271eeab681b09fe9abb3a42b75(new \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_6bd77651fc461f35d94a4e3df3d7c851 operation/method
 */
if ($service->service_6bd77651fc461f35d94a4e3df3d7c851(new \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_7ff5bf93a0111db6b49313e6f863164e operation/method
 */
if ($service->service_7ff5bf93a0111db6b49313e6f863164e(new \Travelport\UniversalRecord\StructType\PassiveCancelReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
