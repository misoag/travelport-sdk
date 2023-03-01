<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareGuaranteeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: The information related to fare guarantee details.
 * @subpackage Structs
 */
class FareGuaranteeInfo extends AbstractStructBase
{
    /**
     * The GuaranteeType
     * Meta information extracted from the WSDL
     * - documentation: Determines the status of a fare for a passenger.
     * - use: required
     * @var string
     */
    public string $GuaranteeType;
    /**
     * The GuaranteeDate
     * Meta information extracted from the WSDL
     * - documentation: The date till which the fare is guaranteed.
     * - use: optional
     * @var string|null
     */
    public ?string $GuaranteeDate = null;
    /**
     * Constructor method for FareGuaranteeInfo
     * @uses FareGuaranteeInfo::setGuaranteeType()
     * @uses FareGuaranteeInfo::setGuaranteeDate()
     * @param string $guaranteeType
     * @param string $guaranteeDate
     */
    public function __construct(string $guaranteeType, ?string $guaranteeDate = null)
    {
        $this
            ->setGuaranteeType($guaranteeType)
            ->setGuaranteeDate($guaranteeDate);
    }
    /**
     * Get GuaranteeType value
     * @return string
     */
    public function getGuaranteeType(): string
    {
        return $this->GuaranteeType;
    }
    /**
     * Set GuaranteeType value
     * @param string $guaranteeType
     * @return \Travelport\UniversalRecord\StructType\FareGuaranteeInfo
     */
    public function setGuaranteeType(string $guaranteeType): self
    {
        $this->GuaranteeType = $guaranteeType;
        
        return $this;
    }
    /**
     * Get GuaranteeDate value
     * @return string|null
     */
    public function getGuaranteeDate(): ?string
    {
        return $this->GuaranteeDate;
    }
    /**
     * Set GuaranteeDate value
     * @param string $guaranteeDate
     * @return \Travelport\UniversalRecord\StructType\FareGuaranteeInfo
     */
    public function setGuaranteeDate(?string $guaranteeDate = null): self
    {
        $this->GuaranteeDate = $guaranteeDate;
        
        return $this;
    }
}
