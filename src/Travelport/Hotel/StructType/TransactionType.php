<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Hotel\StructType\Air|null
     */
    protected ?\Travelport\Hotel\StructType\Air $Air = null;
    /**
     * The Hotel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeTransactionsAllowed|null
     */
    protected ?\Travelport\Hotel\StructType\TypeTransactionsAllowed $Hotel = null;
    /**
     * The Rail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeTransactionsAllowed|null
     */
    protected ?\Travelport\Hotel\StructType\TypeTransactionsAllowed $Rail = null;
    /**
     * The Vehicle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeTransactionsAllowed|null
     */
    protected ?\Travelport\Hotel\StructType\TypeTransactionsAllowed $Vehicle = null;
    /**
     * The Passive
     * Meta information extracted from the WSDL
     * - documentation: For true passive segments such as ground, cruise etc
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeBookingTransactionsAllowed|null
     */
    protected ?\Travelport\Hotel\StructType\TypeBookingTransactionsAllowed $Passive = null;
    /**
     * The BackgroundPassive
     * Meta information extracted from the WSDL
     * - documentation: For behind the scenes or background passives Only
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeBookingTransactionsAllowed|null
     */
    protected ?\Travelport\Hotel\StructType\TypeBookingTransactionsAllowed $BackgroundPassive = null;
    /**
     * Constructor method for TransactionType
     * @uses TransactionType::setAir()
     * @uses TransactionType::setHotel()
     * @uses TransactionType::setRail()
     * @uses TransactionType::setVehicle()
     * @uses TransactionType::setPassive()
     * @uses TransactionType::setBackgroundPassive()
     * @param \Travelport\Hotel\StructType\Air $air
     * @param \Travelport\Hotel\StructType\TypeTransactionsAllowed $hotel
     * @param \Travelport\Hotel\StructType\TypeTransactionsAllowed $rail
     * @param \Travelport\Hotel\StructType\TypeTransactionsAllowed $vehicle
     * @param \Travelport\Hotel\StructType\TypeBookingTransactionsAllowed $passive
     * @param \Travelport\Hotel\StructType\TypeBookingTransactionsAllowed $backgroundPassive
     */
    public function __construct(?\Travelport\Hotel\StructType\Air $air = null, ?\Travelport\Hotel\StructType\TypeTransactionsAllowed $hotel = null, ?\Travelport\Hotel\StructType\TypeTransactionsAllowed $rail = null, ?\Travelport\Hotel\StructType\TypeTransactionsAllowed $vehicle = null, ?\Travelport\Hotel\StructType\TypeBookingTransactionsAllowed $passive = null, ?\Travelport\Hotel\StructType\TypeBookingTransactionsAllowed $backgroundPassive = null)
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
     * @return \Travelport\Hotel\StructType\Air|null
     */
    public function getAir(): ?\Travelport\Hotel\StructType\Air
    {
        return $this->Air;
    }
    /**
     * Set Air value
     * @param \Travelport\Hotel\StructType\Air $air
     * @return \Travelport\Hotel\StructType\TransactionType
     */
    public function setAir(?\Travelport\Hotel\StructType\Air $air = null): self
    {
        $this->Air = $air;
        
        return $this;
    }
    /**
     * Get Hotel value
     * @return \Travelport\Hotel\StructType\TypeTransactionsAllowed|null
     */
    public function getHotel(): ?\Travelport\Hotel\StructType\TypeTransactionsAllowed
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \Travelport\Hotel\StructType\TypeTransactionsAllowed $hotel
     * @return \Travelport\Hotel\StructType\TransactionType
     */
    public function setHotel(?\Travelport\Hotel\StructType\TypeTransactionsAllowed $hotel = null): self
    {
        $this->Hotel = $hotel;
        
        return $this;
    }
    /**
     * Get Rail value
     * @return \Travelport\Hotel\StructType\TypeTransactionsAllowed|null
     */
    public function getRail(): ?\Travelport\Hotel\StructType\TypeTransactionsAllowed
    {
        return $this->Rail;
    }
    /**
     * Set Rail value
     * @param \Travelport\Hotel\StructType\TypeTransactionsAllowed $rail
     * @return \Travelport\Hotel\StructType\TransactionType
     */
    public function setRail(?\Travelport\Hotel\StructType\TypeTransactionsAllowed $rail = null): self
    {
        $this->Rail = $rail;
        
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Travelport\Hotel\StructType\TypeTransactionsAllowed|null
     */
    public function getVehicle(): ?\Travelport\Hotel\StructType\TypeTransactionsAllowed
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Travelport\Hotel\StructType\TypeTransactionsAllowed $vehicle
     * @return \Travelport\Hotel\StructType\TransactionType
     */
    public function setVehicle(?\Travelport\Hotel\StructType\TypeTransactionsAllowed $vehicle = null): self
    {
        $this->Vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Get Passive value
     * @return \Travelport\Hotel\StructType\TypeBookingTransactionsAllowed|null
     */
    public function getPassive(): ?\Travelport\Hotel\StructType\TypeBookingTransactionsAllowed
    {
        return $this->Passive;
    }
    /**
     * Set Passive value
     * @param \Travelport\Hotel\StructType\TypeBookingTransactionsAllowed $passive
     * @return \Travelport\Hotel\StructType\TransactionType
     */
    public function setPassive(?\Travelport\Hotel\StructType\TypeBookingTransactionsAllowed $passive = null): self
    {
        $this->Passive = $passive;
        
        return $this;
    }
    /**
     * Get BackgroundPassive value
     * @return \Travelport\Hotel\StructType\TypeBookingTransactionsAllowed|null
     */
    public function getBackgroundPassive(): ?\Travelport\Hotel\StructType\TypeBookingTransactionsAllowed
    {
        return $this->BackgroundPassive;
    }
    /**
     * Set BackgroundPassive value
     * @param \Travelport\Hotel\StructType\TypeBookingTransactionsAllowed $backgroundPassive
     * @return \Travelport\Hotel\StructType\TransactionType
     */
    public function setBackgroundPassive(?\Travelport\Hotel\StructType\TypeBookingTransactionsAllowed $backgroundPassive = null): self
    {
        $this->BackgroundPassive = $backgroundPassive;
        
        return $this;
    }
}
