<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $_ = null;
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
     * @return \Travelport\Util\StructType\AirReservationLocatorCode
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($_) && mb_strlen((string) $_) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $_)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($_) && mb_strlen((string) $_) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
}
