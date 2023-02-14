<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected bool $InContract;
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
    protected ?string $ContractToken = null;
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
     * @return \Travelport\Hotel\StructType\ContractCompliance
     */
    public function setInContract(bool $inContract): self
    {
        // validation for constraint: boolean
        if (!is_null($inContract) && !is_bool($inContract)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inContract, true), gettype($inContract)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\ContractCompliance
     */
    public function setContractToken(?string $contractToken = null): self
    {
        // validation for constraint: string
        if (!is_null($contractToken) && !is_string($contractToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractToken, true), gettype($contractToken)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($contractToken) && mb_strlen((string) $contractToken) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $contractToken)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($contractToken) && mb_strlen((string) $contractToken) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $contractToken)), __LINE__);
        }
        $this->ContractToken = $contractToken;
        
        return $this;
    }
}
