<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeHotelReferencePoint StructType
 * Meta information extracted from the WSDL
 * - base: xs:string
 * - maxLength: 30
 * @subpackage Structs
 */
class TypeHotelReferencePoint extends AbstractStructBase
{
    /**
     * The _
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: Country code. | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - documentation: State or Province Code. | Defines the State code.
     * - base: xs:string
     * - maxLength: 6
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * Constructor method for typeHotelReferencePoint
     * @uses TypeHotelReferencePoint::set_()
     * @uses TypeHotelReferencePoint::setCountry()
     * @uses TypeHotelReferencePoint::setState()
     * @param string $_
     * @param string $country
     * @param string $state
     */
    public function __construct(?string $_ = null, ?string $country = null, ?string $state = null)
    {
        $this
            ->set_($_)
            ->setCountry($country)
            ->setState($state);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\Hotel\StructType\TypeHotelReferencePoint
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($_) && mb_strlen((string) $_) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Travelport\Hotel\StructType\TypeHotelReferencePoint
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($country) && mb_strlen((string) $country) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $country)), __LINE__);
        }
        $this->Country = $country;
        
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param string $state
     * @return \Travelport\Hotel\StructType\TypeHotelReferencePoint
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($state) && mb_strlen((string) $state) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $state)), __LINE__);
        }
        $this->State = $state;
        
        return $this;
    }
}
