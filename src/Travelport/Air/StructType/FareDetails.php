<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Key;
    /**
     * The PassengerDetailRef
     * Meta information extracted from the WSDL
     * - documentation: PassengerRef key | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $PassengerDetailRef;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code for this fare | The fare basis code to be used for pricing.
     * - base: xs:string
     * - maxLength: 20
     * - use: required
     * @var string
     */
    public string $FareBasis;
    /**
     * The FareTicketDesignator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareTicketDesignator
     * @var \Travelport\Air\StructType\FareTicketDesignator|null
     */
    public ?\Travelport\Air\StructType\FareTicketDesignator $FareTicketDesignator = null;
    /**
     * Constructor method for FareDetails
     * @uses FareDetails::setKey()
     * @uses FareDetails::setPassengerDetailRef()
     * @uses FareDetails::setFareBasis()
     * @uses FareDetails::setFareTicketDesignator()
     * @param string $key
     * @param string $passengerDetailRef
     * @param string $fareBasis
     * @param \Travelport\Air\StructType\FareTicketDesignator $fareTicketDesignator
     */
    public function __construct(string $key, string $passengerDetailRef, string $fareBasis, ?\Travelport\Air\StructType\FareTicketDesignator $fareTicketDesignator = null)
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
     * @return \Travelport\Air\StructType\FareDetails
     */
    public function setKey(string $key): self
    {
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
     * @return \Travelport\Air\StructType\FareDetails
     */
    public function setPassengerDetailRef(string $passengerDetailRef): self
    {
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
     * @return \Travelport\Air\StructType\FareDetails
     */
    public function setFareBasis(string $fareBasis): self
    {
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Get FareTicketDesignator value
     * @return \Travelport\Air\StructType\FareTicketDesignator|null
     */
    public function getFareTicketDesignator(): ?\Travelport\Air\StructType\FareTicketDesignator
    {
        return $this->FareTicketDesignator;
    }
    /**
     * Set FareTicketDesignator value
     * @param \Travelport\Air\StructType\FareTicketDesignator $fareTicketDesignator
     * @return \Travelport\Air\StructType\FareDetails
     */
    public function setFareTicketDesignator(?\Travelport\Air\StructType\FareTicketDesignator $fareTicketDesignator = null): self
    {
        $this->FareTicketDesignator = $fareTicketDesignator;
        
        return $this;
    }
}
