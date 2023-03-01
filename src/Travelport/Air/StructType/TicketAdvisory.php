<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?string $_ = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - documentation: ISO 639 two-character language codes are used to retrieve specific information in the requested language. For Rich Content and Branding, language codes ZH-HANT (Chinese Traditional), ZH-HANS (Chinese Simplified), FR-CA (French
     * Canadian) and PT-BR (Portuguese Brazil) can also be used. For RCH, language codes ENGB, ENUS, DEDE, DECH can also be used. Only certain services support this attribute. Providers: ACH, RCH, 1G, 1V, 1P.
     * - use: optional
     * @var string|null
     */
    public ?string $LanguageCode = null;
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
     * @return \Travelport\Air\StructType\TicketAdvisory
     */
    public function set_(?string $_ = null): self
    {
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
     * @return \Travelport\Air\StructType\TicketAdvisory
     */
    public function setKey(?string $key = null): self
    {
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
     * @return \Travelport\Air\StructType\TicketAdvisory
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        $this->LanguageCode = $languageCode;
        
        return $this;
    }
}
