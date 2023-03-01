<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerType StructType
 * Meta information extracted from the WSDL
 * - documentation: The passenger type details associated to a fare.
 * @subpackage Structs
 */
class PassengerType extends TypePassengerType
{
    /**
     * The FareGuaranteeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareGuaranteeInfo
     * @var \Travelport\UniversalRecord\StructType\FareGuaranteeInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\FareGuaranteeInfo $FareGuaranteeInfo = null;
    /**
     * Constructor method for PassengerType
     * @uses PassengerType::setFareGuaranteeInfo()
     * @param \Travelport\UniversalRecord\StructType\FareGuaranteeInfo $fareGuaranteeInfo
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\FareGuaranteeInfo $fareGuaranteeInfo = null)
    {
        $this
            ->setFareGuaranteeInfo($fareGuaranteeInfo);
    }
    /**
     * Get FareGuaranteeInfo value
     * @return \Travelport\UniversalRecord\StructType\FareGuaranteeInfo|null
     */
    public function getFareGuaranteeInfo(): ?\Travelport\UniversalRecord\StructType\FareGuaranteeInfo
    {
        return $this->FareGuaranteeInfo;
    }
    /**
     * Set FareGuaranteeInfo value
     * @param \Travelport\UniversalRecord\StructType\FareGuaranteeInfo $fareGuaranteeInfo
     * @return \Travelport\UniversalRecord\StructType\PassengerType
     */
    public function setFareGuaranteeInfo(?\Travelport\UniversalRecord\StructType\FareGuaranteeInfo $fareGuaranteeInfo = null): self
    {
        $this->FareGuaranteeInfo = $fareGuaranteeInfo;
        
        return $this;
    }
}
