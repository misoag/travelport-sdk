<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\Air|null
     */
    protected ?\Travelport\Util\StructType\Air $Air = null;
    /**
     * The Hotel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTransactionsAllowed|null
     */
    protected ?\Travelport\Util\StructType\TypeTransactionsAllowed $Hotel = null;
    /**
     * The Rail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTransactionsAllowed|null
     */
    protected ?\Travelport\Util\StructType\TypeTransactionsAllowed $Rail = null;
    /**
     * The Vehicle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTransactionsAllowed|null
     */
    protected ?\Travelport\Util\StructType\TypeTransactionsAllowed $Vehicle = null;
    /**
     * The Passive
     * Meta information extracted from the WSDL
     * - documentation: For true passive segments such as ground, cruise etc
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeBookingTransactionsAllowed|null
     */
    protected ?\Travelport\Util\StructType\TypeBookingTransactionsAllowed $Passive = null;
    /**
     * The BackgroundPassive
     * Meta information extracted from the WSDL
     * - documentation: For behind the scenes or background passives Only
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeBookingTransactionsAllowed|null
     */
    protected ?\Travelport\Util\StructType\TypeBookingTransactionsAllowed $BackgroundPassive = null;
    /**
     * Constructor method for TransactionType
     * @uses TransactionType::setAir()
     * @uses TransactionType::setHotel()
     * @uses TransactionType::setRail()
     * @uses TransactionType::setVehicle()
     * @uses TransactionType::setPassive()
     * @uses TransactionType::setBackgroundPassive()
     * @param \Travelport\Util\StructType\Air $air
     * @param \Travelport\Util\StructType\TypeTransactionsAllowed $hotel
     * @param \Travelport\Util\StructType\TypeTransactionsAllowed $rail
     * @param \Travelport\Util\StructType\TypeTransactionsAllowed $vehicle
     * @param \Travelport\Util\StructType\TypeBookingTransactionsAllowed $passive
     * @param \Travelport\Util\StructType\TypeBookingTransactionsAllowed $backgroundPassive
     */
    public function __construct(?\Travelport\Util\StructType\Air $air = null, ?\Travelport\Util\StructType\TypeTransactionsAllowed $hotel = null, ?\Travelport\Util\StructType\TypeTransactionsAllowed $rail = null, ?\Travelport\Util\StructType\TypeTransactionsAllowed $vehicle = null, ?\Travelport\Util\StructType\TypeBookingTransactionsAllowed $passive = null, ?\Travelport\Util\StructType\TypeBookingTransactionsAllowed $backgroundPassive = null)
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
     * @return \Travelport\Util\StructType\Air|null
     */
    public function getAir(): ?\Travelport\Util\StructType\Air
    {
        return $this->Air;
    }
    /**
     * Set Air value
     * @param \Travelport\Util\StructType\Air $air
     * @return \Travelport\Util\StructType\TransactionType
     */
    public function setAir(?\Travelport\Util\StructType\Air $air = null): self
    {
        $this->Air = $air;
        
        return $this;
    }
    /**
     * Get Hotel value
     * @return \Travelport\Util\StructType\TypeTransactionsAllowed|null
     */
    public function getHotel(): ?\Travelport\Util\StructType\TypeTransactionsAllowed
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \Travelport\Util\StructType\TypeTransactionsAllowed $hotel
     * @return \Travelport\Util\StructType\TransactionType
     */
    public function setHotel(?\Travelport\Util\StructType\TypeTransactionsAllowed $hotel = null): self
    {
        $this->Hotel = $hotel;
        
        return $this;
    }
    /**
     * Get Rail value
     * @return \Travelport\Util\StructType\TypeTransactionsAllowed|null
     */
    public function getRail(): ?\Travelport\Util\StructType\TypeTransactionsAllowed
    {
        return $this->Rail;
    }
    /**
     * Set Rail value
     * @param \Travelport\Util\StructType\TypeTransactionsAllowed $rail
     * @return \Travelport\Util\StructType\TransactionType
     */
    public function setRail(?\Travelport\Util\StructType\TypeTransactionsAllowed $rail = null): self
    {
        $this->Rail = $rail;
        
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Travelport\Util\StructType\TypeTransactionsAllowed|null
     */
    public function getVehicle(): ?\Travelport\Util\StructType\TypeTransactionsAllowed
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Travelport\Util\StructType\TypeTransactionsAllowed $vehicle
     * @return \Travelport\Util\StructType\TransactionType
     */
    public function setVehicle(?\Travelport\Util\StructType\TypeTransactionsAllowed $vehicle = null): self
    {
        $this->Vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Get Passive value
     * @return \Travelport\Util\StructType\TypeBookingTransactionsAllowed|null
     */
    public function getPassive(): ?\Travelport\Util\StructType\TypeBookingTransactionsAllowed
    {
        return $this->Passive;
    }
    /**
     * Set Passive value
     * @param \Travelport\Util\StructType\TypeBookingTransactionsAllowed $passive
     * @return \Travelport\Util\StructType\TransactionType
     */
    public function setPassive(?\Travelport\Util\StructType\TypeBookingTransactionsAllowed $passive = null): self
    {
        $this->Passive = $passive;
        
        return $this;
    }
    /**
     * Get BackgroundPassive value
     * @return \Travelport\Util\StructType\TypeBookingTransactionsAllowed|null
     */
    public function getBackgroundPassive(): ?\Travelport\Util\StructType\TypeBookingTransactionsAllowed
    {
        return $this->BackgroundPassive;
    }
    /**
     * Set BackgroundPassive value
     * @param \Travelport\Util\StructType\TypeBookingTransactionsAllowed $backgroundPassive
     * @return \Travelport\Util\StructType\TransactionType
     */
    public function setBackgroundPassive(?\Travelport\Util\StructType\TypeBookingTransactionsAllowed $backgroundPassive = null): self
    {
        $this->BackgroundPassive = $backgroundPassive;
        
        return $this;
    }
}
