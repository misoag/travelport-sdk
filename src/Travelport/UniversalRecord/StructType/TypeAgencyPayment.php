<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeAgencyPayment StructType
 * Meta information extracted from the WSDL
 * - documentation: Type for Agency Payment.
 * @subpackage Structs
 */
class TypeAgencyPayment extends AbstractStructBase
{
    /**
     * The AgencyBillingIdentifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: required
     * @var string
     */
    protected string $AgencyBillingIdentifier;
    /**
     * The AgencyBillingNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: optional
     * @var string|null
     */
    protected ?string $AgencyBillingNumber = null;
    /**
     * The AgencyBillingPassword
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: optional
     * @var string|null
     */
    protected ?string $AgencyBillingPassword = null;
    /**
     * Constructor method for typeAgencyPayment
     * @uses TypeAgencyPayment::setAgencyBillingIdentifier()
     * @uses TypeAgencyPayment::setAgencyBillingNumber()
     * @uses TypeAgencyPayment::setAgencyBillingPassword()
     * @param string $agencyBillingIdentifier
     * @param string $agencyBillingNumber
     * @param string $agencyBillingPassword
     */
    public function __construct(string $agencyBillingIdentifier, ?string $agencyBillingNumber = null, ?string $agencyBillingPassword = null)
    {
        $this
            ->setAgencyBillingIdentifier($agencyBillingIdentifier)
            ->setAgencyBillingNumber($agencyBillingNumber)
            ->setAgencyBillingPassword($agencyBillingPassword);
    }
    /**
     * Get AgencyBillingIdentifier value
     * @return string
     */
    public function getAgencyBillingIdentifier(): string
    {
        return $this->AgencyBillingIdentifier;
    }
    /**
     * Set AgencyBillingIdentifier value
     * @param string $agencyBillingIdentifier
     * @return \Travelport\UniversalRecord\StructType\TypeAgencyPayment
     */
    public function setAgencyBillingIdentifier(string $agencyBillingIdentifier): self
    {
        // validation for constraint: string
        if (!is_null($agencyBillingIdentifier) && !is_string($agencyBillingIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyBillingIdentifier, true), gettype($agencyBillingIdentifier)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($agencyBillingIdentifier) && mb_strlen((string) $agencyBillingIdentifier) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $agencyBillingIdentifier)), __LINE__);
        }
        $this->AgencyBillingIdentifier = $agencyBillingIdentifier;
        
        return $this;
    }
    /**
     * Get AgencyBillingNumber value
     * @return string|null
     */
    public function getAgencyBillingNumber(): ?string
    {
        return $this->AgencyBillingNumber;
    }
    /**
     * Set AgencyBillingNumber value
     * @param string $agencyBillingNumber
     * @return \Travelport\UniversalRecord\StructType\TypeAgencyPayment
     */
    public function setAgencyBillingNumber(?string $agencyBillingNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyBillingNumber) && !is_string($agencyBillingNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyBillingNumber, true), gettype($agencyBillingNumber)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($agencyBillingNumber) && mb_strlen((string) $agencyBillingNumber) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $agencyBillingNumber)), __LINE__);
        }
        $this->AgencyBillingNumber = $agencyBillingNumber;
        
        return $this;
    }
    /**
     * Get AgencyBillingPassword value
     * @return string|null
     */
    public function getAgencyBillingPassword(): ?string
    {
        return $this->AgencyBillingPassword;
    }
    /**
     * Set AgencyBillingPassword value
     * @param string $agencyBillingPassword
     * @return \Travelport\UniversalRecord\StructType\TypeAgencyPayment
     */
    public function setAgencyBillingPassword(?string $agencyBillingPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyBillingPassword) && !is_string($agencyBillingPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyBillingPassword, true), gettype($agencyBillingPassword)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($agencyBillingPassword) && mb_strlen((string) $agencyBillingPassword) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $agencyBillingPassword)), __LINE__);
        }
        $this->AgencyBillingPassword = $agencyBillingPassword;
        
        return $this;
    }
}
