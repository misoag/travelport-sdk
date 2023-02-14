<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Check StructType
 * Meta information extracted from the WSDL
 * - documentation: Check Form of Payment
 * @subpackage Structs
 */
class Check extends AbstractStructBase
{
    /**
     * The MICRNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 29
     * - use: optional
     * @var string|null
     */
    protected ?string $MICRNumber = null;
    /**
     * The RoutingNumber
     * Meta information extracted from the WSDL
     * - documentation: The bank routing number of the check.
     * - use: optional
     * @var string|null
     */
    protected ?string $RoutingNumber = null;
    /**
     * The AccountNumber
     * Meta information extracted from the WSDL
     * - documentation: The account number of the check
     * - use: optional
     * @var string|null
     */
    protected ?string $AccountNumber = null;
    /**
     * The CheckNumber
     * Meta information extracted from the WSDL
     * - documentation: The sequential check number of the check.
     * - use: optional
     * @var string|null
     */
    protected ?string $CheckNumber = null;
    /**
     * Constructor method for Check
     * @uses Check::setMICRNumber()
     * @uses Check::setRoutingNumber()
     * @uses Check::setAccountNumber()
     * @uses Check::setCheckNumber()
     * @param string $mICRNumber
     * @param string $routingNumber
     * @param string $accountNumber
     * @param string $checkNumber
     */
    public function __construct(?string $mICRNumber = null, ?string $routingNumber = null, ?string $accountNumber = null, ?string $checkNumber = null)
    {
        $this
            ->setMICRNumber($mICRNumber)
            ->setRoutingNumber($routingNumber)
            ->setAccountNumber($accountNumber)
            ->setCheckNumber($checkNumber);
    }
    /**
     * Get MICRNumber value
     * @return string|null
     */
    public function getMICRNumber(): ?string
    {
        return $this->MICRNumber;
    }
    /**
     * Set MICRNumber value
     * @param string $mICRNumber
     * @return \Travelport\Hotel\StructType\Check
     */
    public function setMICRNumber(?string $mICRNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($mICRNumber) && !is_string($mICRNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mICRNumber, true), gettype($mICRNumber)), __LINE__);
        }
        // validation for constraint: maxLength(29)
        if (!is_null($mICRNumber) && mb_strlen((string) $mICRNumber) > 29) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 29', mb_strlen((string) $mICRNumber)), __LINE__);
        }
        $this->MICRNumber = $mICRNumber;
        
        return $this;
    }
    /**
     * Get RoutingNumber value
     * @return string|null
     */
    public function getRoutingNumber(): ?string
    {
        return $this->RoutingNumber;
    }
    /**
     * Set RoutingNumber value
     * @param string $routingNumber
     * @return \Travelport\Hotel\StructType\Check
     */
    public function setRoutingNumber(?string $routingNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($routingNumber) && !is_string($routingNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingNumber, true), gettype($routingNumber)), __LINE__);
        }
        $this->RoutingNumber = $routingNumber;
        
        return $this;
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \Travelport\Hotel\StructType\Check
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
        
        return $this;
    }
    /**
     * Get CheckNumber value
     * @return string|null
     */
    public function getCheckNumber(): ?string
    {
        return $this->CheckNumber;
    }
    /**
     * Set CheckNumber value
     * @param string $checkNumber
     * @return \Travelport\Hotel\StructType\Check
     */
    public function setCheckNumber(?string $checkNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($checkNumber) && !is_string($checkNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkNumber, true), gettype($checkNumber)), __LINE__);
        }
        $this->CheckNumber = $checkNumber;
        
        return $this;
    }
}
