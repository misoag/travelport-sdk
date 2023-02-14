<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketAdvisory StructType
 * Meta information extracted from the WSDL
 * - documentation: Additional ticket information. | Used for Character Strings, length 1 to 500.
 * - base: xs:string
 * - maxLength: 500
 * - minLength: 1
 * @subpackage Structs
 */
class TicketAdvisory extends AbstractStructBase
{
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 500.
     * - base: xs:string
     * - maxLength: 500
     * - minLength: 1
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - documentation: ISO 639 two-character language codes are used to retrieve specific information in the requested language. For Rich Content and Branding, language codes ZH-HANT (Chinese Traditional), ZH-HANS (Chinese Simplified), FR-CA (French
     * Canadian) and PT-BR (Portuguese Brazil) can also be used. For RCH, language codes ENGB, ENUS, DEDE, DECH can also be used. Only certain services support this attribute. Providers: ACH, RCH, 1G, 1V, 1P.
     * - use: optional
     * @var string|null
     */
    protected ?string $LanguageCode = null;
    /**
     * Constructor method for TicketAdvisory
     * @uses TicketAdvisory::set_()
     * @uses TicketAdvisory::setKey()
     * @uses TicketAdvisory::setLanguageCode()
     * @param string $_
     * @param string $key
     * @param string $languageCode
     */
    public function __construct(?string $_ = null, ?string $key = null, ?string $languageCode = null)
    {
        $this
            ->set_($_)
            ->setKey($key)
            ->setLanguageCode($languageCode);
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
     * @return \Travelport\UniversalRecord\StructType\TicketAdvisory
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        // validation for constraint: maxLength(500)
        if (!is_null($_) && mb_strlen((string) $_) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 500', mb_strlen((string) $_)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($_) && mb_strlen((string) $_) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\TicketAdvisory
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get LanguageCode value
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param string $languageCode
     * @return \Travelport\UniversalRecord\StructType\TicketAdvisory
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        
        return $this;
    }
}
