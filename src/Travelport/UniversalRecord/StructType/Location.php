<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location StructType
 * Meta information extracted from the WSDL
 * - documentation: Used during search to specify an origin or destination location | IATA code for airport or city | 3 letter location code where the service will be availed.
 * - type: common:typeIATACode
 * - use: optional
 * @subpackage Structs
 */
class Location extends AbstractStructBase
{
}
