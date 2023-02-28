<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?array $ProductInfo = null;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $UniversalRecordLocatorCode = null;
    /**
     * The EarliestTravelDate
     * Meta information extracted from the WSDL
     * - documentation: The date on which th earliest travel can occur
     * - use: optional
     * @var string|null
     */
    protected ?string $EarliestTravelDate = null;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - documentation: The date the resevation record was created
     * - use: optional
     * @var string|null
     */
    protected ?string $CreatedDate = null;
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
    protected ?string $SavedTripLocatorCode = null;
    /**
     * The Ticketed
     * Meta information extracted from the WSDL
     * - documentation: If the universal record is ticketed or not or partially ticketed
     * - use: optional
     * @var string|null
     */
    protected ?string $Ticketed = null;
    /**
     * The RecordStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of Universal Record e.g. Current,Past,Cancelled
     * - use: optional
     * @var string|null
     */
    protected ?string $RecordStatus = null;
    /**
     * The TicketStatus
     * Meta information extracted from the WSDL
     * - documentation: If the universal record is ticketed or not or partially ticketed
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketStatus = null;
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
     * This method is responsible for validating the value(s) passed to the setProductInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductInfoForArrayConstraintFromSetProductInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordSearchResultProductInfoItem) {
            // validation for constraint: itemType
            if (!$universalRecordSearchResultProductInfoItem instanceof \Travelport\UniversalRecord\StructType\ProductInfo) {
                $invalidValues[] = is_object($universalRecordSearchResultProductInfoItem) ? get_class($universalRecordSearchResultProductInfoItem) : sprintf('%s(%s)', gettype($universalRecordSearchResultProductInfoItem), var_export($universalRecordSearchResultProductInfoItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
     */
    public function setProductInfo(?array $productInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($productInfoArrayErrorMessage = self::validateProductInfoForArrayConstraintFromSetProductInfo($productInfo))) {
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
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
        // validation for constraint: string
        if (!is_null($universalRecordLocatorCode) && !is_string($universalRecordLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universalRecordLocatorCode, true), gettype($universalRecordLocatorCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
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
        // validation for constraint: string
        if (!is_null($savedTripLocatorCode) && !is_string($savedTripLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($savedTripLocatorCode, true), gettype($savedTripLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($savedTripLocatorCode) && mb_strlen((string) $savedTripLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $savedTripLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($savedTripLocatorCode) && mb_strlen((string) $savedTripLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $savedTripLocatorCode)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeReservationTicketed::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeReservationTicketed::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ticketed
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
     */
    public function setTicketed(?string $ticketed = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeReservationTicketed::valueIsValid($ticketed)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeReservationTicketed', is_array($ticketed) ? implode(', ', $ticketed) : var_export($ticketed, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeReservationTicketed::getValidValues())), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeRecordStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeRecordStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $recordStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
     */
    public function setRecordStatus(?string $recordStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeRecordStatus::valueIsValid($recordStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeRecordStatus', is_array($recordStatus) ? implode(', ', $recordStatus) : var_export($recordStatus, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeRecordStatus::getValidValues())), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\URTicketStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\URTicketStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ticketStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult
     */
    public function setTicketStatus(?string $ticketStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\URTicketStatus::valueIsValid($ticketStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\URTicketStatus', is_array($ticketStatus) ? implode(', ', $ticketStatus) : var_export($ticketStatus, true), implode(', ', \Travelport\UniversalRecord\EnumType\URTicketStatus::getValidValues())), __LINE__);
        }
        $this->TicketStatus = $ticketStatus;
        
        return $this;
    }
}
