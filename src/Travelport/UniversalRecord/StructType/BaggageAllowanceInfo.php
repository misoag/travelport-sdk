<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageAllowanceInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to Baggage allowance like URL,Height,Weight etc.
 * @subpackage Structs
 */
class BaggageAllowanceInfo extends BaseBaggageAllowanceInfo
{
    /**
     * The BagDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BagDetails
     * @var \Travelport\UniversalRecord\StructType\BagDetails[]
     */
    protected ?array $BagDetails = null;
    /**
     * The TravelerType
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelerType = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $FareInfoRef = null;
    /**
     * Constructor method for BaggageAllowanceInfo
     * @uses BaggageAllowanceInfo::setBagDetails()
     * @uses BaggageAllowanceInfo::setTravelerType()
     * @uses BaggageAllowanceInfo::setFareInfoRef()
     * @param \Travelport\UniversalRecord\StructType\BagDetails[] $bagDetails
     * @param string $travelerType
     * @param string $fareInfoRef
     */
    public function __construct(?array $bagDetails = null, ?string $travelerType = null, ?string $fareInfoRef = null)
    {
        $this
            ->setBagDetails($bagDetails)
            ->setTravelerType($travelerType)
            ->setFareInfoRef($fareInfoRef);
    }
    /**
     * Get BagDetails value
     * @return \Travelport\UniversalRecord\StructType\BagDetails[]
     */
    public function getBagDetails(): ?array
    {
        return $this->BagDetails;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBagDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBagDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBagDetailsForArrayConstraintFromSetBagDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baggageAllowanceInfoBagDetailsItem) {
            // validation for constraint: itemType
            if (!$baggageAllowanceInfoBagDetailsItem instanceof \Travelport\UniversalRecord\StructType\BagDetails) {
                $invalidValues[] = is_object($baggageAllowanceInfoBagDetailsItem) ? get_class($baggageAllowanceInfoBagDetailsItem) : sprintf('%s(%s)', gettype($baggageAllowanceInfoBagDetailsItem), var_export($baggageAllowanceInfoBagDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BagDetails property can only contain items of type \Travelport\UniversalRecord\StructType\BagDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BagDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BagDetails[] $bagDetails
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo
     */
    public function setBagDetails(?array $bagDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($bagDetailsArrayErrorMessage = self::validateBagDetailsForArrayConstraintFromSetBagDetails($bagDetails))) {
            throw new InvalidArgumentException($bagDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bagDetails) && count($bagDetails) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bagDetails)), __LINE__);
        }
        $this->BagDetails = $bagDetails;
        
        return $this;
    }
    /**
     * Add item to BagDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BagDetails $item
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo
     */
    public function addToBagDetails(\Travelport\UniversalRecord\StructType\BagDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BagDetails) {
            throw new InvalidArgumentException(sprintf('The BagDetails property can only contain items of type \Travelport\UniversalRecord\StructType\BagDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BagDetails) && count($this->BagDetails) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BagDetails)), __LINE__);
        }
        $this->BagDetails[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo
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
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($fareInfoRef) && !is_string($fareInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareInfoRef, true), gettype($fareInfoRef)), __LINE__);
        }
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
}
