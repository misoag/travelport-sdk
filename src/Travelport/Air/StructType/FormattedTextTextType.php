<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormattedTextTextType StructType
 * Meta information extracted from the WSDL
 * - documentation: The language in which the text is provided. | Provides text and indicates whether it is formatted or not.
 * @subpackage Structs
 */
class FormattedTextTextType extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Formatted
     * Meta information extracted from the WSDL
     * - documentation: Textual information, which may be formatted as a line of information, or unformatted, as a paragraph of text.
     * - use: optional
     * @var bool|null
     */
    public ?bool $Formatted = null;
    /**
     * The TextFormat
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TextFormat = null;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - documentation: Language identification.
     * - type: xs:language
     * - use: optional
     * @var string|null
     */
    public ?string $Language = null;
    /**
     * Constructor method for FormattedTextTextType
     * @uses FormattedTextTextType::set_()
     * @uses FormattedTextTextType::setFormatted()
     * @uses FormattedTextTextType::setTextFormat()
     * @uses FormattedTextTextType::setLanguage()
     * @param string $_
     * @param bool $formatted
     * @param string $textFormat
     * @param string $language
     */
    public function __construct(?string $_ = null, ?bool $formatted = null, ?string $textFormat = null, ?string $language = null)
    {
        $this
            ->set_($_)
            ->setFormatted($formatted)
            ->setTextFormat($textFormat)
            ->setLanguage($language);
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
     * @return \Travelport\Air\StructType\FormattedTextTextType
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get Formatted value
     * @return bool|null
     */
    public function getFormatted(): ?bool
    {
        return $this->Formatted;
    }
    /**
     * Set Formatted value
     * @param bool $formatted
     * @return \Travelport\Air\StructType\FormattedTextTextType
     */
    public function setFormatted(?bool $formatted = null): self
    {
        $this->Formatted = $formatted;
        
        return $this;
    }
    /**
     * Get TextFormat value
     * @return string|null
     */
    public function getTextFormat(): ?string
    {
        return $this->TextFormat;
    }
    /**
     * Set TextFormat value
     * @param string $textFormat
     * @return \Travelport\Air\StructType\FormattedTextTextType
     */
    public function setTextFormat(?string $textFormat = null): self
    {
        $this->TextFormat = $textFormat;
        
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Travelport\Air\StructType\FormattedTextTextType
     */
    public function setLanguage(?string $language = null): self
    {
        $this->Language = $language;
        
        return $this;
    }
}
