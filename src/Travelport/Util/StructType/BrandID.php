<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandID StructType
 * Meta information extracted from the WSDL
 * - documentation: Brand ids for Merchandising details.
 * @subpackage Structs
 */
class BrandID extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Id;
    /**
     * Constructor method for BrandID
     * @uses BrandID::setId()
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this
            ->setId($id);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId(): string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Travelport\Util\StructType\BrandID
     */
    public function setId(string $id): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
}
