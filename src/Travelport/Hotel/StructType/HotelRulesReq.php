<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRulesReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves hotel rules using hotel property code, chain code and hotel room rate type.
 * @subpackage Structs
 */
class HotelRulesReq extends BaseReq
{
    /**
     * The HotelReservationLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Request hotel rules using Locator code of existing hotel reservation. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - choice: HotelReservationLocatorCode | HotelRulesLookup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 8
     * - minLength: 5
     * @var string|null
     */
    protected ?string $HotelReservationLocatorCode = null;
    /**
     * The HotelRulesLookup
     * Meta information extracted from the WSDL
     * - choice: HotelReservationLocatorCode | HotelRulesLookup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\Hotel\StructType\HotelRulesLookup|null
     */
    protected ?\Travelport\Hotel\StructType\HotelRulesLookup $HotelRulesLookup = null;
    /**
     * Constructor method for HotelRulesReq
     * @uses HotelRulesReq::setHotelReservationLocatorCode()
     * @uses HotelRulesReq::setHotelRulesLookup()
     * @param string $hotelReservationLocatorCode
     * @param \Travelport\Hotel\StructType\HotelRulesLookup $hotelRulesLookup
     */
    public function __construct(?string $hotelReservationLocatorCode = null, ?\Travelport\Hotel\StructType\HotelRulesLookup $hotelRulesLookup = null)
    {
        $this
            ->setHotelReservationLocatorCode($hotelReservationLocatorCode)
            ->setHotelRulesLookup($hotelRulesLookup);
    }
    /**
     * Get HotelReservationLocatorCode value
     * @return string|null
     */
    public function getHotelReservationLocatorCode(): ?string
    {
        return $this->HotelReservationLocatorCode ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelReservationLocatorCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelReservationLocatorCode method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelReservationLocatorCodeForChoiceConstraintFromSetHotelReservationLocatorCode($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'HotelRulesLookup',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelReservationLocatorCode can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelReservationLocatorCode, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelReservationLocatorCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $hotelReservationLocatorCode
     * @return \Travelport\Hotel\StructType\HotelRulesReq
     */
    public function setHotelReservationLocatorCode(?string $hotelReservationLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelReservationLocatorCode) && !is_string($hotelReservationLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelReservationLocatorCode, true), gettype($hotelReservationLocatorCode)), __LINE__);
        }
        // validation for constraint: choice(HotelReservationLocatorCode, HotelRulesLookup)
        if ('' !== ($hotelReservationLocatorCodeChoiceErrorMessage = self::validateHotelReservationLocatorCodeForChoiceConstraintFromSetHotelReservationLocatorCode($hotelReservationLocatorCode))) {
            throw new InvalidArgumentException($hotelReservationLocatorCodeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($hotelReservationLocatorCode) && mb_strlen((string) $hotelReservationLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $hotelReservationLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($hotelReservationLocatorCode) && mb_strlen((string) $hotelReservationLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $hotelReservationLocatorCode)), __LINE__);
        }
        if (is_null($hotelReservationLocatorCode) || (is_array($hotelReservationLocatorCode) && empty($hotelReservationLocatorCode))) {
            unset($this->HotelReservationLocatorCode);
        } else {
            $this->HotelReservationLocatorCode = $hotelReservationLocatorCode;
        }
        
        return $this;
    }
    /**
     * Get HotelRulesLookup value
     * @return \Travelport\Hotel\StructType\HotelRulesLookup|null
     */
    public function getHotelRulesLookup(): ?\Travelport\Hotel\StructType\HotelRulesLookup
    {
        return $this->HotelRulesLookup ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelRulesLookup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRulesLookup method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelRulesLookupForChoiceConstraintFromSetHotelRulesLookup($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'HotelReservationLocatorCode',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelRulesLookup can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelRulesLookup, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelRulesLookup value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelRulesLookup $hotelRulesLookup
     * @return \Travelport\Hotel\StructType\HotelRulesReq
     */
    public function setHotelRulesLookup(?\Travelport\Hotel\StructType\HotelRulesLookup $hotelRulesLookup = null): self
    {
        // validation for constraint: choice(HotelReservationLocatorCode, HotelRulesLookup)
        if ('' !== ($hotelRulesLookupChoiceErrorMessage = self::validateHotelRulesLookupForChoiceConstraintFromSetHotelRulesLookup($hotelRulesLookup))) {
            throw new InvalidArgumentException($hotelRulesLookupChoiceErrorMessage, __LINE__);
        }
        if (is_null($hotelRulesLookup) || (is_array($hotelRulesLookup) && empty($hotelRulesLookup))) {
            unset($this->HotelRulesLookup);
        } else {
            $this->HotelRulesLookup = $hotelRulesLookup;
        }
        
        return $this;
    }
}
