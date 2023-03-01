<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAccount StructType
 * Meta information extracted from the WSDL
 * - documentation: Search restriction by Account
 * @subpackage Structs
 */
class SearchAccount extends AbstractStructBase
{
    /**
     * The ClientID
     * Meta information extracted from the WSDL
     * - documentation: Identifier of the corporation this account is for.
     * - use: optional
     * @var string|null
     */
    public ?string $ClientID = null;
    /**
     * The BranchID
     * Meta information extracted from the WSDL
     * - documentation: Account Branch ID. | External Agency Branch Identifier
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $BranchID = null;
    /**
     * Constructor method for SearchAccount
     * @uses SearchAccount::setClientID()
     * @uses SearchAccount::setBranchID()
     * @param string $clientID
     * @param string $branchID
     */
    public function __construct(?string $clientID = null, ?string $branchID = null)
    {
        $this
            ->setClientID($clientID)
            ->setBranchID($branchID);
    }
    /**
     * Get ClientID value
     * @return string|null
     */
    public function getClientID(): ?string
    {
        return $this->ClientID;
    }
    /**
     * Set ClientID value
     * @param string $clientID
     * @return \Travelport\UniversalRecord\StructType\SearchAccount
     */
    public function setClientID(?string $clientID = null): self
    {
        $this->ClientID = $clientID;
        
        return $this;
    }
    /**
     * Get BranchID value
     * @return string|null
     */
    public function getBranchID(): ?string
    {
        return $this->BranchID;
    }
    /**
     * Set BranchID value
     * @param string $branchID
     * @return \Travelport\UniversalRecord\StructType\SearchAccount
     */
    public function setBranchID(?string $branchID = null): self
    {
        $this->BranchID = $branchID;
        
        return $this;
    }
}
