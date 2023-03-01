<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HostTokenList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of Host Tokens
 * @subpackage Structs
 */
class HostTokenList extends AbstractStructBase
{
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: common:HostToken | HostToken
     * @var \Travelport\Air\StructType\HostToken[]
     */
    public array $HostToken;
    /**
     * Constructor method for HostTokenList
     * @uses HostTokenList::setHostToken()
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     */
    public function __construct(array $hostToken)
    {
        $this
            ->setHostToken($hostToken);
    }
    /**
     * Get HostToken value
     * @return \Travelport\Air\StructType\HostToken[]
     */
    public function getHostToken(): array
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @return \Travelport\Air\StructType\HostTokenList
     */
    public function setHostToken(array $hostToken): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\HostToken $item
     * @return \Travelport\Air\StructType\HostTokenList
     */
    public function addToHostToken(\Travelport\Air\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
        return $this;
    }
}
