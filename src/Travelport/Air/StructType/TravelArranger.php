<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelArranger StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of Travel Arranger
 * @subpackage Structs
 */
class TravelArranger extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The CompanyShortName
     * Meta information extracted from the WSDL
     * - documentation: Company Name
     * - use: optional
     * @var string|null
     */
    public ?string $CompanyShortName = null;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: IATA Code for Arranger
     * - use: optional
     * @var string|null
     */
    public ?string $Code = null;
    /**
     * Constructor method for TravelArranger
     * @uses TravelArranger::set_()
     * @uses TravelArranger::setCompanyShortName()
     * @uses TravelArranger::setCode()
     * @param string $_
     * @param string $companyShortName
     * @param string $code
     */
    public function __construct(?string $_ = null, ?string $companyShortName = null, ?string $code = null)
    {
        $this
            ->set_($_)
            ->setCompanyShortName($companyShortName)
            ->setCode($code);
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
     * @return \Travelport\Air\StructType\TravelArranger
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get CompanyShortName value
     * @return string|null
     */
    public function getCompanyShortName(): ?string
    {
        return $this->CompanyShortName;
    }
    /**
     * Set CompanyShortName value
     * @param string $companyShortName
     * @return \Travelport\Air\StructType\TravelArranger
     */
    public function setCompanyShortName(?string $companyShortName = null): self
    {
        $this->CompanyShortName = $companyShortName;
        
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\Air\StructType\TravelArranger
     */
    public function setCode(?string $code = null): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
