<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $OptionalServiceRef;
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
     * @return \Travelport\Air\StructType\GroupedOption
     */
    public function setOptionalServiceRef(string $optionalServiceRef): self
    {
        $this->OptionalServiceRef = $optionalServiceRef;
        
        return $this;
    }
}
