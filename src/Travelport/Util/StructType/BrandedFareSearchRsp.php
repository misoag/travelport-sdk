<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandedFareSearchRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Branded Fare search response.
 * @subpackage Structs
 */
class BrandedFareSearchRsp extends BaseRsp
{
    /**
     * The MoreResults
     * Meta information extracted from the WSDL
     * - documentation: Used to browse beyond the maximum number of results specified with the MaxResults parameter. Acts as an offset to skip the specified number of PNRs from the begining of the result set.
     * - base: xs:boolean
     * - use: required
     * @var bool
     */
    protected bool $MoreResults;
    /**
     * The FareFamily
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FareFamily
     * @var \Travelport\Util\StructType\FareFamily[]
     */
    protected ?array $FareFamily = null;
    /**
     * Constructor method for BrandedFareSearchRsp
     * @uses BrandedFareSearchRsp::setMoreResults()
     * @uses BrandedFareSearchRsp::setFareFamily()
     * @param bool $moreResults
     * @param \Travelport\Util\StructType\FareFamily[] $fareFamily
     */
    public function __construct(bool $moreResults, ?array $fareFamily = null)
    {
        $this
            ->setMoreResults($moreResults)
            ->setFareFamily($fareFamily);
    }
    /**
     * Get MoreResults value
     * @return bool
     */
    public function getMoreResults(): bool
    {
        return $this->MoreResults;
    }
    /**
     * Set MoreResults value
     * @param bool $moreResults
     * @return \Travelport\Util\StructType\BrandedFareSearchRsp
     */
    public function setMoreResults(bool $moreResults): self
    {
        // validation for constraint: boolean
        if (!is_null($moreResults) && !is_bool($moreResults)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreResults, true), gettype($moreResults)), __LINE__);
        }
        $this->MoreResults = $moreResults;
        
        return $this;
    }
    /**
     * Get FareFamily value
     * @return \Travelport\Util\StructType\FareFamily[]
     */
    public function getFareFamily(): ?array
    {
        return $this->FareFamily;
    }
    /**
     * This method is responsible for validating the values passed to the setFareFamily method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareFamily method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareFamilyForArrayConstraintsFromSetFareFamily(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandedFareSearchRspFareFamilyItem) {
            // validation for constraint: itemType
            if (!$brandedFareSearchRspFareFamilyItem instanceof \Travelport\Util\StructType\FareFamily) {
                $invalidValues[] = is_object($brandedFareSearchRspFareFamilyItem) ? get_class($brandedFareSearchRspFareFamilyItem) : sprintf('%s(%s)', gettype($brandedFareSearchRspFareFamilyItem), var_export($brandedFareSearchRspFareFamilyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareFamily property can only contain items of type \Travelport\Util\StructType\FareFamily, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareFamily value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareFamily[] $fareFamily
     * @return \Travelport\Util\StructType\BrandedFareSearchRsp
     */
    public function setFareFamily(?array $fareFamily = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareFamilyArrayErrorMessage = self::validateFareFamilyForArrayConstraintsFromSetFareFamily($fareFamily))) {
            throw new InvalidArgumentException($fareFamilyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareFamily) && count($fareFamily) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareFamily)), __LINE__);
        }
        $this->FareFamily = $fareFamily;
        
        return $this;
    }
    /**
     * Add item to FareFamily value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareFamily $item
     * @return \Travelport\Util\StructType\BrandedFareSearchRsp
     */
    public function addToFareFamily(\Travelport\Util\StructType\FareFamily $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareFamily) {
            throw new InvalidArgumentException(sprintf('The FareFamily property can only contain items of type \Travelport\Util\StructType\FareFamily, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareFamily) && count($this->FareFamily) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareFamily)), __LINE__);
        }
        $this->FareFamily[] = $item;
        
        return $this;
    }
}
