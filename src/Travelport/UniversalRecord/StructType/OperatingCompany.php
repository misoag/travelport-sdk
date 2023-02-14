<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Name;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Company Short Text
     * - use: optional
     * @var string|null
     */
    protected ?string $Code = null;
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
     * @return \Travelport\UniversalRecord\StructType\OperatingCompany
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\OperatingCompany
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
     * @return \Travelport\UniversalRecord\StructType\OperatingCompany
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
