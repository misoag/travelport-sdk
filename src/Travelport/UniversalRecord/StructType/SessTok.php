<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SessTok StructType
 * Meta information extracted from the WSDL
 * - documentation: A Session Token provided by Travelport
 * @subpackage Structs
 */
class SessTok extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: ID of the Session Token
     * - use: required
     * @var string
     */
    protected string $id;
    /**
     * Constructor method for SessTok
     * @uses SessTok::setId()
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this
            ->setId($id);
    }
    /**
     * Get id value
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Travelport\UniversalRecord\StructType\SessTok
     */
    public function setId(string $id): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
}
