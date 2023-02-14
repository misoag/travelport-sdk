<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $GuaranteeType;
    /**
     * The GuaranteeDate
     * Meta information extracted from the WSDL
     * - documentation: The date till which the fare is guaranteed.
     * - use: optional
     * @var string|null
     */
    protected ?string $GuaranteeDate = null;
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareGuarantee::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareGuarantee::getValidValues()
     * @throws InvalidArgumentException
     * @param string $guaranteeType
     * @return \Travelport\UniversalRecord\StructType\FareGuaranteeInfo
     */
    public function setGuaranteeType(string $guaranteeType): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeFareGuarantee::valueIsValid($guaranteeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFareGuarantee', is_array($guaranteeType) ? implode(', ', $guaranteeType) : var_export($guaranteeType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFareGuarantee::getValidValues())), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($guaranteeDate) && !is_string($guaranteeDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guaranteeDate, true), gettype($guaranteeDate)), __LINE__);
        }
        $this->GuaranteeDate = $guaranteeDate;
        
        return $this;
    }
}
