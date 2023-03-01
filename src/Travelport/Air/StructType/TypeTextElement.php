<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTextElement StructType
 * @subpackage Structs
 */
class TypeTextElement extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
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
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - documentation: ISO 639 two-character language codes are used to retrieve specific information in the requested language. For Rich Content and Branding, language codes ZH-HANT (Chinese Traditional), ZH-HANS (Chinese Simplified), FR-CA (French
     * Canadian) and PT-BR (Portuguese Brazil) can also be used. For RCH, language codes ENGB, ENUS, DEDE, DECH can also be used. Only certain services support this attribute. Providers: ACH, RCH, 1G, 1V, 1P.
     * - use: optional
     * @var string|null
     */
    public ?string $LanguageCode = null;
    /**
     * Constructor method for typeTextElement
     * @uses TypeTextElement::setType()
     * @uses TypeTextElement::set_()
     * @uses TypeTextElement::setLanguageCode()
     * @param string $type
     * @param string $_
     * @param string $languageCode
     */
    public function __construct(string $type, ?string $_ = null, ?string $languageCode = null)
    {
        $this
            ->setType($type)
            ->set_($_)
            ->setLanguageCode($languageCode);
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
     * @return \Travelport\Air\StructType\TypeTextElement
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
     * @return \Travelport\Air\StructType\TypeTextElement
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
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
     * @return \Travelport\Air\StructType\TypeTextElement
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        $this->LanguageCode = $languageCode;
        
        return $this;
    }
}
