<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailFareNoteRef StructType
 * Meta information extracted from the WSDL
 * - documentation: A reference to a fare note from a shared list. Used to minimize xml results.
 * @subpackage Structs
 */
class RailFareNoteRef extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * Constructor method for RailFareNoteRef
     * @uses RailFareNoteRef::setKey()
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this
            ->setKey($key);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\RailFareNoteRef
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
