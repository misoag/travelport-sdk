<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationDisplayDetailsReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to display the addtional details of provider reservation information .
 * @subpackage Structs
 */
class ProviderReservationDisplayDetailsReq extends BaseReq
{
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
    /**
     * The ProviderReservationDetail
     * @var bool|null
     */
    protected ?bool $ProviderReservationDetail = null;
    /**
     * The CustomCheck
     * @var bool|null
     */
    protected ?bool $CustomCheck = null;
    /**
     * The ProviderProfile
     * @var bool|null
     */
    protected ?bool $ProviderProfile = null;
    /**
     * The DivideDetails
     * @var bool|null
     */
    protected ?bool $DivideDetails = null;
    /**
     * The EnhancedItinModifiers
     * @var bool|null
     */
    protected ?bool $EnhancedItinModifiers = null;
    /**
     * The IntegratedContent
     * @var bool|null
     */
    protected ?bool $IntegratedContent = null;
    /**
     * The Cruise
     * @var bool|null
     */
    protected ?bool $Cruise = null;
    /**
     * The RailSegment
     * @var bool|null
     */
    protected ?bool $RailSegment = null;
    /**
     * Constructor method for ProviderReservationDisplayDetailsReq
     * @uses ProviderReservationDisplayDetailsReq::setProviderCode()
     * @uses ProviderReservationDisplayDetailsReq::setProviderLocatorCode()
     * @uses ProviderReservationDisplayDetailsReq::setProviderReservationDetail()
     * @uses ProviderReservationDisplayDetailsReq::setCustomCheck()
     * @uses ProviderReservationDisplayDetailsReq::setProviderProfile()
     * @uses ProviderReservationDisplayDetailsReq::setDivideDetails()
     * @uses ProviderReservationDisplayDetailsReq::setEnhancedItinModifiers()
     * @uses ProviderReservationDisplayDetailsReq::setIntegratedContent()
     * @uses ProviderReservationDisplayDetailsReq::setCruise()
     * @uses ProviderReservationDisplayDetailsReq::setRailSegment()
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param bool $providerReservationDetail
     * @param bool $customCheck
     * @param bool $providerProfile
     * @param bool $divideDetails
     * @param bool $enhancedItinModifiers
     * @param bool $integratedContent
     * @param bool $cruise
     * @param bool $railSegment
     */
    public function __construct(?string $providerCode = null, ?string $providerLocatorCode = null, ?bool $providerReservationDetail = null, ?bool $customCheck = null, ?bool $providerProfile = null, ?bool $divideDetails = null, ?bool $enhancedItinModifiers = null, ?bool $integratedContent = null, ?bool $cruise = null, ?bool $railSegment = null)
    {
        $this
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
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
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsReq
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
