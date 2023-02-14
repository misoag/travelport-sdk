<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $_ = null;
    /**
     * The CompanyShortName
     * Meta information extracted from the WSDL
     * - documentation: Company Name
     * - use: optional
     * @var string|null
     */
    protected ?string $CompanyShortName = null;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: IATA Code for Arranger
     * - use: optional
     * @var string|null
     */
    protected ?string $Code = null;
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
     * @return \Travelport\Util\StructType\TravelArranger
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TravelArranger
     */
    public function setCompanyShortName(?string $companyShortName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyShortName) && !is_string($companyShortName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyShortName, true), gettype($companyShortName)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TravelArranger
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
}
