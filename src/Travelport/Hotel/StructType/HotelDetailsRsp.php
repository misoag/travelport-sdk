<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelDetailsRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response showing details of a given hotel property
 * @subpackage Structs
 */
class HotelDetailsRsp extends BaseRsp
{
    /**
     * The NextResultReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:NextResultReference
     * @var \Travelport\Hotel\StructType\NextResultReference|null
     */
    protected ?\Travelport\Hotel\StructType\NextResultReference $NextResultReference = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Hotel\StructType\HostToken|null
     */
    protected ?\Travelport\Hotel\StructType\HostToken $HostToken = null;
    /**
     * The RequestedHotelDetails
     * Meta information extracted from the WSDL
     * - choice: RequestedHotelDetails | HotelAlternateProperties
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: RequestedHotelDetails
     * @var \Travelport\Hotel\StructType\RequestedHotelDetails|null
     */
    protected ?\Travelport\Hotel\StructType\RequestedHotelDetails $RequestedHotelDetails = null;
    /**
     * The HotelAlternateProperties
     * Meta information extracted from the WSDL
     * - choice: RequestedHotelDetails | HotelAlternateProperties
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: HotelAlternateProperties
     * @var \Travelport\Hotel\StructType\HotelAlternateProperties|null
     */
    protected ?\Travelport\Hotel\StructType\HotelAlternateProperties $HotelAlternateProperties = null;
    /**
     * The GuestReviews
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: GuestReviews
     * @var \Travelport\Hotel\StructType\GuestReviews|null
     */
    protected ?\Travelport\Hotel\StructType\GuestReviews $GuestReviews = null;
    /**
     * Constructor method for HotelDetailsRsp
     * @uses HotelDetailsRsp::setNextResultReference()
     * @uses HotelDetailsRsp::setHostToken()
     * @uses HotelDetailsRsp::setRequestedHotelDetails()
     * @uses HotelDetailsRsp::setHotelAlternateProperties()
     * @uses HotelDetailsRsp::setGuestReviews()
     * @param \Travelport\Hotel\StructType\NextResultReference $nextResultReference
     * @param \Travelport\Hotel\StructType\HostToken $hostToken
     * @param \Travelport\Hotel\StructType\RequestedHotelDetails $requestedHotelDetails
     * @param \Travelport\Hotel\StructType\HotelAlternateProperties $hotelAlternateProperties
     * @param \Travelport\Hotel\StructType\GuestReviews $guestReviews
     */
    public function __construct(?\Travelport\Hotel\StructType\NextResultReference $nextResultReference = null, ?\Travelport\Hotel\StructType\HostToken $hostToken = null, ?\Travelport\Hotel\StructType\RequestedHotelDetails $requestedHotelDetails = null, ?\Travelport\Hotel\StructType\HotelAlternateProperties $hotelAlternateProperties = null, ?\Travelport\Hotel\StructType\GuestReviews $guestReviews = null)
    {
        $this
            ->setNextResultReference($nextResultReference)
            ->setHostToken($hostToken)
            ->setRequestedHotelDetails($requestedHotelDetails)
            ->setHotelAlternateProperties($hotelAlternateProperties)
            ->setGuestReviews($guestReviews);
    }
    /**
     * Get NextResultReference value
     * @return \Travelport\Hotel\StructType\NextResultReference|null
     */
    public function getNextResultReference(): ?\Travelport\Hotel\StructType\NextResultReference
    {
        return $this->NextResultReference;
    }
    /**
     * Set NextResultReference value
     * @param \Travelport\Hotel\StructType\NextResultReference $nextResultReference
     * @return \Travelport\Hotel\StructType\HotelDetailsRsp
     */
    public function setNextResultReference(?\Travelport\Hotel\StructType\NextResultReference $nextResultReference = null): self
    {
        $this->NextResultReference = $nextResultReference;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\Hotel\StructType\HostToken|null
     */
    public function getHostToken(): ?\Travelport\Hotel\StructType\HostToken
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\Hotel\StructType\HostToken $hostToken
     * @return \Travelport\Hotel\StructType\HotelDetailsRsp
     */
    public function setHostToken(?\Travelport\Hotel\StructType\HostToken $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Get RequestedHotelDetails value
     * @return \Travelport\Hotel\StructType\RequestedHotelDetails|null
     */
    public function getRequestedHotelDetails(): ?\Travelport\Hotel\StructType\RequestedHotelDetails
    {
        return isset($this->RequestedHotelDetails) ? $this->RequestedHotelDetails : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRequestedHotelDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequestedHotelDetails method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRequestedHotelDetailsForChoiceConstraintsFromSetRequestedHotelDetails($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'HotelAlternateProperties',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RequestedHotelDetails can\'t be set as the property %s is already set. Only one property must be set among these properties: RequestedHotelDetails, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RequestedHotelDetails value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\RequestedHotelDetails $requestedHotelDetails
     * @return \Travelport\Hotel\StructType\HotelDetailsRsp
     */
    public function setRequestedHotelDetails(?\Travelport\Hotel\StructType\RequestedHotelDetails $requestedHotelDetails = null): self
    {
        // validation for constraint: choice(RequestedHotelDetails, HotelAlternateProperties)
        if ('' !== ($requestedHotelDetailsChoiceErrorMessage = self::validateRequestedHotelDetailsForChoiceConstraintsFromSetRequestedHotelDetails($requestedHotelDetails))) {
            throw new InvalidArgumentException($requestedHotelDetailsChoiceErrorMessage, __LINE__);
        }
        if (is_null($requestedHotelDetails) || (is_array($requestedHotelDetails) && empty($requestedHotelDetails))) {
            unset($this->RequestedHotelDetails);
        } else {
            $this->RequestedHotelDetails = $requestedHotelDetails;
        }
        
        return $this;
    }
    /**
     * Get HotelAlternateProperties value
     * @return \Travelport\Hotel\StructType\HotelAlternateProperties|null
     */
    public function getHotelAlternateProperties(): ?\Travelport\Hotel\StructType\HotelAlternateProperties
    {
        return isset($this->HotelAlternateProperties) ? $this->HotelAlternateProperties : null;
    }
    /**
     * This method is responsible for validating the value passed to the setHotelAlternateProperties method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelAlternateProperties method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelAlternatePropertiesForChoiceConstraintsFromSetHotelAlternateProperties($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RequestedHotelDetails',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelAlternateProperties can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelAlternateProperties, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelAlternateProperties value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelAlternateProperties $hotelAlternateProperties
     * @return \Travelport\Hotel\StructType\HotelDetailsRsp
     */
    public function setHotelAlternateProperties(?\Travelport\Hotel\StructType\HotelAlternateProperties $hotelAlternateProperties = null): self
    {
        // validation for constraint: choice(RequestedHotelDetails, HotelAlternateProperties)
        if ('' !== ($hotelAlternatePropertiesChoiceErrorMessage = self::validateHotelAlternatePropertiesForChoiceConstraintsFromSetHotelAlternateProperties($hotelAlternateProperties))) {
            throw new InvalidArgumentException($hotelAlternatePropertiesChoiceErrorMessage, __LINE__);
        }
        if (is_null($hotelAlternateProperties) || (is_array($hotelAlternateProperties) && empty($hotelAlternateProperties))) {
            unset($this->HotelAlternateProperties);
        } else {
            $this->HotelAlternateProperties = $hotelAlternateProperties;
        }
        
        return $this;
    }
    /**
     * Get GuestReviews value
     * @return \Travelport\Hotel\StructType\GuestReviews|null
     */
    public function getGuestReviews(): ?\Travelport\Hotel\StructType\GuestReviews
    {
        return $this->GuestReviews;
    }
    /**
     * Set GuestReviews value
     * @param \Travelport\Hotel\StructType\GuestReviews $guestReviews
     * @return \Travelport\Hotel\StructType\HotelDetailsRsp
     */
    public function setGuestReviews(?\Travelport\Hotel\StructType\GuestReviews $guestReviews = null): self
    {
        $this->GuestReviews = $guestReviews;
        
        return $this;
    }
}
