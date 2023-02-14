<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailAvailInfo StructType
 * @subpackage Structs
 */
class RailAvailInfo extends AbstractStructBase
{
    /**
     * The ClassCode
     * Meta information extracted from the WSDL
     * - documentation: A booking code or fare basis code or fare class.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $ClassCode = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: Available fare basis code or fare class quantity.
     * - use: optional
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code or fare class for this fare. | Rail Cabin class specification .The valid values are Economy,Business,First and Other.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $CabinClass = null;
    /**
     * Constructor method for RailAvailInfo
     * @uses RailAvailInfo::setClassCode()
     * @uses RailAvailInfo::setQuantity()
     * @uses RailAvailInfo::setCabinClass()
     * @param string $classCode
     * @param int $quantity
     * @param string $cabinClass
     */
    public function __construct(?string $classCode = null, ?int $quantity = null, ?string $cabinClass = null)
    {
        $this
            ->setClassCode($classCode)
            ->setQuantity($quantity)
            ->setCabinClass($cabinClass);
    }
    /**
     * Get ClassCode value
     * @return string|null
     */
    public function getClassCode(): ?string
    {
        return $this->ClassCode;
    }
    /**
     * Set ClassCode value
     * @param string $classCode
     * @return \Travelport\UniversalRecord\StructType\RailAvailInfo
     */
    public function setClassCode(?string $classCode = null): self
    {
        // validation for constraint: string
        if (!is_null($classCode) && !is_string($classCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classCode, true), gettype($classCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($classCode) && mb_strlen((string) $classCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $classCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($classCode) && mb_strlen((string) $classCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $classCode)), __LINE__);
        }
        $this->ClassCode = $classCode;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Travelport\UniversalRecord\StructType\RailAvailInfo
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return string|null
     */
    public function getCabinClass(): ?string
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param string $cabinClass
     * @return \Travelport\UniversalRecord\StructType\RailAvailInfo
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinClass) && !is_string($cabinClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinClass, true), gettype($cabinClass)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($cabinClass) && mb_strlen((string) $cabinClass) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $cabinClass)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($cabinClass) && mb_strlen((string) $cabinClass) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $cabinClass)), __LINE__);
        }
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
}
