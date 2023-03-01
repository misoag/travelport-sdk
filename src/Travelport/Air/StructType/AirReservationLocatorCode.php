<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirReservationLocatorCode StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the AirReservation LocatorCode within the Universal Record | A Locator Code that uniquely identifies a Record or searches for one.
 * - base: xs:string
 * - maxLength: 8
 * - minLength: 5
 * @subpackage Structs
 */
class AirReservationLocatorCode extends AbstractStructBase
{
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * Constructor method for AirReservationLocatorCode
     * @uses AirReservationLocatorCode::set_()
     * @param string $_
     */
    public function __construct(?string $_ = null)
    {
        $this
            ->set_($_);
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
     * @return \Travelport\Air\StructType\AirReservationLocatorCode
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
}
