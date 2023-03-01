<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonNameSearch StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer name field
 * @subpackage Structs
 */
class PersonNameSearch extends AbstractStructBase
{
    /**
     * The Last
     * Meta information extracted from the WSDL
     * - documentation: Person Last Name to be searched for Flight Pass content. | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Last;
    /**
     * Constructor method for PersonNameSearch
     * @uses PersonNameSearch::setLast()
     * @param string $last
     */
    public function __construct(string $last)
    {
        $this
            ->setLast($last);
    }
    /**
     * Get Last value
     * @return string
     */
    public function getLast(): string
    {
        return $this->Last;
    }
    /**
     * Set Last value
     * @param string $last
     * @return \Travelport\Air\StructType\PersonNameSearch
     */
    public function setLast(string $last): self
    {
        $this->Last = $last;
        
        return $this;
    }
}
