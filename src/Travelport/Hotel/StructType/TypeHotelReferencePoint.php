<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public ?string $_ = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: Country code. | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    public ?string $Country = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - documentation: State or Province Code. | Defines the State code.
     * - base: xs:string
     * - maxLength: 6
     * @var string|null
     */
    public ?string $State = null;
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
        $this->State = $state;
        
        return $this;
    }
}
