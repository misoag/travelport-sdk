<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?array $DisplayDetail = null;
    /**
     * The DisplayContents
     * Meta information extracted from the WSDL
     * - choice: DisplayDetail | DisplayContents
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: DisplayContents
     * @var string|null
     */
    protected ?string $DisplayContents = null;
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
     * @return \Travelport\UniversalRecord\StructType\DisplayDetail[]
     */
    public function getDisplayDetail(): ?array
    {
        return isset($this->DisplayDetail) ? $this->DisplayDetail : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDisplayDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisplayDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisplayDetailForArrayConstraintsFromSetDisplayDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $displayDetailsDisplayDetailItem) {
            // validation for constraint: itemType
            if (!$displayDetailsDisplayDetailItem instanceof \Travelport\UniversalRecord\StructType\DisplayDetail) {
                $invalidValues[] = is_object($displayDetailsDisplayDetailItem) ? get_class($displayDetailsDisplayDetailItem) : sprintf('%s(%s)', gettype($displayDetailsDisplayDetailItem), var_export($displayDetailsDisplayDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DisplayDetail property can only contain items of type \Travelport\UniversalRecord\StructType\DisplayDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setDisplayDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisplayDetail method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDisplayDetailForChoiceConstraintsFromSetDisplayDetail($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DisplayContents',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DisplayDetail can\'t be set as the property %s is already set. Only one property must be set among these properties: DisplayDetail, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DisplayDetail value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DisplayDetail[] $displayDetail
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setDisplayDetail(?array $displayDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($displayDetailArrayErrorMessage = self::validateDisplayDetailForArrayConstraintsFromSetDisplayDetail($displayDetail))) {
            throw new InvalidArgumentException($displayDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(DisplayDetail, DisplayContents)
        if ('' !== ($displayDetailChoiceErrorMessage = self::validateDisplayDetailForChoiceConstraintsFromSetDisplayDetail($displayDetail))) {
            throw new InvalidArgumentException($displayDetailChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($displayDetail) && count($displayDetail) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($displayDetail)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($displayDetail) && count($displayDetail) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($displayDetail)), __LINE__);
        }
        if (is_null($displayDetail) || (is_array($displayDetail) && empty($displayDetail))) {
            unset($this->DisplayDetail);
        } else {
            $this->DisplayDetail = $displayDetail;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToDisplayDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToDisplayDetail method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToDisplayDetail($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DisplayContents',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DisplayDetail can\'t be set as the property %s is already set. Only one property must be set among these properties: DisplayDetail, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to DisplayDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DisplayDetail $item
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function addToDisplayDetail(\Travelport\UniversalRecord\StructType\DisplayDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\DisplayDetail) {
            throw new InvalidArgumentException(sprintf('The DisplayDetail property can only contain items of type \Travelport\UniversalRecord\StructType\DisplayDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(DisplayDetail, DisplayContents)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToDisplayDetail($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->DisplayDetail) && count($this->DisplayDetail) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->DisplayDetail)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->DisplayDetail) && count($this->DisplayDetail) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->DisplayDetail)), __LINE__);
        }
        $this->DisplayDetail[] = $item;
        
        return $this;
    }
    /**
     * Get DisplayContents value
     * @return string|null
     */
    public function getDisplayContents(): ?string
    {
        return isset($this->DisplayContents) ? $this->DisplayContents : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDisplayContents method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisplayContents method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDisplayContentsForChoiceConstraintsFromSetDisplayContents($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DisplayDetail',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DisplayContents can\'t be set as the property %s is already set. Only one property must be set among these properties: DisplayContents, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DisplayContents value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $displayContents
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
     */
    public function setDisplayContents(?string $displayContents = null): self
    {
        // validation for constraint: string
        if (!is_null($displayContents) && !is_string($displayContents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayContents, true), gettype($displayContents)), __LINE__);
        }
        // validation for constraint: choice(DisplayDetail, DisplayContents)
        if ('' !== ($displayContentsChoiceErrorMessage = self::validateDisplayContentsForChoiceConstraintsFromSetDisplayContents($displayContents))) {
            throw new InvalidArgumentException($displayContentsChoiceErrorMessage, __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
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
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
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
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
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
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
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
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
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
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
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
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails
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
