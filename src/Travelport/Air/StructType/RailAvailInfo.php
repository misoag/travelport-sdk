<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?string $ClassCode = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: Available fare basis code or fare class quantity.
     * - use: optional
     * @var int|null
     */
    public ?int $Quantity = null;
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
    public ?string $CabinClass = null;
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
     * @return \Travelport\Air\StructType\RailAvailInfo
     */
    public function setClassCode(?string $classCode = null): self
    {
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
     * @return \Travelport\Air\StructType\RailAvailInfo
     */
    public function setQuantity(?int $quantity = null): self
    {
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
     * @return \Travelport\Air\StructType\RailAvailInfo
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
}
