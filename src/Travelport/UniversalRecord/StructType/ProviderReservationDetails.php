<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates the type of content in PNR,to retrieve the display only content use ProviderReservationDisplayDetailsReq
 * @subpackage Structs
 */
class ProviderReservationDetails extends AbstractStructBase
{
    /**
     * The ProviderReservationDetail
     * Meta information extracted from the WSDL
     * - documentation: Provider Reservation data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $ProviderReservationDetail = null;
    /**
     * The CustomCheck
     * Meta information extracted from the WSDL
     * - documentation: Custom check data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $CustomCheck = null;
    /**
     * The ProviderProfile
     * Meta information extracted from the WSDL
     * - documentation: Provider Profile data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $ProviderProfile = null;
    /**
     * The DivideDetails
     * Meta information extracted from the WSDL
     * - documentation: Divide Details data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $DivideDetails = null;
    /**
     * The EnhancedItinModifiers
     * Meta information extracted from the WSDL
     * - documentation: Enhanced itinerary modifiers data exists
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $EnhancedItinModifiers = null;
    /**
     * The IntegratedContent
     * Meta information extracted from the WSDL
     * - documentation: Integrated content data exists
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $IntegratedContent = null;
    /**
     * The Cruise
     * Meta information extracted from the WSDL
     * - documentation: Cruise data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $Cruise = null;
    /**
     * The RailSegment
     * Meta information extracted from the WSDL
     * - documentation: Rail Segment data exists.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $RailSegment = null;
    /**
     * Constructor method for ProviderReservationDetails
     * @uses ProviderReservationDetails::setProviderReservationDetail()
     * @uses ProviderReservationDetails::setCustomCheck()
     * @uses ProviderReservationDetails::setProviderProfile()
     * @uses ProviderReservationDetails::setDivideDetails()
     * @uses ProviderReservationDetails::setEnhancedItinModifiers()
     * @uses ProviderReservationDetails::setIntegratedContent()
     * @uses ProviderReservationDetails::setCruise()
     * @uses ProviderReservationDetails::setRailSegment()
     * @param bool $providerReservationDetail
     * @param bool $customCheck
     * @param bool $providerProfile
     * @param bool $divideDetails
     * @param bool $enhancedItinModifiers
     * @param bool $integratedContent
     * @param bool $cruise
     * @param bool $railSegment
     */
    public function __construct(?bool $providerReservationDetail = null, ?bool $customCheck = null, ?bool $providerProfile = null, ?bool $divideDetails = null, ?bool $enhancedItinModifiers = null, ?bool $integratedContent = null, ?bool $cruise = null, ?bool $railSegment = null)
    {
        $this
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDetails
     */
    public function setProviderReservationDetail(?bool $providerReservationDetail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($providerReservationDetail) && !is_bool($providerReservationDetail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($providerReservationDetail, true), gettype($providerReservationDetail)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDetails
     */
    public function setCustomCheck(?bool $customCheck = null): self
    {
        // validation for constraint: boolean
        if (!is_null($customCheck) && !is_bool($customCheck)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customCheck, true), gettype($customCheck)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDetails
     */
    public function setProviderProfile(?bool $providerProfile = null): self
    {
        // validation for constraint: boolean
        if (!is_null($providerProfile) && !is_bool($providerProfile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($providerProfile, true), gettype($providerProfile)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDetails
     */
    public function setDivideDetails(?bool $divideDetails = null): self
    {
        // validation for constraint: boolean
        if (!is_null($divideDetails) && !is_bool($divideDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($divideDetails, true), gettype($divideDetails)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDetails
     */
    public function setEnhancedItinModifiers(?bool $enhancedItinModifiers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enhancedItinModifiers) && !is_bool($enhancedItinModifiers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enhancedItinModifiers, true), gettype($enhancedItinModifiers)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDetails
     */
    public function setIntegratedContent(?bool $integratedContent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($integratedContent) && !is_bool($integratedContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($integratedContent, true), gettype($integratedContent)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDetails
     */
    public function setCruise(?bool $cruise = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cruise) && !is_bool($cruise)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cruise, true), gettype($cruise)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDetails
     */
    public function setRailSegment(?bool $railSegment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($railSegment) && !is_bool($railSegment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($railSegment, true), gettype($railSegment)), __LINE__);
        }
        $this->RailSegment = $railSegment;
        
        return $this;
    }
}
