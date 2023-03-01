<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRulesFilterCategory StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Rules Filter if requested will return rules for requested category in the response. Applicable for providers 1G,1V,1P. | Structured Fare Rules Filter if requested will return rules for requested categories in the response.
 * Applicable for providers 1G, 1V.
 * @subpackage Structs
 */
class FareRulesFilterCategory extends AbstractStructBase
{
    /**
     * The CategoryCode
     * Meta information extracted from the WSDL
     * - documentation: Fare Rules Filter category can be requested. Currently only '˜MIN, MAX, ADV, CHG, OTH' is supported. Applicable for Providers 1G,1V,1P.
     * - maxOccurs: 35
     * - minOccurs: 1
     * @var string[]
     */
    public array $CategoryCode;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: This tells if Low Fare Finder was used. | Key reference for multiple fare rule
     * - use: optional
     * @var string|null
     */
    public ?string $FareInfoRef = null;
    /**
     * Constructor method for FareRulesFilterCategory
     * @uses FareRulesFilterCategory::setCategoryCode()
     * @uses FareRulesFilterCategory::setFareInfoRef()
     * @param string[] $categoryCode
     * @param string $fareInfoRef
     */
    public function __construct(array $categoryCode, ?string $fareInfoRef = null)
    {
        $this
            ->setCategoryCode($categoryCode)
            ->setFareInfoRef($fareInfoRef);
    }
    /**
     * Get CategoryCode value
     * @return string[]
     */
    public function getCategoryCode(): array
    {
        return $this->CategoryCode;
    }
    /**
     * Set CategoryCode value
     * @param string[] $categoryCode
     * @return \Travelport\Air\StructType\FareRulesFilterCategory
     */
    public function setCategoryCode(array $categoryCode): self
    {
        $this->CategoryCode = $categoryCode;
        
        return $this;
    }
    /**
     * Add item to CategoryCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\FareRulesFilterCategory
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
     * @return \Travelport\Air\StructType\FareRulesFilterCategory
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
}
