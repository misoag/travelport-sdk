<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodeshareInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes the codeshare disclosure (simple text string) or the specific operating flight information (as attributes).
 * @subpackage Structs
 */
class CodeshareInfo extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The OperatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The actual carrier that is operating the flight. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $OperatingCarrier = null;
    /**
     * The OperatingFlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The actual flight number of the carrier that is operating the flight. | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $OperatingFlightNumber = null;
    /**
     * Constructor method for CodeshareInfo
     * @uses CodeshareInfo::set_()
     * @uses CodeshareInfo::setOperatingCarrier()
     * @uses CodeshareInfo::setOperatingFlightNumber()
     * @param string $_
     * @param string $operatingCarrier
     * @param string $operatingFlightNumber
     */
    public function __construct(?string $_ = null, ?string $operatingCarrier = null, ?string $operatingFlightNumber = null)
    {
        $this
            ->set_($_)
            ->setOperatingCarrier($operatingCarrier)
            ->setOperatingFlightNumber($operatingFlightNumber);
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
     * @return \Travelport\UniversalRecord\StructType\CodeshareInfo
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get OperatingCarrier value
     * @return string|null
     */
    public function getOperatingCarrier(): ?string
    {
        return $this->OperatingCarrier;
    }
    /**
     * Set OperatingCarrier value
     * @param string $operatingCarrier
     * @return \Travelport\UniversalRecord\StructType\CodeshareInfo
     */
    public function setOperatingCarrier(?string $operatingCarrier = null): self
    {
        $this->OperatingCarrier = $operatingCarrier;
        
        return $this;
    }
    /**
     * Get OperatingFlightNumber value
     * @return string|null
     */
    public function getOperatingFlightNumber(): ?string
    {
        return $this->OperatingFlightNumber;
    }
    /**
     * Set OperatingFlightNumber value
     * @param string $operatingFlightNumber
     * @return \Travelport\UniversalRecord\StructType\CodeshareInfo
     */
    public function setOperatingFlightNumber(?string $operatingFlightNumber = null): self
    {
        $this->OperatingFlightNumber = $operatingFlightNumber;
        
        return $this;
    }
}
