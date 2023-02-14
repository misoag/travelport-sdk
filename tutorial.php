<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => './wsdl/uAPI_WSDLschema_Release-V22.3.1.9440/hotel_v52_0/Hotel.wsdl',
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
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => './wsdl/uAPI_WSDLschema_Release-V22.3.1.9440/hotel_v52_0/Hotel.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Service ServiceType
 */
$service = new \ServiceType\Service($options);
/**
 * Sample call for service operation/method
 */
if ($service->service(new \StructType\HotelSearchAvailabilityReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_7ef71e3598034fd211addede8e06bba6 operation/method
 */
if ($service->service_7ef71e3598034fd211addede8e06bba6(new \StructType\HotelMediaLinksReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_55dfd2154e264648fd5fab19f4534d4d operation/method
 */
if ($service->service_55dfd2154e264648fd5fab19f4534d4d(new \StructType\HotelDetailsReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_22e6730693bcb6f02bdcde297d84ad04 operation/method
 */
if ($service->service_22e6730693bcb6f02bdcde297d84ad04(new \StructType\HotelRetrieveReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_4fa667a3acace189a655fb3de494db06 operation/method
 */
if ($service->service_4fa667a3acace189a655fb3de494db06(new \StructType\HotelRulesReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_6755f1c71f7e8c5848c46b6d8a94109a operation/method
 */
if ($service->service_6755f1c71f7e8c5848c46b6d8a94109a(new \StructType\HotelUpsellDetailsReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_220573ccee144878268677c7fa327480 operation/method
 */
if ($service->service_220573ccee144878268677c7fa327480(new \StructType\HotelKeywordReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_7fa91cbcf26a7d6938c755697a70b888 operation/method
 */
if ($service->service_7fa91cbcf26a7d6938c755697a70b888(new \StructType\HotelSuperShopperReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
