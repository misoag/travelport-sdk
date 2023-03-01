<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestrictionPassengerTypes StructType
 * @subpackage Structs
 */
class RestrictionPassengerTypes extends AbstractStructBase
{
    /**
     * The MaxNbrTravelers
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $MaxNbrTravelers = null;
    /**
     * The TotalNbrPTC
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TotalNbrPTC = null;
    /**
     * Constructor method for RestrictionPassengerTypes
     * @uses RestrictionPassengerTypes::setMaxNbrTravelers()
     * @uses RestrictionPassengerTypes::setTotalNbrPTC()
     * @param string $maxNbrTravelers
     * @param string $totalNbrPTC
     */
    public function __construct(?string $maxNbrTravelers = null, ?string $totalNbrPTC = null)
    {
        $this
            ->setMaxNbrTravelers($maxNbrTravelers)
            ->setTotalNbrPTC($totalNbrPTC);
    }
    /**
     * Get MaxNbrTravelers value
     * @return string|null
     */
    public function getMaxNbrTravelers(): ?string
    {
        return $this->MaxNbrTravelers;
    }
    /**
     * Set MaxNbrTravelers value
     * @param string $maxNbrTravelers
     * @return \Travelport\Air\StructType\RestrictionPassengerTypes
     */
    public function setMaxNbrTravelers(?string $maxNbrTravelers = null): self
    {
        $this->MaxNbrTravelers = $maxNbrTravelers;
        
        return $this;
    }
    /**
     * Get TotalNbrPTC value
     * @return string|null
     */
    public function getTotalNbrPTC(): ?string
    {
        return $this->TotalNbrPTC;
    }
    /**
     * Set TotalNbrPTC value
     * @param string $totalNbrPTC
     * @return \Travelport\Air\StructType\RestrictionPassengerTypes
     */
    public function setTotalNbrPTC(?string $totalNbrPTC = null): self
    {
        $this->TotalNbrPTC = $totalNbrPTC;
        
        return $this;
    }
}
