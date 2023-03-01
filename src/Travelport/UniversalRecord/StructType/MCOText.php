<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MCOText StructType
 * Meta information extracted from the WSDL
 * - documentation: All type of free format text messages related to MCO like - Command Text, Agent Entry, MCO Modifiers, Text Message
 * @subpackage Structs
 */
class MCOText extends TypeFreeFormText
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type of text. Possible values: Command Text, Agent Entry, MCO Modifiers, Text Message
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * Constructor method for MCOText
     * @uses MCOText::setType()
     * @param string $type
     */
    public function __construct(?string $type = null)
    {
        $this
            ->setType($type);
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
     * @return \Travelport\UniversalRecord\StructType\MCOText
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
