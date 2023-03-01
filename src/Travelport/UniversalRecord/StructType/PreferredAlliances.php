<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredAlliances StructType
 * @subpackage Structs
 */
class PreferredAlliances extends AbstractStructBase
{
    /**
     * The Alliance
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: Alliance
     * @var \Travelport\UniversalRecord\StructType\Alliance[]
     */
    public ?array $Alliance = null;
    /**
     * Constructor method for PreferredAlliances
     * @uses PreferredAlliances::setAlliance()
     * @param \Travelport\UniversalRecord\StructType\Alliance[] $alliance
     */
    public function __construct(?array $alliance = null)
    {
        $this
            ->setAlliance($alliance);
    }
    /**
     * Get Alliance value
     * @return \Travelport\UniversalRecord\StructType\Alliance[]
     */
    public function getAlliance(): ?array
    {
        return $this->Alliance;
    }
    /**
     * Set Alliance value
     * @param \Travelport\UniversalRecord\StructType\Alliance[] $alliance
     * @return \Travelport\UniversalRecord\StructType\PreferredAlliances
     */
    public function setAlliance(?array $alliance = null): self
    {
        $this->Alliance = $alliance;
        
        return $this;
    }
    /**
     * Add item to Alliance value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Alliance $item
     * @return \Travelport\UniversalRecord\StructType\PreferredAlliances
     */
    public function addToAlliance(\Travelport\UniversalRecord\StructType\Alliance $item): self
    {
        $this->Alliance[] = $item;
        
        return $this;
    }
}
