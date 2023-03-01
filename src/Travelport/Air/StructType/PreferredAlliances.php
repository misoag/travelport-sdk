<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\Alliance[]
     */
    public ?array $Alliance = null;
    /**
     * Constructor method for PreferredAlliances
     * @uses PreferredAlliances::setAlliance()
     * @param \Travelport\Air\StructType\Alliance[] $alliance
     */
    public function __construct(?array $alliance = null)
    {
        $this
            ->setAlliance($alliance);
    }
    /**
     * Get Alliance value
     * @return \Travelport\Air\StructType\Alliance[]
     */
    public function getAlliance(): ?array
    {
        return $this->Alliance;
    }
    /**
     * Set Alliance value
     * @param \Travelport\Air\StructType\Alliance[] $alliance
     * @return \Travelport\Air\StructType\PreferredAlliances
     */
    public function setAlliance(?array $alliance = null): self
    {
        $this->Alliance = $alliance;
        
        return $this;
    }
    /**
     * Add item to Alliance value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Alliance $item
     * @return \Travelport\Air\StructType\PreferredAlliances
     */
    public function addToAlliance(\Travelport\Air\StructType\Alliance $item): self
    {
        $this->Alliance[] = $item;
        
        return $this;
    }
}
