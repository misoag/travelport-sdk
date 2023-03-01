<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteePaymentType StructType
 * Meta information extracted from the WSDL
 * - documentation: Accepted payment types. Applicable only for HotelSupershopper, Hotel Details and Hotel rules.
 * @subpackage Structs
 */
class GuaranteePaymentType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Accepted payment types: CreditCard, AgencyIATA/ARC, FrequentGuest, SpecialIndustry, CDNumber, HomeAddress, CompanyAddress, Override, Other, or None
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * Constructor method for GuaranteePaymentType
     * @uses GuaranteePaymentType::setType()
     * @uses GuaranteePaymentType::set_()
     * @uses GuaranteePaymentType::setDescription()
     * @param string $type
     * @param string $_
     * @param string $description
     */
    public function __construct(string $type, ?string $_ = null, ?string $description = null)
    {
        $this
            ->setType($type)
            ->set_($_)
            ->setDescription($description);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\GuaranteePaymentType
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\GuaranteePaymentType
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\UniversalRecord\StructType\GuaranteePaymentType
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
}
