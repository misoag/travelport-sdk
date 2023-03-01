<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $SavedTripName;
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
    public string $LocatorCode;
    /**
     * The ProductInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ProductInfo[]
     */
    public ?array $ProductInfo = null;
    /**
     * The EarliestTravelDate
     * Meta information extracted from the WSDL
     * - documentation: The date on which the earliest travel can occur.
     * - use: optional
     * @var string|null
     */
    public ?string $EarliestTravelDate = null;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - documentation: The date the SavedTrip was created.
     * - use: optional
     * @var string|null
     */
    public ?string $CreatedDate = null;
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
    public ?string $UniversalRecordLocatorCode = null;
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
     * Set ProductInfo value
     * @param \Travelport\UniversalRecord\StructType\ProductInfo[] $productInfo
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchResult
     */
    public function setProductInfo(?array $productInfo = null): self
    {
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
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
        return $this;
    }
}
