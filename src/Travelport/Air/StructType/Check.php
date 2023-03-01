<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?string $MICRNumber = null;
    /**
     * The RoutingNumber
     * Meta information extracted from the WSDL
     * - documentation: The bank routing number of the check.
     * - use: optional
     * @var string|null
     */
    public ?string $RoutingNumber = null;
    /**
     * The AccountNumber
     * Meta information extracted from the WSDL
     * - documentation: The account number of the check
     * - use: optional
     * @var string|null
     */
    public ?string $AccountNumber = null;
    /**
     * The CheckNumber
     * Meta information extracted from the WSDL
     * - documentation: The sequential check number of the check.
     * - use: optional
     * @var string|null
     */
    public ?string $CheckNumber = null;
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
     * @return \Travelport\Air\StructType\Check
     */
    public function setMICRNumber(?string $mICRNumber = null): self
    {
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
     * @return \Travelport\Air\StructType\Check
     */
    public function setRoutingNumber(?string $routingNumber = null): self
    {
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
     * @return \Travelport\Air\StructType\Check
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
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
     * @return \Travelport\Air\StructType\Check
     */
    public function setCheckNumber(?string $checkNumber = null): self
    {
        $this->CheckNumber = $checkNumber;
        
        return $this;
    }
}
