<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveDelete StructType
 * @subpackage Structs
 */
class PassiveDelete extends AbstractStructBase
{
    /**
     * The ReservationLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    protected string $ReservationLocatorCode;
    /**
     * The Element
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Element;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * Constructor method for PassiveDelete
     * @uses PassiveDelete::setReservationLocatorCode()
     * @uses PassiveDelete::setElement()
     * @uses PassiveDelete::setKey()
     * @param string $reservationLocatorCode
     * @param string $element
     * @param string $key
     */
    public function __construct(string $reservationLocatorCode, string $element, ?string $key = null)
    {
        $this
            ->setReservationLocatorCode($reservationLocatorCode)
            ->setElement($element)
            ->setKey($key);
    }
    /**
     * Get ReservationLocatorCode value
     * @return string
     */
    public function getReservationLocatorCode(): string
    {
        return $this->ReservationLocatorCode;
    }
    /**
     * Set ReservationLocatorCode value
     * @param string $reservationLocatorCode
     * @return \Travelport\UniversalRecord\StructType\PassiveDelete
     */
    public function setReservationLocatorCode(string $reservationLocatorCode): self
    {
        // validation for constraint: string
        if (!is_null($reservationLocatorCode) && !is_string($reservationLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationLocatorCode, true), gettype($reservationLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($reservationLocatorCode) && mb_strlen((string) $reservationLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $reservationLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($reservationLocatorCode) && mb_strlen((string) $reservationLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $reservationLocatorCode)), __LINE__);
        }
        $this->ReservationLocatorCode = $reservationLocatorCode;
        
        return $this;
    }
    /**
     * Get Element value
     * @return string
     */
    public function getElement(): string
    {
        return $this->Element;
    }
    /**
     * Set Element value
     * @uses \Travelport\UniversalRecord\EnumType\TypeElement::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElement::getValidValues()
     * @throws InvalidArgumentException
     * @param string $element
     * @return \Travelport\UniversalRecord\StructType\PassiveDelete
     */
    public function setElement(string $element): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElement::valueIsValid($element)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElement', is_array($element) ? implode(', ', $element) : var_export($element, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElement::getValidValues())), __LINE__);
        }
        $this->Element = $element;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\PassiveDelete
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
}
