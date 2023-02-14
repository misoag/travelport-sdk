<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about this fare component
 * @subpackage Structs
 */
class FareDetails extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Fare key | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The PassengerDetailRef
     * Meta information extracted from the WSDL
     * - documentation: PassengerRef key | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $PassengerDetailRef;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code for this fare | The fare basis code to be used for pricing.
     * - base: xs:string
     * - maxLength: 20
     * - use: required
     * @var string
     */
    protected string $FareBasis;
    /**
     * The FareTicketDesignator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareTicketDesignator
     * @var \Travelport\Util\StructType\FareTicketDesignator|null
     */
    protected ?\Travelport\Util\StructType\FareTicketDesignator $FareTicketDesignator = null;
    /**
     * Constructor method for FareDetails
     * @uses FareDetails::setKey()
     * @uses FareDetails::setPassengerDetailRef()
     * @uses FareDetails::setFareBasis()
     * @uses FareDetails::setFareTicketDesignator()
     * @param string $key
     * @param string $passengerDetailRef
     * @param string $fareBasis
     * @param \Travelport\Util\StructType\FareTicketDesignator $fareTicketDesignator
     */
    public function __construct(string $key, string $passengerDetailRef, string $fareBasis, ?\Travelport\Util\StructType\FareTicketDesignator $fareTicketDesignator = null)
    {
        $this
            ->setKey($key)
            ->setPassengerDetailRef($passengerDetailRef)
            ->setFareBasis($fareBasis)
            ->setFareTicketDesignator($fareTicketDesignator);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Util\StructType\FareDetails
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get PassengerDetailRef value
     * @return string
     */
    public function getPassengerDetailRef(): string
    {
        return $this->PassengerDetailRef;
    }
    /**
     * Set PassengerDetailRef value
     * @param string $passengerDetailRef
     * @return \Travelport\Util\StructType\FareDetails
     */
    public function setPassengerDetailRef(string $passengerDetailRef): self
    {
        // validation for constraint: string
        if (!is_null($passengerDetailRef) && !is_string($passengerDetailRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerDetailRef, true), gettype($passengerDetailRef)), __LINE__);
        }
        $this->PassengerDetailRef = $passengerDetailRef;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return string
     */
    public function getFareBasis(): string
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param string $fareBasis
     * @return \Travelport\Util\StructType\FareDetails
     */
    public function setFareBasis(string $fareBasis): self
    {
        // validation for constraint: string
        if (!is_null($fareBasis) && !is_string($fareBasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasis, true), gettype($fareBasis)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($fareBasis) && mb_strlen((string) $fareBasis) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $fareBasis)), __LINE__);
        }
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Get FareTicketDesignator value
     * @return \Travelport\Util\StructType\FareTicketDesignator|null
     */
    public function getFareTicketDesignator(): ?\Travelport\Util\StructType\FareTicketDesignator
    {
        return $this->FareTicketDesignator;
    }
    /**
     * Set FareTicketDesignator value
     * @param \Travelport\Util\StructType\FareTicketDesignator $fareTicketDesignator
     * @return \Travelport\Util\StructType\FareDetails
     */
    public function setFareTicketDesignator(?\Travelport\Util\StructType\FareTicketDesignator $fareTicketDesignator = null): self
    {
        $this->FareTicketDesignator = $fareTicketDesignator;
        
        return $this;
    }
}
