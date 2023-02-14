<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SsrType StructType
 * @subpackage Structs
 */
class SsrType extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Description;
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Level;
    /**
     * The FreeTextRequired
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $FreeTextRequired;
    /**
     * The Providers
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Providers = null;
    /**
     * The Pattern
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Pattern = null;
    /**
     * The HelpText
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $HelpText = null;
    /**
     * Constructor method for SsrType
     * @uses SsrType::setCode()
     * @uses SsrType::setDescription()
     * @uses SsrType::setLevel()
     * @uses SsrType::setFreeTextRequired()
     * @uses SsrType::setProviders()
     * @uses SsrType::setPattern()
     * @uses SsrType::setHelpText()
     * @param string $code
     * @param string $description
     * @param string $level
     * @param string $freeTextRequired
     * @param string $providers
     * @param string $pattern
     * @param string $helpText
     */
    public function __construct(string $code, string $description, string $level, string $freeTextRequired, ?string $providers = null, ?string $pattern = null, ?string $helpText = null)
    {
        $this
            ->setCode($code)
            ->setDescription($description)
            ->setLevel($level)
            ->setFreeTextRequired($freeTextRequired)
            ->setProviders($providers)
            ->setPattern($pattern)
            ->setHelpText($helpText);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\Util\StructType\SsrType
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\Util\StructType\SsrType
     */
    public function setDescription(string $description): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Level value
     * @return string
     */
    public function getLevel(): string
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @param string $level
     * @return \Travelport\Util\StructType\SsrType
     */
    public function setLevel(string $level): self
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->Level = $level;
        
        return $this;
    }
    /**
     * Get FreeTextRequired value
     * @return string
     */
    public function getFreeTextRequired(): string
    {
        return $this->FreeTextRequired;
    }
    /**
     * Set FreeTextRequired value
     * @param string $freeTextRequired
     * @return \Travelport\Util\StructType\SsrType
     */
    public function setFreeTextRequired(string $freeTextRequired): self
    {
        // validation for constraint: string
        if (!is_null($freeTextRequired) && !is_string($freeTextRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($freeTextRequired, true), gettype($freeTextRequired)), __LINE__);
        }
        $this->FreeTextRequired = $freeTextRequired;
        
        return $this;
    }
    /**
     * Get Providers value
     * @return string|null
     */
    public function getProviders(): ?string
    {
        return $this->Providers;
    }
    /**
     * Set Providers value
     * @param string $providers
     * @return \Travelport\Util\StructType\SsrType
     */
    public function setProviders(?string $providers = null): self
    {
        // validation for constraint: string
        if (!is_null($providers) && !is_string($providers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providers, true), gettype($providers)), __LINE__);
        }
        $this->Providers = $providers;
        
        return $this;
    }
    /**
     * Get Pattern value
     * @return string|null
     */
    public function getPattern(): ?string
    {
        return $this->Pattern;
    }
    /**
     * Set Pattern value
     * @param string $pattern
     * @return \Travelport\Util\StructType\SsrType
     */
    public function setPattern(?string $pattern = null): self
    {
        // validation for constraint: string
        if (!is_null($pattern) && !is_string($pattern)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pattern, true), gettype($pattern)), __LINE__);
        }
        $this->Pattern = $pattern;
        
        return $this;
    }
    /**
     * Get HelpText value
     * @return string|null
     */
    public function getHelpText(): ?string
    {
        return $this->HelpText;
    }
    /**
     * Set HelpText value
     * @param string $helpText
     * @return \Travelport\Util\StructType\SsrType
     */
    public function setHelpText(?string $helpText = null): self
    {
        // validation for constraint: string
        if (!is_null($helpText) && !is_string($helpText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($helpText, true), gettype($helpText)), __LINE__);
        }
        $this->HelpText = $helpText;
        
        return $this;
    }
}
