<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeGuaranteeInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Information pertaining to the payment of type Guarantee.
 * @subpackage Structs
 */
class TypeGuaranteeInformation extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The AgencyType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $AgencyType;
    /**
     * The IATANumber
     * Meta information extracted from the WSDL
     * - documentation: Payment IATA number. (ie. IATA of Agency or Other Agency) | Used for Character Strings, length 1 to 128.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $IATANumber;
    /**
     * Constructor method for typeGuaranteeInformation
     * @uses TypeGuaranteeInformation::setType()
     * @uses TypeGuaranteeInformation::setAgencyType()
     * @uses TypeGuaranteeInformation::setIATANumber()
     * @param string $type
     * @param string $agencyType
     * @param string $iATANumber
     */
    public function __construct(string $type, string $agencyType, string $iATANumber)
    {
        $this
            ->setType($type)
            ->setAgencyType($agencyType)
            ->setIATANumber($iATANumber);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\TypeGuaranteeInformation
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get AgencyType value
     * @return string
     */
    public function getAgencyType(): string
    {
        return $this->AgencyType;
    }
    /**
     * Set AgencyType value
     * @param string $agencyType
     * @return \Travelport\UniversalRecord\StructType\TypeGuaranteeInformation
     */
    public function setAgencyType(string $agencyType): self
    {
        $this->AgencyType = $agencyType;
        
        return $this;
    }
    /**
     * Get IATANumber value
     * @return string
     */
    public function getIATANumber(): string
    {
        return $this->IATANumber;
    }
    /**
     * Set IATANumber value
     * @param string $iATANumber
     * @return \Travelport\UniversalRecord\StructType\TypeGuaranteeInformation
     */
    public function setIATANumber(string $iATANumber): self
    {
        $this->IATANumber = $iATANumber;
        
        return $this;
    }
}
