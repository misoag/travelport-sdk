<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: The container to display the contents of PNR in GDS format.
 * @subpackage Structs
 */
class DisplayDetails extends AbstractStructBase
{
    /**
     * The DisplayDetail
     * Meta information extracted from the WSDL
     * - choice: DisplayDetail | DisplayContents
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: DisplayDetail
     * @var \Travelport\UniversalRecord\StructType\DisplayDetail[]
     */
    public ?array $DisplayDetail = null;
    /**
     * The DisplayContents
     * Meta information extracted from the WSDL
     * - choice: DisplayDetail | DisplayContents
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: DisplayContents
     * @var string|null
     */
    public ?string $DisplayContents = null;
    /**
     * The ProviderReservationDetail
     * Meta information extracted from the WSDL
     * - documentation: Provider Reservation data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $ProviderReservationDetail = null;
    /**
     * The CustomCheck
     * Meta information extracted from the WSDL
     * - documentation: Custom check data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $CustomCheck = null;
    /**
     * The ProviderProfile
     * Meta information extracted from the WSDL
     * - documentation: Provider Profile data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $ProviderProfile = null;
    /**
     * The DivideDetails
     * Meta information extracted from the WSDL
     * - documentation: Divide Details data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $DivideDetails = null;
    /**
     * The EnhancedItinModifiers
     * Meta information extracted from the WSDL
     * - documentation: Enhanced itinerary modifiers data exists
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $EnhancedItinModifiers = null;
    /**
     * The IntegratedContent
     * Meta information extracted from the WSDL
     * - documentation: Integrated content data exists
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $IntegratedContent = null;
    /**
     * The Cruise
     * Meta information extracted from the WSDL
     * - documentation: Cruise data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $Cruise = null;
    /**
     * The RailSegment
     * Meta information extracted from the WSDL
     * - documentation: Rail Segment data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $RailSegment = null;
    /**
     * Constructor method for DisplayDetails
     * @uses DisplayDetails::setDisplayDetail()
     * @uses DisplayDetails::setDisplayContents()
     * @uses DisplayDetails::setProviderReservationDetail()
     * @uses DisplayDetails::setCustomCheck()
     * @uses DisplayDetails::setProviderProfile()
     * @uses DisplayDetails::setDivideDetails()
     * @uses DisplayDetails::setEnhancedItinModifiers()
     * @uses DisplayDetails::setIntegratedContent()
     * @uses DisplayDetails::setCruise()
     * @uses DisplayDetails::setRailSegment()
     * @param \Travelport\UniversalRecord\StructType\DisplayDetail[] $displayDetail
     * @param string $displayContents
     * @param bool $providerReservationDetail
     * @param bool $customCheck
     * @param bool $providerProfile
     * @param bool $divideDetails
     * @param bool $enhancedItinModifiers
     * @param bool $integratedContent
     * @param bool $cruise
     * @param bool $railSegment
     */
    public function __construct(?array $displayDetail = null, ?string $displayContents = null, ?bool $providerReservationDetail = null, ?bool $customCheck = null, ?bool $providerProfile = null, ?bool $divideDetails = null, ?bool $enhancedItinModifiers = null, ?bool $integratedContent = null, ?bool $cruise = null, ?bool $railSegment = null)
    {
        $this
            ->setDisplayDetail($displayDetail)
            ->setDisplayContents($displayContents)
            ->setProviderReservationDetail($providerReservationDetail)
            ->setCustomCheck($customCheck)
            ->setProviderProfile($providerProfile)
            ->setDivideDetails($divideDetails)
            ->setEnhancedItinModifiers($enhancedItinModifiers)
            ->setIntegratedContent($integratedContent)
            ->setCruise($cruise)
            ->setRailSegment($railSegment);
    }
    /**
     * Get DisplayDetail value
     * @return \Travelport\UniversalRecord\StructType\DisplayDetail[]|null
     */
    public function getDisplayDetail(): ?array
    {
        return $this->DisplayDetail ?? null;
    }
    /**
     * Set DisplayDetail value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\DisplayDetail[] $displayDetail
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setDisplayDetail(?array $displayDetail = null): self
    {
        if (is_null($displayDetail) || (is_array($displayDetail) && empty($displayDetail))) {
            unset($this->DisplayDetail);
        } else {
            $this->DisplayDetail = $displayDetail;
        }
        
        return $this;
    }
    /**
     * Add item to DisplayDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DisplayDetail $item
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function addToDisplayDetail(\Travelport\UniversalRecord\StructType\DisplayDetail $item): self
    {
        $this->DisplayDetail[] = $item;
        
        return $this;
    }
    /**
     * Get DisplayContents value
     * @return string|null
     */
    public function getDisplayContents(): ?string
    {
        return $this->DisplayContents ?? null;
    }
    /**
     * Set DisplayContents value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $displayContents
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setDisplayContents(?string $displayContents = null): self
    {
        if (is_null($displayContents) || (is_array($displayContents) && empty($displayContents))) {
            unset($this->DisplayContents);
        } else {
            $this->DisplayContents = $displayContents;
        }
        
        return $this;
    }
    /**
     * Get ProviderReservationDetail value
     * @return bool|null
     */
    public function getProviderReservationDetail(): ?bool
    {
        return $this->ProviderReservationDetail;
    }
    /**
     * Set ProviderReservationDetail value
     * @param bool $providerReservationDetail
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setProviderReservationDetail(?bool $providerReservationDetail = null): self
    {
        $this->ProviderReservationDetail = $providerReservationDetail;
        
        return $this;
    }
    /**
     * Get CustomCheck value
     * @return bool|null
     */
    public function getCustomCheck(): ?bool
    {
        return $this->CustomCheck;
    }
    /**
     * Set CustomCheck value
     * @param bool $customCheck
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setCustomCheck(?bool $customCheck = null): self
    {
        $this->CustomCheck = $customCheck;
        
        return $this;
    }
    /**
     * Get ProviderProfile value
     * @return bool|null
     */
    public function getProviderProfile(): ?bool
    {
        return $this->ProviderProfile;
    }
    /**
     * Set ProviderProfile value
     * @param bool $providerProfile
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setProviderProfile(?bool $providerProfile = null): self
    {
        $this->ProviderProfile = $providerProfile;
        
        return $this;
    }
    /**
     * Get DivideDetails value
     * @return bool|null
     */
    public function getDivideDetails(): ?bool
    {
        return $this->DivideDetails;
    }
    /**
     * Set DivideDetails value
     * @param bool $divideDetails
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setDivideDetails(?bool $divideDetails = null): self
    {
        $this->DivideDetails = $divideDetails;
        
        return $this;
    }
    /**
     * Get EnhancedItinModifiers value
     * @return bool|null
     */
    public function getEnhancedItinModifiers(): ?bool
    {
        return $this->EnhancedItinModifiers;
    }
    /**
     * Set EnhancedItinModifiers value
     * @param bool $enhancedItinModifiers
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setEnhancedItinModifiers(?bool $enhancedItinModifiers = null): self
    {
        $this->EnhancedItinModifiers = $enhancedItinModifiers;
        
        return $this;
    }
    /**
     * Get IntegratedContent value
     * @return bool|null
     */
    public function getIntegratedContent(): ?bool
    {
        return $this->IntegratedContent;
    }
    /**
     * Set IntegratedContent value
     * @param bool $integratedContent
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setIntegratedContent(?bool $integratedContent = null): self
    {
        $this->IntegratedContent = $integratedContent;
        
        return $this;
    }
    /**
     * Get Cruise value
     * @return bool|null
     */
    public function getCruise(): ?bool
    {
        return $this->Cruise;
    }
    /**
     * Set Cruise value
     * @param bool $cruise
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setCruise(?bool $cruise = null): self
    {
        $this->Cruise = $cruise;
        
        return $this;
    }
    /**
     * Get RailSegment value
     * @return bool|null
     */
    public function getRailSegment(): ?bool
    {
        return $this->RailSegment;
    }
    /**
     * Set RailSegment value
     * @param bool $railSegment
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setRailSegment(?bool $railSegment = null): self
    {
        $this->RailSegment = $railSegment;
        
        return $this;
    }
}
