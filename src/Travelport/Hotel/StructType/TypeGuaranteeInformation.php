<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected string $Type;
    /**
     * The AgencyType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $AgencyType;
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
    protected string $IATANumber;
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
     * @return \Travelport\Hotel\StructType\TypeGuaranteeInformation
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\TypeGuaranteeInformation
     */
    public function setAgencyType(string $agencyType): self
    {
        // validation for constraint: string
        if (!is_null($agencyType) && !is_string($agencyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyType, true), gettype($agencyType)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\TypeGuaranteeInformation
     */
    public function setIATANumber(string $iATANumber): self
    {
        // validation for constraint: string
        if (!is_null($iATANumber) && !is_string($iATANumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iATANumber, true), gettype($iATANumber)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($iATANumber) && mb_strlen((string) $iATANumber) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $iATANumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($iATANumber) && mb_strlen((string) $iATANumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $iATANumber)), __LINE__);
        }
        $this->IATANumber = $iATANumber;
        
        return $this;
    }
}
