<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordSearchResult StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for reservations that match the search criteria
 * @subpackage Structs
 */
class UniversalRecordSearchResult extends AbstractStructBase
{
    /**
     * The ProductInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ProductInfo[]
     */
    public ?array $ProductInfo = null;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $UniversalRecordLocatorCode = null;
    /**
     * The EarliestTravelDate
     * Meta information extracted from the WSDL
     * - documentation: The date on which th earliest travel can occur
     * - use: optional
     * @var string|null
     */
    public ?string $EarliestTravelDate = null;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - documentation: The date the resevation record was created
     * - use: optional
     * @var string|null
     */
    public ?string $CreatedDate = null;
    /**
     * The SavedTripLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Locator Code of the Saved Trip that is associated to the Universal Record. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $SavedTripLocatorCode = null;
    /**
     * The Ticketed
     * Meta information extracted from the WSDL
     * - documentation: If the universal record is ticketed or not or partially ticketed
     * - use: optional
     * @var string|null
     */
    public ?string $Ticketed = null;
    /**
     * The RecordStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of Universal Record e.g. Current,Past,Cancelled
     * - use: optional
     * @var string|null
     */
    public ?string $RecordStatus = null;
    /**
     * The TicketStatus
     * Meta information extracted from the WSDL
     * - documentation: If the universal record is ticketed or not or partially ticketed
     * - use: optional
     * @var string|null
     */
    public ?string $TicketStatus = null;
    /**
     * Constructor method for UniversalRecordSearchResult
     * @uses UniversalRecordSearchResult::setProductInfo()
     * @uses UniversalRecordSearchResult::setUniversalRecordLocatorCode()
     * @uses UniversalRecordSearchResult::setEarliestTravelDate()
     * @uses UniversalRecordSearchResult::setCreatedDate()
     * @uses UniversalRecordSearchResult::setSavedTripLocatorCode()
     * @uses UniversalRecordSearchResult::setTicketed()
     * @uses UniversalRecordSearchResult::setRecordStatus()
     * @uses UniversalRecordSearchResult::setTicketStatus()
     * @param \Travelport\UniversalRecord\StructType\ProductInfo[] $productInfo
     * @param string $universalRecordLocatorCode
     * @param string $earliestTravelDate
     * @param string $createdDate
     * @param string $savedTripLocatorCode
     * @param string $ticketed
     * @param string $recordStatus
     * @param string $ticketStatus
     */
    public function __construct(?array $productInfo = null, ?string $universalRecordLocatorCode = null, ?string $earliestTravelDate = null, ?string $createdDate = null, ?string $savedTripLocatorCode = null, ?string $ticketed = null, ?string $recordStatus = null, ?string $ticketStatus = null)
    {
        $this
            ->setProductInfo($productInfo)
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setEarliestTravelDate($earliestTravelDate)
            ->setCreatedDate($createdDate)
            ->setSavedTripLocatorCode($savedTripLocatorCode)
            ->setTicketed($ticketed)
            ->setRecordStatus($recordStatus)
            ->setTicketStatus($ticketStatus);
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
     */
    public function addToProductInfo(\Travelport\UniversalRecord\StructType\ProductInfo $item): self
    {
        $this->ProductInfo[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
     */
    public function setUniversalRecordLocatorCode(?string $universalRecordLocatorCode = null): self
    {
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
     */
    public function setCreatedDate(?string $createdDate = null): self
    {
        $this->CreatedDate = $createdDate;
        
        return $this;
    }
    /**
     * Get SavedTripLocatorCode value
     * @return string|null
     */
    public function getSavedTripLocatorCode(): ?string
    {
        return $this->SavedTripLocatorCode;
    }
    /**
     * Set SavedTripLocatorCode value
     * @param string $savedTripLocatorCode
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
     */
    public function setSavedTripLocatorCode(?string $savedTripLocatorCode = null): self
    {
        $this->SavedTripLocatorCode = $savedTripLocatorCode;
        
        return $this;
    }
    /**
     * Get Ticketed value
     * @return string|null
     */
    public function getTicketed(): ?string
    {
        return $this->Ticketed;
    }
    /**
     * Set Ticketed value
     * @param string $ticketed
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
     */
    public function setTicketed(?string $ticketed = null): self
    {
        $this->Ticketed = $ticketed;
        
        return $this;
    }
    /**
     * Get RecordStatus value
     * @return string|null
     */
    public function getRecordStatus(): ?string
    {
        return $this->RecordStatus;
    }
    /**
     * Set RecordStatus value
     * @param string $recordStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
     */
    public function setRecordStatus(?string $recordStatus = null): self
    {
        $this->RecordStatus = $recordStatus;
        
        return $this;
    }
    /**
     * Get TicketStatus value
     * @return string|null
     */
    public function getTicketStatus(): ?string
    {
        return $this->TicketStatus;
    }
    /**
     * Set TicketStatus value
     * @param string $ticketStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
     */
    public function setTicketStatus(?string $ticketStatus = null): self
    {
        $this->TicketStatus = $ticketStatus;
        
        return $this;
    }
}
