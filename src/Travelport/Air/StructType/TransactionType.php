<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\Air|null
     */
    public ?\Travelport\Air\StructType\Air $Air = null;
    /**
     * The Hotel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeTransactionsAllowed|null
     */
    public ?\Travelport\Air\StructType\TypeTransactionsAllowed $Hotel = null;
    /**
     * The Rail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeTransactionsAllowed|null
     */
    public ?\Travelport\Air\StructType\TypeTransactionsAllowed $Rail = null;
    /**
     * The Vehicle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeTransactionsAllowed|null
     */
    public ?\Travelport\Air\StructType\TypeTransactionsAllowed $Vehicle = null;
    /**
     * The Passive
     * Meta information extracted from the WSDL
     * - documentation: For true passive segments such as ground, cruise etc
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeBookingTransactionsAllowed|null
     */
    public ?\Travelport\Air\StructType\TypeBookingTransactionsAllowed $Passive = null;
    /**
     * The BackgroundPassive
     * Meta information extracted from the WSDL
     * - documentation: For behind the scenes or background passives Only
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeBookingTransactionsAllowed|null
     */
    public ?\Travelport\Air\StructType\TypeBookingTransactionsAllowed $BackgroundPassive = null;
    /**
     * Constructor method for TransactionType
     * @uses TransactionType::setAir()
     * @uses TransactionType::setHotel()
     * @uses TransactionType::setRail()
     * @uses TransactionType::setVehicle()
     * @uses TransactionType::setPassive()
     * @uses TransactionType::setBackgroundPassive()
     * @param \Travelport\Air\StructType\Air $air
     * @param \Travelport\Air\StructType\TypeTransactionsAllowed $hotel
     * @param \Travelport\Air\StructType\TypeTransactionsAllowed $rail
     * @param \Travelport\Air\StructType\TypeTransactionsAllowed $vehicle
     * @param \Travelport\Air\StructType\TypeBookingTransactionsAllowed $passive
     * @param \Travelport\Air\StructType\TypeBookingTransactionsAllowed $backgroundPassive
     */
    public function __construct(?\Travelport\Air\StructType\Air $air = null, ?\Travelport\Air\StructType\TypeTransactionsAllowed $hotel = null, ?\Travelport\Air\StructType\TypeTransactionsAllowed $rail = null, ?\Travelport\Air\StructType\TypeTransactionsAllowed $vehicle = null, ?\Travelport\Air\StructType\TypeBookingTransactionsAllowed $passive = null, ?\Travelport\Air\StructType\TypeBookingTransactionsAllowed $backgroundPassive = null)
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
     * @return \Travelport\Air\StructType\Air|null
     */
    public function getAir(): ?\Travelport\Air\StructType\Air
    {
        return $this->Air;
    }
    /**
     * Set Air value
     * @param \Travelport\Air\StructType\Air $air
     * @return \Travelport\Air\StructType\TransactionType
     */
    public function setAir(?\Travelport\Air\StructType\Air $air = null): self
    {
        $this->Air = $air;
        
        return $this;
    }
    /**
     * Get Hotel value
     * @return \Travelport\Air\StructType\TypeTransactionsAllowed|null
     */
    public function getHotel(): ?\Travelport\Air\StructType\TypeTransactionsAllowed
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \Travelport\Air\StructType\TypeTransactionsAllowed $hotel
     * @return \Travelport\Air\StructType\TransactionType
     */
    public function setHotel(?\Travelport\Air\StructType\TypeTransactionsAllowed $hotel = null): self
    {
        $this->Hotel = $hotel;
        
        return $this;
    }
    /**
     * Get Rail value
     * @return \Travelport\Air\StructType\TypeTransactionsAllowed|null
     */
    public function getRail(): ?\Travelport\Air\StructType\TypeTransactionsAllowed
    {
        return $this->Rail;
    }
    /**
     * Set Rail value
     * @param \Travelport\Air\StructType\TypeTransactionsAllowed $rail
     * @return \Travelport\Air\StructType\TransactionType
     */
    public function setRail(?\Travelport\Air\StructType\TypeTransactionsAllowed $rail = null): self
    {
        $this->Rail = $rail;
        
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Travelport\Air\StructType\TypeTransactionsAllowed|null
     */
    public function getVehicle(): ?\Travelport\Air\StructType\TypeTransactionsAllowed
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Travelport\Air\StructType\TypeTransactionsAllowed $vehicle
     * @return \Travelport\Air\StructType\TransactionType
     */
    public function setVehicle(?\Travelport\Air\StructType\TypeTransactionsAllowed $vehicle = null): self
    {
        $this->Vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Get Passive value
     * @return \Travelport\Air\StructType\TypeBookingTransactionsAllowed|null
     */
    public function getPassive(): ?\Travelport\Air\StructType\TypeBookingTransactionsAllowed
    {
        return $this->Passive;
    }
    /**
     * Set Passive value
     * @param \Travelport\Air\StructType\TypeBookingTransactionsAllowed $passive
     * @return \Travelport\Air\StructType\TransactionType
     */
    public function setPassive(?\Travelport\Air\StructType\TypeBookingTransactionsAllowed $passive = null): self
    {
        $this->Passive = $passive;
        
        return $this;
    }
    /**
     * Get BackgroundPassive value
     * @return \Travelport\Air\StructType\TypeBookingTransactionsAllowed|null
     */
    public function getBackgroundPassive(): ?\Travelport\Air\StructType\TypeBookingTransactionsAllowed
    {
        return $this->BackgroundPassive;
    }
    /**
     * Set BackgroundPassive value
     * @param \Travelport\Air\StructType\TypeBookingTransactionsAllowed $backgroundPassive
     * @return \Travelport\Air\StructType\TransactionType
     */
    public function setBackgroundPassive(?\Travelport\Air\StructType\TypeBookingTransactionsAllowed $backgroundPassive = null): self
    {
        $this->BackgroundPassive = $backgroundPassive;
        
        return $this;
    }
}
