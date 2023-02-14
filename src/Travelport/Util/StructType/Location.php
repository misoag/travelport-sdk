<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location StructType
 * Meta information extracted from the WSDL
 * - documentation: 3 letter location code where the service will be availed. | Used during search to specify an origin or destination location | IATA code for airport or city
 * @subpackage Structs
 */
class Location extends AbstractStructBase
{
}