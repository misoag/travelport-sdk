<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Id;
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
     * @return \Travelport\Air\StructType\BrandID
     */
    public function setId(string $id): self
    {
        $this->Id = $id;
        
        return $this;
    }
}
