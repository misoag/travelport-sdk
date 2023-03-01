<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rules StructType
 * @subpackage Structs
 */
class Rules extends AbstractStructBase
{
    /**
     * The RulesText
     * Meta information extracted from the WSDL
     * - documentation: Rules text
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $RulesText = null;
    /**
     * Constructor method for Rules
     * @uses Rules::setRulesText()
     * @param string $rulesText
     */
    public function __construct(?string $rulesText = null)
    {
        $this
            ->setRulesText($rulesText);
    }
    /**
     * Get RulesText value
     * @return string|null
     */
    public function getRulesText(): ?string
    {
        return $this->RulesText;
    }
    /**
     * Set RulesText value
     * @param string $rulesText
     * @return \Travelport\UniversalRecord\StructType\Rules
     */
    public function setRulesText(?string $rulesText = null): self
    {
        $this->RulesText = $rulesText;
        
        return $this;
    }
}
