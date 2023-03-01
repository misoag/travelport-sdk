<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Document StructType
 * Meta information extracted from the WSDL
 * - documentation: APIS Document Details.
 * @subpackage Structs
 */
class Document extends AbstractStructBase
{
    /**
     * The Sequence
     * Meta information extracted from the WSDL
     * - documentation: Sequence number for the document.
     * - use: optional
     * @var int|null
     */
    public ?int $Sequence = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Type of the Document. Visa, Passport, DriverLicense etc.
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - documentation: Applicability level of the Document. Required, Supported, API_Supported or Unknown.
     * - use: optional
     * @var string|null
     */
    public ?string $Level = null;
    /**
     * Constructor method for Document
     * @uses Document::setSequence()
     * @uses Document::setType()
     * @uses Document::setLevel()
     * @param int $sequence
     * @param string $type
     * @param string $level
     */
    public function __construct(?int $sequence = null, ?string $type = null, ?string $level = null)
    {
        $this
            ->setSequence($sequence)
            ->setType($type)
            ->setLevel($level);
    }
    /**
     * Get Sequence value
     * @return int|null
     */
    public function getSequence(): ?int
    {
        return $this->Sequence;
    }
    /**
     * Set Sequence value
     * @param int $sequence
     * @return \Travelport\Air\StructType\Document
     */
    public function setSequence(?int $sequence = null): self
    {
        $this->Sequence = $sequence;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Air\StructType\Document
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel(): ?string
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @param string $level
     * @return \Travelport\Air\StructType\Document
     */
    public function setLevel(?string $level = null): self
    {
        $this->Level = $level;
        
        return $this;
    }
}
