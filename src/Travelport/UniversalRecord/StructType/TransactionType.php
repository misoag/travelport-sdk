<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Configuration for products by type. Inheritable.
 * @subpackage Structs
 */
class TransactionType extends AbstractStructBase
{
    /**
     * The Air
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\Air|null
     */
    public ?\Travelport\UniversalRecord\StructType\Air $Air = null;
    /**
     * The Hotel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $Hotel = null;
    /**
     * The Rail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $Rail = null;
    /**
     * The Vehicle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $Vehicle = null;
    /**
     * The Passive
     * Meta information extracted from the WSDL
     * - documentation: For true passive segments such as ground, cruise etc
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed $Passive = null;
    /**
     * The BackgroundPassive
     * Meta information extracted from the WSDL
     * - documentation: For behind the scenes or background passives Only
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed $BackgroundPassive = null;
    /**
     * Constructor method for TransactionType
     * @uses TransactionType::setAir()
     * @uses TransactionType::setHotel()
     * @uses TransactionType::setRail()
     * @uses TransactionType::setVehicle()
     * @uses TransactionType::setPassive()
     * @uses TransactionType::setBackgroundPassive()
     * @param \Travelport\UniversalRecord\StructType\Air $air
     * @param \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $hotel
     * @param \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $rail
     * @param \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $vehicle
     * @param \Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed $passive
     * @param \Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed $backgroundPassive
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Air $air = null, ?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $hotel = null, ?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $rail = null, ?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $vehicle = null, ?\Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed $passive = null, ?\Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed $backgroundPassive = null)
    {
        $this
            ->setAir($air)
            ->setHotel($hotel)
            ->setRail($rail)
            ->setVehicle($vehicle)
            ->setPassive($passive)
            ->setBackgroundPassive($backgroundPassive);
    }
    /**
     * Get Air value
     * @return \Travelport\UniversalRecord\StructType\Air|null
     */
    public function getAir(): ?\Travelport\UniversalRecord\StructType\Air
    {
        return $this->Air;
    }
    /**
     * Set Air value
     * @param \Travelport\UniversalRecord\StructType\Air $air
     * @return \Travelport\UniversalRecord\StructType\TransactionType
     */
    public function setAir(?\Travelport\UniversalRecord\StructType\Air $air = null): self
    {
        $this->Air = $air;
        
        return $this;
    }
    /**
     * Get Hotel value
     * @return \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed|null
     */
    public function getHotel(): ?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $hotel
     * @return \Travelport\UniversalRecord\StructType\TransactionType
     */
    public function setHotel(?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $hotel = null): self
    {
        $this->Hotel = $hotel;
        
        return $this;
    }
    /**
     * Get Rail value
     * @return \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed|null
     */
    public function getRail(): ?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed
    {
        return $this->Rail;
    }
    /**
     * Set Rail value
     * @param \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $rail
     * @return \Travelport\UniversalRecord\StructType\TransactionType
     */
    public function setRail(?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $rail = null): self
    {
        $this->Rail = $rail;
        
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed|null
     */
    public function getVehicle(): ?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $vehicle
     * @return \Travelport\UniversalRecord\StructType\TransactionType
     */
    public function setVehicle(?\Travelport\UniversalRecord\StructType\TypeTransactionsAllowed $vehicle = null): self
    {
        $this->Vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Get Passive value
     * @return \Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed|null
     */
    public function getPassive(): ?\Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed
    {
        return $this->Passive;
    }
    /**
     * Set Passive value
     * @param \Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed $passive
     * @return \Travelport\UniversalRecord\StructType\TransactionType
     */
    public function setPassive(?\Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed $passive = null): self
    {
        $this->Passive = $passive;
        
        return $this;
    }
    /**
     * Get BackgroundPassive value
     * @return \Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed|null
     */
    public function getBackgroundPassive(): ?\Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed
    {
        return $this->BackgroundPassive;
    }
    /**
     * Set BackgroundPassive value
     * @param \Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed $backgroundPassive
     * @return \Travelport\UniversalRecord\StructType\TransactionType
     */
    public function setBackgroundPassive(?\Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed $backgroundPassive = null): self
    {
        $this->BackgroundPassive = $backgroundPassive;
        
        return $this;
    }
}
