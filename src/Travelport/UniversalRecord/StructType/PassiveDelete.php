<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $ReservationLocatorCode;
    /**
     * The Element
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Element;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
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
     * @param string $element
     * @return \Travelport\UniversalRecord\StructType\PassiveDelete
     */
    public function setElement(string $element): self
    {
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
        $this->Key = $key;
        
        return $this;
    }
}
