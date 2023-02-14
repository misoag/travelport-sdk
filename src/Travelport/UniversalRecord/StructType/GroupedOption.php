<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupedOption StructType
 * @subpackage Structs
 */
class GroupedOption extends AbstractStructBase
{
    /**
     * The OptionalServiceRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a optionalService which is paired with other optional services in the parent PairedOptions element. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $OptionalServiceRef;
    /**
     * Constructor method for GroupedOption
     * @uses GroupedOption::setOptionalServiceRef()
     * @param string $optionalServiceRef
     */
    public function __construct(string $optionalServiceRef)
    {
        $this
            ->setOptionalServiceRef($optionalServiceRef);
    }
    /**
     * Get OptionalServiceRef value
     * @return string
     */
    public function getOptionalServiceRef(): string
    {
        return $this->OptionalServiceRef;
    }
    /**
     * Set OptionalServiceRef value
     * @param string $optionalServiceRef
     * @return \Travelport\UniversalRecord\StructType\GroupedOption
     */
    public function setOptionalServiceRef(string $optionalServiceRef): self
    {
        // validation for constraint: string
        if (!is_null($optionalServiceRef) && !is_string($optionalServiceRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionalServiceRef, true), gettype($optionalServiceRef)), __LINE__);
        }
        $this->OptionalServiceRef = $optionalServiceRef;
        
        return $this;
    }
}
