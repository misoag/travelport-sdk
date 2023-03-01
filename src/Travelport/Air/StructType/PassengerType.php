<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\FareGuaranteeInfo|null
     */
    public ?\Travelport\Air\StructType\FareGuaranteeInfo $FareGuaranteeInfo = null;
    /**
     * Constructor method for PassengerType
     * @uses PassengerType::setFareGuaranteeInfo()
     * @param \Travelport\Air\StructType\FareGuaranteeInfo $fareGuaranteeInfo
     */
    public function __construct(?\Travelport\Air\StructType\FareGuaranteeInfo $fareGuaranteeInfo = null)
    {
        $this
            ->setFareGuaranteeInfo($fareGuaranteeInfo);
    }
    /**
     * Get FareGuaranteeInfo value
     * @return \Travelport\Air\StructType\FareGuaranteeInfo|null
     */
    public function getFareGuaranteeInfo(): ?\Travelport\Air\StructType\FareGuaranteeInfo
    {
        return $this->FareGuaranteeInfo;
    }
    /**
     * Set FareGuaranteeInfo value
     * @param \Travelport\Air\StructType\FareGuaranteeInfo $fareGuaranteeInfo
     * @return \Travelport\Air\StructType\PassengerType
     */
    public function setFareGuaranteeInfo(?\Travelport\Air\StructType\FareGuaranteeInfo $fareGuaranteeInfo = null): self
    {
        $this->FareGuaranteeInfo = $fareGuaranteeInfo;
        
        return $this;
    }
}
