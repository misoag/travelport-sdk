<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDPricingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare related information for these electronic miscellaneous documents. Supported providers are 1G/1V/1P
 * @subpackage Structs
 */
class EMDPricingInfo extends AbstractStructBase
{
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    protected ?array $TaxInfo = null;
    /**
     * The BaseFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BaseFare = null;
    /**
     * The TotalFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalFare = null;
    /**
     * The TotalTax
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalTax = null;
    /**
     * The EquivFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $EquivFare = null;
    /**
     * Constructor method for EMDPricingInfo
     * @uses EMDPricingInfo::setTaxInfo()
     * @uses EMDPricingInfo::setBaseFare()
     * @uses EMDPricingInfo::setTotalFare()
     * @uses EMDPricingInfo::setTotalTax()
     * @uses EMDPricingInfo::setEquivFare()
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param string $baseFare
     * @param string $totalFare
     * @param string $totalTax
     * @param string $equivFare
     */
    public function __construct(?array $taxInfo = null, ?string $baseFare = null, ?string $totalFare = null, ?string $totalTax = null, ?string $equivFare = null)
    {
        $this
            ->setTaxInfo($taxInfo)
            ->setBaseFare($baseFare)
            ->setTotalFare($totalFare)
            ->setTotalTax($totalTax)
            ->setEquivFare($equivFare);
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxInfoForArrayConstraintsFromSetTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eMDPricingInfoTaxInfoItem) {
            // validation for constraint: itemType
            if (!$eMDPricingInfoTaxInfoItem instanceof \Travelport\UniversalRecord\StructType\TypeTaxInfo) {
                $invalidValues[] = is_object($eMDPricingInfoTaxInfoItem) ? get_class($eMDPricingInfoTaxInfoItem) : sprintf('%s(%s)', gettype($eMDPricingInfoTaxInfoItem), var_export($eMDPricingInfoTaxInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTaxInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxInfoArrayErrorMessage = self::validateTaxInfoForArrayConstraintsFromSetTaxInfo($taxInfo))) {
            throw new InvalidArgumentException($taxInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxInfo) && count($taxInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxInfo)), __LINE__);
        }
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo $item
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeTaxInfo) {
            throw new InvalidArgumentException(sprintf('The TaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTaxInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxInfo) && count($this->TaxInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxInfo)), __LINE__);
        }
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get BaseFare value
     * @return string|null
     */
    public function getBaseFare(): ?string
    {
        return $this->BaseFare;
    }
    /**
     * Set BaseFare value
     * @param string $baseFare
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
     */
    public function setBaseFare(?string $baseFare = null): self
    {
        // validation for constraint: string
        if (!is_null($baseFare) && !is_string($baseFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseFare, true), gettype($baseFare)), __LINE__);
        }
        $this->BaseFare = $baseFare;
        
        return $this;
    }
    /**
     * Get TotalFare value
     * @return string|null
     */
    public function getTotalFare(): ?string
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param string $totalFare
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
     */
    public function setTotalFare(?string $totalFare = null): self
    {
        // validation for constraint: string
        if (!is_null($totalFare) && !is_string($totalFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalFare, true), gettype($totalFare)), __LINE__);
        }
        $this->TotalFare = $totalFare;
        
        return $this;
    }
    /**
     * Get TotalTax value
     * @return string|null
     */
    public function getTotalTax(): ?string
    {
        return $this->TotalTax;
    }
    /**
     * Set TotalTax value
     * @param string $totalTax
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
     */
    public function setTotalTax(?string $totalTax = null): self
    {
        // validation for constraint: string
        if (!is_null($totalTax) && !is_string($totalTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalTax, true), gettype($totalTax)), __LINE__);
        }
        $this->TotalTax = $totalTax;
        
        return $this;
    }
    /**
     * Get EquivFare value
     * @return string|null
     */
    public function getEquivFare(): ?string
    {
        return $this->EquivFare;
    }
    /**
     * Set EquivFare value
     * @param string $equivFare
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
     */
    public function setEquivFare(?string $equivFare = null): self
    {
        // validation for constraint: string
        if (!is_null($equivFare) && !is_string($equivFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equivFare, true), gettype($equivFare)), __LINE__);
        }
        $this->EquivFare = $equivFare;
        
        return $this;
    }
}
