<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Ticketed;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Name
     * @var \Travelport\UniversalRecord\StructType\Name[]
     */
    public ?array $Name = null;
    /**
     * The ProductInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeProductInfo[]
     */
    public ?array $ProductInfo = null;
    /**
     * The AgencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AgencyInfo $AgencyInfo = null;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $UniversalRecordLocatorCode = null;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - documentation: The date the resevation record was created
     * - use: optional
     * @var string|null
     */
    public ?string $CreatedDate = null;
    /**
     * The EarliestTravelDate
     * Meta information extracted from the WSDL
     * - documentation: The date on which th earliest travel can occur
     * - use: optional
     * @var string|null
     */
    public ?string $EarliestTravelDate = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * The ExternalSearchIndex
     * Meta information extracted from the WSDL
     * - documentation: This index is used for retrieving locator code from GDS. Provider specific info that can be used to help identify a record if no ProviderLocatorCode is known
     * - base: xs:string
     * @var string|null
     */
    public ?string $ExternalSearchIndex = null;
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
     * @param string $ticketed
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
     */
    public function setTicketed(string $ticketed): self
    {
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
     * Set Name value
     * @param \Travelport\UniversalRecord\StructType\Name[] $name
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
     */
    public function setName(?array $name = null): self
    {
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
     * Set ProductInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeProductInfo[] $productInfo
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchResult
     */
    public function setProductInfo(?array $productInfo = null): self
    {
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
        $this->ExternalSearchIndex = $externalSearchIndex;
        
        return $this;
    }
}
