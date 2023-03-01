<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnershipChange StructType
 * Meta information extracted from the WSDL
 * - documentation: Element to change the ownership of the PNR in the UR. PROVIDER SUPPORTED: Worldspan.
 * @subpackage Structs
 */
class OwnershipChange extends AbstractStructBase
{
    /**
     * The OwningPCC
     * Meta information extracted from the WSDL
     * - documentation: New owning PCC of the PNR. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $OwningPCC;
    /**
     * Constructor method for OwnershipChange
     * @uses OwnershipChange::setOwningPCC()
     * @param string $owningPCC
     */
    public function __construct(string $owningPCC)
    {
        $this
            ->setOwningPCC($owningPCC);
    }
    /**
     * Get OwningPCC value
     * @return string
     */
    public function getOwningPCC(): string
    {
        return $this->OwningPCC;
    }
    /**
     * Set OwningPCC value
     * @param string $owningPCC
     * @return \Travelport\UniversalRecord\StructType\OwnershipChange
     */
    public function setOwningPCC(string $owningPCC): self
    {
        $this->OwningPCC = $owningPCC;
        
        return $this;
    }
}
