<?php

declare(strict_types=1);

namespace StructType;

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
     * @var \StructType\Air|null
     */
    protected ?\StructType\Air $Air = null;
    /**
     * The Hotel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TypeTransactionsAllowed|null
     */
    protected ?\StructType\TypeTransactionsAllowed $Hotel = null;
    /**
     * The Rail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TypeTransactionsAllowed|null
     */
    protected ?\StructType\TypeTransactionsAllowed $Rail = null;
    /**
     * The Vehicle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TypeTransactionsAllowed|null
     */
    protected ?\StructType\TypeTransactionsAllowed $Vehicle = null;
    /**
     * The Passive
     * Meta information extracted from the WSDL
     * - documentation: For true passive segments such as ground, cruise etc
     * - minOccurs: 0
     * @var \StructType\TypeBookingTransactionsAllowed|null
     */
    protected ?\StructType\TypeBookingTransactionsAllowed $Passive = null;
    /**
     * The BackgroundPassive
     * Meta information extracted from the WSDL
     * - documentation: For behind the scenes or background passives Only
     * - minOccurs: 0
     * @var \StructType\TypeBookingTransactionsAllowed|null
     */
    protected ?\StructType\TypeBookingTransactionsAllowed $BackgroundPassive = null;
    /**
     * Constructor method for TransactionType
     * @uses TransactionType::setAir()
     * @uses TransactionType::setHotel()
     * @uses TransactionType::setRail()
     * @uses TransactionType::setVehicle()
     * @uses TransactionType::setPassive()
     * @uses TransactionType::setBackgroundPassive()
     * @param \StructType\Air $air
     * @param \StructType\TypeTransactionsAllowed $hotel
     * @param \StructType\TypeTransactionsAllowed $rail
     * @param \StructType\TypeTransactionsAllowed $vehicle
     * @param \StructType\TypeBookingTransactionsAllowed $passive
     * @param \StructType\TypeBookingTransactionsAllowed $backgroundPassive
     */
    public function __construct(?\StructType\Air $air = null, ?\StructType\TypeTransactionsAllowed $hotel = null, ?\StructType\TypeTransactionsAllowed $rail = null, ?\StructType\TypeTransactionsAllowed $vehicle = null, ?\StructType\TypeBookingTransactionsAllowed $passive = null, ?\StructType\TypeBookingTransactionsAllowed $backgroundPassive = null)
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
     * @return \StructType\Air|null
     */
    public function getAir(): ?\StructType\Air
    {
        return $this->Air;
    }
    /**
     * Set Air value
     * @param \StructType\Air $air
     * @return \StructType\TransactionType
     */
    public function setAir(?\StructType\Air $air = null): self
    {
        $this->Air = $air;
        
        return $this;
    }
    /**
     * Get Hotel value
     * @return \StructType\TypeTransactionsAllowed|null
     */
    public function getHotel(): ?\StructType\TypeTransactionsAllowed
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \StructType\TypeTransactionsAllowed $hotel
     * @return \StructType\TransactionType
     */
    public function setHotel(?\StructType\TypeTransactionsAllowed $hotel = null): self
    {
        $this->Hotel = $hotel;
        
        return $this;
    }
    /**
     * Get Rail value
     * @return \StructType\TypeTransactionsAllowed|null
     */
    public function getRail(): ?\StructType\TypeTransactionsAllowed
    {
        return $this->Rail;
    }
    /**
     * Set Rail value
     * @param \StructType\TypeTransactionsAllowed $rail
     * @return \StructType\TransactionType
     */
    public function setRail(?\StructType\TypeTransactionsAllowed $rail = null): self
    {
        $this->Rail = $rail;
        
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \StructType\TypeTransactionsAllowed|null
     */
    public function getVehicle(): ?\StructType\TypeTransactionsAllowed
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \StructType\TypeTransactionsAllowed $vehicle
     * @return \StructType\TransactionType
     */
    public function setVehicle(?\StructType\TypeTransactionsAllowed $vehicle = null): self
    {
        $this->Vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Get Passive value
     * @return \StructType\TypeBookingTransactionsAllowed|null
     */
    public function getPassive(): ?\StructType\TypeBookingTransactionsAllowed
    {
        return $this->Passive;
    }
    /**
     * Set Passive value
     * @param \StructType\TypeBookingTransactionsAllowed $passive
     * @return \StructType\TransactionType
     */
    public function setPassive(?\StructType\TypeBookingTransactionsAllowed $passive = null): self
    {
        $this->Passive = $passive;
        
        return $this;
    }
    /**
     * Get BackgroundPassive value
     * @return \StructType\TypeBookingTransactionsAllowed|null
     */
    public function getBackgroundPassive(): ?\StructType\TypeBookingTransactionsAllowed
    {
        return $this->BackgroundPassive;
    }
    /**
     * Set BackgroundPassive value
     * @param \StructType\TypeBookingTransactionsAllowed $backgroundPassive
     * @return \StructType\TransactionType
     */
    public function setBackgroundPassive(?\StructType\TypeBookingTransactionsAllowed $backgroundPassive = null): self
    {
        $this->BackgroundPassive = $backgroundPassive;
        
        return $this;
    }
}
