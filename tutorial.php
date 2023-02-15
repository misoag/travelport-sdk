<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => './wsdl/uAPI_WSDLschema_Release-V22.3.1.9440/util_v52_0/Util.wsdl',
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
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => './wsdl/uAPI_WSDLschema_Release-V22.3.1.9440/util_v52_0/Util.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Travelport\Util\ClassMap::get(),
];
/**
 * Samples for Service ServiceType
 */
$service = new \Travelport\Util\ServiceType\Service($options);
/**
 * Sample call for service operation/method
 */
if ($service->service(new \Travelport\Util\StructType\CreditCardAuthReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_ff2fbd0cb66f20c9e6143622c67b06e7 operation/method
 */
if ($service->service_ff2fbd0cb66f20c9e6143622c67b06e7(new \Travelport\Util\StructType\CreateAgencyFeeMcoReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_1012f8108f401f52a4f391021342de90 operation/method
 */
if ($service->service_1012f8108f401f52a4f391021342de90(new \Travelport\Util\StructType\McoVoidReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_bc6fb824a094f9b2b62e638fd69448f6 operation/method
 */
if ($service->service_bc6fb824a094f9b2b62e638fd69448f6(new \Travelport\Util\StructType\McoSearchReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_0b80a7a315cb95cb2f96364693b5a4bb operation/method
 */
if ($service->service_0b80a7a315cb95cb2f96364693b5a4bb(new \Travelport\Util\StructType\MirReportRetrieveReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_5fb10a9204c629542d10afda45b725e4 operation/method
 */
if ($service->service_5fb10a9204c629542d10afda45b725e4(new \Travelport\Util\StructType\MctCountReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_afe44ed2fdd1115b05fd928a5caf2b64 operation/method
 */
if ($service->service_afe44ed2fdd1115b05fd928a5caf2b64(new \Travelport\Util\StructType\MctLookupReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_740fb53f6a4bffbf87d1473e6d0199dd operation/method
 */
if ($service->service_740fb53f6a4bffbf87d1473e6d0199dd(new \Travelport\Util\StructType\CalculateTaxReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_9fc238d7c7269a0ba7bb105dac825dc5 operation/method
 */
if ($service->service_9fc238d7c7269a0ba7bb105dac825dc5(new \Travelport\Util\StructType\UpsellAdminReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_101202a1089bfa3594f343c21c3b7f5b operation/method
 */
if ($service->service_101202a1089bfa3594f343c21c3b7f5b(new \Travelport\Util\StructType\BrandedFareAdminReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_912c7685462e28d62654642b2658ad01 operation/method
 */
if ($service->service_912c7685462e28d62654642b2658ad01(new \Travelport\Util\StructType\BrandedFareSearchReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_8122e2950dcd0d969fbf33c414dbd574 operation/method
 */
if ($service->service_8122e2950dcd0d969fbf33c414dbd574(new \Travelport\Util\StructType\UpsellSearchReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_c5fb72d8261d096358115d437b0d3a18 operation/method
 */
if ($service->service_c5fb72d8261d096358115d437b0d3a18(new \Travelport\Util\StructType\ContentProviderRetrieveReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_15a6886d6799ff9a497e8fe2f2d2c2ae operation/method
 */
if ($service->service_15a6886d6799ff9a497e8fe2f2d2c2ae(new \Travelport\Util\StructType\CurrencyConversionReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_25c3c99d51cdc43c4f817c55d4429363 operation/method
 */
if ($service->service_25c3c99d51cdc43c4f817c55d4429363(new \Travelport\Util\StructType\ReferenceDataRetrieveReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_c733f7f9120e84b5d6ba583c41bb6367 operation/method
 */
if ($service->service_c733f7f9120e84b5d6ba583c41bb6367(new \Travelport\Util\StructType\ReferenceDataSearchReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_914efd07c28972acbdca13e4c7d43ffd operation/method
 */
if ($service->service_914efd07c28972acbdca13e4c7d43ffd(new \Travelport\Util\StructType\ReferenceDataUpdateReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_1eb20c3424ae723f48b455d7fef33206 operation/method
 */
if ($service->service_1eb20c3424ae723f48b455d7fef33206(new \Travelport\Util\StructType\AgencyServiceFeeCreateReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for service_b602b78f29382cf89acf0f463ceb7e23 operation/method
 */
if ($service->service_b602b78f29382cf89acf0f463ceb7e23(new \Travelport\Util\StructType\FindEmployeesOnFlightReq()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
