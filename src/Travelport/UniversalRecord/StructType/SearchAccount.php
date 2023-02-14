<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $ClientID = null;
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
    protected ?string $BranchID = null;
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
        // validation for constraint: string
        if (!is_null($clientID) && !is_string($clientID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientID, true), gettype($clientID)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($branchID) && !is_string($branchID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($branchID, true), gettype($branchID)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($branchID) && mb_strlen((string) $branchID) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $branchID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($branchID) && mb_strlen((string) $branchID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $branchID)), __LINE__);
        }
        $this->BranchID = $branchID;
        
        return $this;
    }
}
