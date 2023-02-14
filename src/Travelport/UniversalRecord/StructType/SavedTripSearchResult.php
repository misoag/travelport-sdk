<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTripSearchResult StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for SavedTrp that match the search criteria
 * @subpackage Structs
 */
class SavedTripSearchResult extends AbstractStructBase
{
    /**
     * The SavedTripName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $SavedTripName;
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    protected string $LocatorCode;
    /**
     * The ProductInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ProductInfo[]
     */
    protected ?array $ProductInfo = null;
    /**
     * The EarliestTravelDate
     * Meta information extracted from the WSDL
     * - documentation: The date on which the earliest travel can occur.
     * - use: optional
     * @var string|null
     */
    protected ?string $EarliestTravelDate = null;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - documentation: The date the SavedTrip was created.
     * - use: optional
     * @var string|null
     */
    protected ?string $CreatedDate = null;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $UniversalRecordLocatorCode = null;
    /**
     * Constructor method for SavedTripSearchResult
     * @uses SavedTripSearchResult::setSavedTripName()
     * @uses SavedTripSearchResult::setLocatorCode()
     * @uses SavedTripSearchResult::setProductInfo()
     * @uses SavedTripSearchResult::setEarliestTravelDate()
     * @uses SavedTripSearchResult::setCreatedDate()
     * @uses SavedTripSearchResult::setUniversalRecordLocatorCode()
     * @param string $savedTripName
     * @param string $locatorCode
     * @param \Travelport\UniversalRecord\StructType\ProductInfo[] $productInfo
     * @param string $earliestTravelDate
     * @param string $createdDate
     * @param string $universalRecordLocatorCode
     */
    public function __construct(string $savedTripName, string $locatorCode, ?array $productInfo = null, ?string $earliestTravelDate = null, ?string $createdDate = null, ?string $universalRecordLocatorCode = null)
    {
        $this
            ->setSavedTripName($savedTripName)
            ->setLocatorCode($locatorCode)
            ->setProductInfo($productInfo)
            ->setEarliestTravelDate($earliestTravelDate)
            ->setCreatedDate($createdDate)
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode);
    }
    /**
     * Get SavedTripName value
     * @return string
     */
    public function getSavedTripName(): string
    {
        return $this->SavedTripName;
    }
    /**
     * Set SavedTripName value
     * @param string $savedTripName
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchResult
     */
    public function setSavedTripName(string $savedTripName): self
    {
        // validation for constraint: string
        if (!is_null($savedTripName) && !is_string($savedTripName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($savedTripName, true), gettype($savedTripName)), __LINE__);
        }
        $this->SavedTripName = $savedTripName;
        
        return $this;
    }
    /**
     * Get LocatorCode value
     * @return string
     */
    public function getLocatorCode(): string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchResult
     */
    public function setLocatorCode(string $locatorCode): self
    {
        // validation for constraint: string
        if (!is_null($locatorCode) && !is_string($locatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locatorCode, true), gettype($locatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $locatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $locatorCode)), __LINE__);
        }
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
    /**
     * Get ProductInfo value
     * @return \Travelport\UniversalRecord\StructType\ProductInfo[]
     */
    public function getProductInfo(): ?array
    {
        return $this->ProductInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setProductInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductInfoForArrayConstraintsFromSetProductInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripSearchResultProductInfoItem) {
            // validation for constraint: itemType
            if (!$savedTripSearchResultProductInfoItem instanceof \Travelport\UniversalRecord\StructType\ProductInfo) {
                $invalidValues[] = is_object($savedTripSearchResultProductInfoItem) ? get_class($savedTripSearchResultProductInfoItem) : sprintf('%s(%s)', gettype($savedTripSearchResultProductInfoItem), var_export($savedTripSearchResultProductInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ProductInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProductInfo[] $productInfo
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchResult
     */
    public function setProductInfo(?array $productInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($productInfoArrayErrorMessage = self::validateProductInfoForArrayConstraintsFromSetProductInfo($productInfo))) {
            throw new InvalidArgumentException($productInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($productInfo) && count($productInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($productInfo)), __LINE__);
        }
        $this->ProductInfo = $productInfo;
        
        return $this;
    }
    /**
     * Add item to ProductInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProductInfo $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchResult
     */
    public function addToProductInfo(\Travelport\UniversalRecord\StructType\ProductInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ProductInfo) {
            throw new InvalidArgumentException(sprintf('The ProductInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ProductInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProductInfo) && count($this->ProductInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProductInfo)), __LINE__);
        }
        $this->ProductInfo[] = $item;
        
        return $this;
    }
    /**
     * Get EarliestTravelDate value
     * @return string|null
     */
    public function getEarliestTravelDate(): ?string
    {
        return $this->EarliestTravelDate;
    }
    /**
     * Set EarliestTravelDate value
     * @param string $earliestTravelDate
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchResult
     */
    public function setEarliestTravelDate(?string $earliestTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($earliestTravelDate) && !is_string($earliestTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earliestTravelDate, true), gettype($earliestTravelDate)), __LINE__);
        }
        $this->EarliestTravelDate = $earliestTravelDate;
        
        return $this;
    }
    /**
     * Get CreatedDate value
     * @return string|null
     */
    public function getCreatedDate(): ?string
    {
        return $this->CreatedDate;
    }
    /**
     * Set CreatedDate value
     * @param string $createdDate
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchResult
     */
    public function setCreatedDate(?string $createdDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        $this->CreatedDate = $createdDate;
        
        return $this;
    }
    /**
     * Get UniversalRecordLocatorCode value
     * @return string|null
     */
    public function getUniversalRecordLocatorCode(): ?string
    {
        return $this->UniversalRecordLocatorCode;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * @param string $universalRecordLocatorCode
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchResult
     */
    public function setUniversalRecordLocatorCode(?string $universalRecordLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($universalRecordLocatorCode) && !is_string($universalRecordLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universalRecordLocatorCode, true), gettype($universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
        return $this;
    }
}
