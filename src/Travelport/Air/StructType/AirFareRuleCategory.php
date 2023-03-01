<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFareRuleCategory StructType
 * Meta information extracted from the WSDL
 * - documentation: A collection of fare rule category codes.
 * @subpackage Structs
 */
class AirFareRuleCategory extends AbstractStructBase
{
    /**
     * The CategoryCode
     * Meta information extracted from the WSDL
     * - documentation: The Category Code for Air Fare Rule.
     * - maxOccurs: 10
     * @var string[]
     */
    public ?array $CategoryCode = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $FareInfoRef = null;
    /**
     * Constructor method for AirFareRuleCategory
     * @uses AirFareRuleCategory::setCategoryCode()
     * @uses AirFareRuleCategory::setFareInfoRef()
     * @param string[] $categoryCode
     * @param string $fareInfoRef
     */
    public function __construct(?array $categoryCode = null, ?string $fareInfoRef = null)
    {
        $this
            ->setCategoryCode($categoryCode)
            ->setFareInfoRef($fareInfoRef);
    }
    /**
     * Get CategoryCode value
     * @return string[]
     */
    public function getCategoryCode(): ?array
    {
        return $this->CategoryCode;
    }
    /**
     * Set CategoryCode value
     * @param string[] $categoryCode
     * @return \Travelport\Air\StructType\AirFareRuleCategory
     */
    public function setCategoryCode(?array $categoryCode = null): self
    {
        $this->CategoryCode = $categoryCode;
        
        return $this;
    }
    /**
     * Add item to CategoryCode value
     * @uses \Travelport\Air\EnumType\TypeFareRuleCategoryCode::valueIsValid()
     * @uses \Travelport\Air\EnumType\TypeFareRuleCategoryCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\AirFareRuleCategory
     */
    public function addToCategoryCode(string $item): self
    {
        $this->CategoryCode[] = $item;
        
        return $this;
    }
    /**
     * Get FareInfoRef value
     * @return string|null
     */
    public function getFareInfoRef(): ?string
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param string $fareInfoRef
     * @return \Travelport\Air\StructType\AirFareRuleCategory
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
}
