<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDTravelerInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: EMD traveler information. Supported providers are 1G/1V/1P/1J
 * @subpackage Structs
 */
class EMDTravelerInfo extends AbstractStructBase
{
    /**
     * The NameInfo
     * @var \Travelport\Util\StructType\NameInfo|null
     */
    protected ?\Travelport\Util\StructType\NameInfo $NameInfo = null;
    /**
     * The TravelerType
     * Meta information extracted from the WSDL
     * - documentation: Defines the type of traveler used for booking which could be a non-defining type (Companion, Web-fare, etc), or a standard type (Adult, Child, etc). | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * @var string|null
     */
    protected ?string $TravelerType = null;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - documentation: Age of the traveler
     * @var int|null
     */
    protected ?int $Age = null;
    /**
     * Constructor method for EMDTravelerInfo
     * @uses EMDTravelerInfo::setNameInfo()
     * @uses EMDTravelerInfo::setTravelerType()
     * @uses EMDTravelerInfo::setAge()
     * @param \Travelport\Util\StructType\NameInfo $nameInfo
     * @param string $travelerType
     * @param int $age
     */
    public function __construct(?\Travelport\Util\StructType\NameInfo $nameInfo = null, ?string $travelerType = null, ?int $age = null)
    {
        $this
            ->setNameInfo($nameInfo)
            ->setTravelerType($travelerType)
            ->setAge($age);
    }
    /**
     * Get NameInfo value
     * @return \Travelport\Util\StructType\NameInfo|null
     */
    public function getNameInfo(): ?\Travelport\Util\StructType\NameInfo
    {
        return $this->NameInfo;
    }
    /**
     * Set NameInfo value
     * @param \Travelport\Util\StructType\NameInfo $nameInfo
     * @return \Travelport\Util\StructType\EMDTravelerInfo
     */
    public function setNameInfo(?\Travelport\Util\StructType\NameInfo $nameInfo = null): self
    {
        $this->NameInfo = $nameInfo;
        
        return $this;
    }
    /**
     * Get TravelerType value
     * @return string|null
     */
    public function getTravelerType(): ?string
    {
        return $this->TravelerType;
    }
    /**
     * Set TravelerType value
     * @param string $travelerType
     * @return \Travelport\Util\StructType\EMDTravelerInfo
     */
    public function setTravelerType(?string $travelerType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelerType) && !is_string($travelerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerType, true), gettype($travelerType)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($travelerType) && mb_strlen((string) $travelerType) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $travelerType)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($travelerType) && mb_strlen((string) $travelerType) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $travelerType)), __LINE__);
        }
        $this->TravelerType = $travelerType;
        
        return $this;
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \Travelport\Util\StructType\EMDTravelerInfo
     */
    public function setAge(?int $age = null): self
    {
        // validation for constraint: int
        if (!is_null($age) && !(is_int($age) || ctype_digit($age))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        $this->Age = $age;
        
        return $this;
    }
}
