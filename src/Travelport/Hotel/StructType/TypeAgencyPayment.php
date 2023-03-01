<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public string $AgencyBillingIdentifier;
    /**
     * The AgencyBillingNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: optional
     * @var string|null
     */
    public ?string $AgencyBillingNumber = null;
    /**
     * The AgencyBillingPassword
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: optional
     * @var string|null
     */
    public ?string $AgencyBillingPassword = null;
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
     * @return \Travelport\Hotel\StructType\TypeAgencyPayment
     */
    public function setAgencyBillingIdentifier(string $agencyBillingIdentifier): self
    {
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
     * @return \Travelport\Hotel\StructType\TypeAgencyPayment
     */
    public function setAgencyBillingNumber(?string $agencyBillingNumber = null): self
    {
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
     * @return \Travelport\Hotel\StructType\TypeAgencyPayment
     */
    public function setAgencyBillingPassword(?string $agencyBillingPassword = null): self
    {
        $this->AgencyBillingPassword = $agencyBillingPassword;
        
        return $this;
    }
}
