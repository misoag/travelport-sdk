<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected string $OwningPCC;
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
     * @return \StructType\OwnershipChange
     */
    public function setOwningPCC(string $owningPCC): self
    {
        // validation for constraint: string
        if (!is_null($owningPCC) && !is_string($owningPCC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owningPCC, true), gettype($owningPCC)), __LINE__);
        }
        $this->OwningPCC = $owningPCC;
        
        return $this;
    }
}
