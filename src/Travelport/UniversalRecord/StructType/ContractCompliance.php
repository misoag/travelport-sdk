<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContractCompliance StructType
 * @subpackage Structs
 */
class ContractCompliance extends AbstractStructBase
{
    /**
     * The InContract
     * Meta information extracted from the WSDL
     * - documentation: Contract Compliance Indicator. For In-Contract set to 'true', For Out-Of-Contract set to 'false'.
     * - use: required
     * @var bool
     */
    public bool $InContract;
    /**
     * The ContractToken
     * Meta information extracted from the WSDL
     * - documentation: Optional text message to set the rule or token for which it's In Contract or Out Of Contract. | Used for Character Strings, length 1 to 128.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $ContractToken = null;
    /**
     * Constructor method for ContractCompliance
     * @uses ContractCompliance::setInContract()
     * @uses ContractCompliance::setContractToken()
     * @param bool $inContract
     * @param string $contractToken
     */
    public function __construct(bool $inContract, ?string $contractToken = null)
    {
        $this
            ->setInContract($inContract)
            ->setContractToken($contractToken);
    }
    /**
     * Get InContract value
     * @return bool
     */
    public function getInContract(): bool
    {
        return $this->InContract;
    }
    /**
     * Set InContract value
     * @param bool $inContract
     * @return \Travelport\UniversalRecord\StructType\ContractCompliance
     */
    public function setInContract(bool $inContract): self
    {
        $this->InContract = $inContract;
        
        return $this;
    }
    /**
     * Get ContractToken value
     * @return string|null
     */
    public function getContractToken(): ?string
    {
        return $this->ContractToken;
    }
    /**
     * Set ContractToken value
     * @param string $contractToken
     * @return \Travelport\UniversalRecord\StructType\ContractCompliance
     */
    public function setContractToken(?string $contractToken = null): self
    {
        $this->ContractToken = $contractToken;
        
        return $this;
    }
}
