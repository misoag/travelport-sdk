<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $RulesText = null;
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
        // validation for constraint: string
        if (!is_null($rulesText) && !is_string($rulesText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rulesText, true), gettype($rulesText)), __LINE__);
        }
        $this->RulesText = $rulesText;
        
        return $this;
    }
}
