<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperatingCompany StructType
 * Meta information extracted from the WSDL
 * - documentation: A textual remark identifying the OperatingCompany/Train Service other than BN orTL
 * @subpackage Structs
 */
class OperatingCompany extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Name Identifying the Train Service other than BN orTL
     * - use: required
     * @var string
     */
    public string $Name;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Company Short Text
     * - use: optional
     * @var string|null
     */
    public ?string $Code = null;
    /**
     * Constructor method for OperatingCompany
     * @uses OperatingCompany::setName()
     * @uses OperatingCompany::set_()
     * @uses OperatingCompany::setCode()
     * @param string $name
     * @param string $_
     * @param string $code
     */
    public function __construct(string $name, ?string $_ = null, ?string $code = null)
    {
        $this
            ->setName($name)
            ->set_($_)
            ->setCode($code);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Air\StructType\OperatingCompany
     */
    public function setName(string $name): self
    {
        $this->Name = $name;
        
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
     * @return \Travelport\Air\StructType\OperatingCompany
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
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
     * @return \Travelport\Air\StructType\OperatingCompany
     */
    public function setCode(?string $code = null): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
