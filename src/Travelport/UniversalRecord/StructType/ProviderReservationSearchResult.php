<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationSearchResult StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for reservations that match the search criteria
 * @subpackage Structs
 */
class ProviderReservationSearchResult extends AbstractStructBase
{
    /**
     * The Ticketed
     * Meta information extracted from the WSDL
     * - documentation: If the reservation is ticketed. Applies to an AIR reservation only
     * - use: required
     * @var string
     */
    protected string $Ticketed;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ProviderCode;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Name
     * @var \Travelport\UniversalRecord\StructType\Name[]
     */
    protected ?array $Name = null;
    /**
     * The ProductInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeProductInfo[]
     */
    protected ?array $ProductInfo = null;
    /**
     * The AgencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AgencyInfo $AgencyInfo = null;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $UniversalRecordLocatorCode = null;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - documentation: The date the resevation record was created
     * - use: optional
     * @var string|null
     */
    protected ?string $CreatedDate = null;
    /**
     * The EarliestTravelDate
     * Meta information extracted from the WSDL
     * - documentation: The date on which th earliest travel can occur
     * - use: optional
     * @var string|null
     */
    protected ?string $EarliestTravelDate = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
    /**
     * The ExternalSearchIndex
     * Meta information extracted from the WSDL
     * - documentation: This index is used for retrieving locator code from GDS. Provider specific info that can be used to help identify a record if no ProviderLocatorCode is known
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ExternalSearchIndex = null;
    /**
     * Constructor method for ProviderReservationSearchResult
     * @uses ProviderReservationSearchResult::setTicketed()
     * @uses ProviderReservationSearchResult::setProviderCode()
     * @uses ProviderReservationSearchResult::setName()
     * @uses ProviderReservationSearchResult::setProductInfo()
     * @uses ProviderReservationSearchResult::setAgencyInfo()
     * @uses ProviderReservationSearchResult::setUniversalRecordLocatorCode()
     * @uses ProviderReservationSearchResult::setCreatedDate()
     * @uses ProviderReservationSearchResult::setEarliestTravelDate()
     * @uses ProviderReservationSearchResult::setProviderLocatorCode()
     * @uses ProviderReservationSearchResult::setExternalSearchIndex()
     * @param string $ticketed
     * @param string $providerCode
     * @param \Travelport\UniversalRecord\StructType\Name[] $name
     * @param \Travelport\UniversalRecord\StructType\TypeProductInfo[] $productInfo
     * @param \Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo
     * @param string $universalRecordLocatorCode
     * @param string $createdDate
     * @param string $earliestTravelDate
     * @param string $providerLocatorCode
     * @param string $externalSearchIndex
     */
    public function __construct(string $ticketed, string $providerCode, ?array $name = null, ?array $productInfo = null, ?\Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo = null, ?string $universalRecordLocatorCode = null, ?string $createdDate = null, ?string $earliestTravelDate = null, ?string $providerLocatorCode = null, ?string $externalSearchIndex = null)
    {
        $this
            ->setTicketed($ticketed)
            ->setProviderCode($providerCode)
            ->setName($name)
            ->setProductInfo($productInfo)
            ->setAgencyInfo($agencyInfo)
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setCreatedDate($createdDate)
            ->setEarliestTravelDate($earliestTravelDate)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setExternalSearchIndex($externalSearchIndex);
    }
    /**
     * Get Ticketed value
     * @return string
     */
    public function getTicketed(): string
    {
        return $this->Ticketed;
    }
    /**
     * Set Ticketed value
     * @uses \Travelport\UniversalRecord\EnumType\TypeReservationTicketed::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeReservationTicketed::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ticketed
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
     */
    public function setTicketed(string $ticketed): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeReservationTicketed::valueIsValid($ticketed)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeReservationTicketed', is_array($ticketed) ? implode(', ', $ticketed) : var_export($ticketed, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeReservationTicketed::getValidValues())), __LINE__);
        }
        $this->Ticketed = $ticketed;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
     */
    public function setProviderCode(string $providerCode): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\UniversalRecord\StructType\Name[]
     */
    public function getName(): ?array
    {
        return $this->Name;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameForArrayConstraintFromSetName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $providerReservationSearchResultNameItem) {
            // validation for constraint: itemType
            if (!$providerReservationSearchResultNameItem instanceof \Travelport\UniversalRecord\StructType\Name) {
                $invalidValues[] = is_object($providerReservationSearchResultNameItem) ? get_class($providerReservationSearchResultNameItem) : sprintf('%s(%s)', gettype($providerReservationSearchResultNameItem), var_export($providerReservationSearchResultNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Name property can only contain items of type \Travelport\UniversalRecord\StructType\Name, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Name value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Name[] $name
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
     */
    public function setName(?array $name = null): self
    {
        // validation for constraint: array
        if ('' !== ($nameArrayErrorMessage = self::validateNameForArrayConstraintFromSetName($name))) {
            throw new InvalidArgumentException($nameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($name) && count($name) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Add item to Name value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Name $item
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
     */
    public function addToName(\Travelport\UniversalRecord\StructType\Name $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Name) {
            throw new InvalidArgumentException(sprintf('The Name property can only contain items of type \Travelport\UniversalRecord\StructType\Name, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Name) && count($this->Name) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Name)), __LINE__);
        }
        $this->Name[] = $item;
        
        return $this;
    }
    /**
     * Get ProductInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeProductInfo[]
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
        foreach ($values as $providerReservationSearchResultProductInfoItem) {
            // validation for constraint: itemType
            if (!$providerReservationSearchResultProductInfoItem instanceof \Travelport\UniversalRecord\StructType\TypeProductInfo) {
                $invalidValues[] = is_object($providerReservationSearchResultProductInfoItem) ? get_class($providerReservationSearchResultProductInfoItem) : sprintf('%s(%s)', gettype($providerReservationSearchResultProductInfoItem), var_export($providerReservationSearchResultProductInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeProductInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeProductInfo[] $productInfo
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
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
     * @param \Travelport\UniversalRecord\StructType\TypeProductInfo $item
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
     */
    public function addToProductInfo(\Travelport\UniversalRecord\StructType\TypeProductInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeProductInfo) {
            throw new InvalidArgumentException(sprintf('The ProductInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeProductInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProductInfo) && count($this->ProductInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProductInfo)), __LINE__);
        }
        $this->ProductInfo[] = $item;
        
        return $this;
    }
    /**
     * Get AgencyInfo value
     * @return \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    public function getAgencyInfo(): ?\Travelport\UniversalRecord\StructType\AgencyInfo
    {
        return $this->AgencyInfo;
    }
    /**
     * Set AgencyInfo value
     * @param \Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
     */
    public function setAgencyInfo(?\Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo = null): self
    {
        $this->AgencyInfo = $agencyInfo;
        
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
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
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get ExternalSearchIndex value
     * @return string|null
     */
    public function getExternalSearchIndex(): ?string
    {
        return $this->ExternalSearchIndex;
    }
    /**
     * Set ExternalSearchIndex value
     * @param string $externalSearchIndex
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
     */
    public function setExternalSearchIndex(?string $externalSearchIndex = null): self
    {
        // validation for constraint: string
        if (!is_null($externalSearchIndex) && !is_string($externalSearchIndex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSearchIndex, true), gettype($externalSearchIndex)), __LINE__);
        }
        $this->ExternalSearchIndex = $externalSearchIndex;
        
        return $this;
    }
}
