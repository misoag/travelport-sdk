<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $_ = null;
    /**
     * The OperatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The actual carrier that is operating the flight. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $OperatingCarrier = null;
    /**
     * The OperatingFlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The actual flight number of the carrier that is operating the flight. | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $OperatingFlightNumber = null;
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
     * @return \Travelport\Util\StructType\CodeshareInfo
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\CodeshareInfo
     */
    public function setOperatingCarrier(?string $operatingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($operatingCarrier) && !is_string($operatingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatingCarrier, true), gettype($operatingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($operatingCarrier) && mb_strlen((string) $operatingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $operatingCarrier)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\CodeshareInfo
     */
    public function setOperatingFlightNumber(?string $operatingFlightNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($operatingFlightNumber) && !is_string($operatingFlightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatingFlightNumber, true), gettype($operatingFlightNumber)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($operatingFlightNumber) && mb_strlen((string) $operatingFlightNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $operatingFlightNumber)), __LINE__);
        }
        $this->OperatingFlightNumber = $operatingFlightNumber;
        
        return $this;
    }
}
