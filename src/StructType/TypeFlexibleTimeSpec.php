<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeFlexibleTimeSpec StructType
 * Meta information extracted from the WSDL
 * - documentation: A type which can be used for flexible date/time specification -extends the generic type typeTimeSpec to provide extra options for search.
 * @subpackage Structs
 */
class TypeFlexibleTimeSpec extends TypeTimeSpec
{
    /**
     * The SearchExtraDays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SearchExtraDays|null
     */
    protected ?\StructType\SearchExtraDays $SearchExtraDays = null;
    /**
     * Constructor method for typeFlexibleTimeSpec
     * @uses TypeFlexibleTimeSpec::setSearchExtraDays()
     * @param \StructType\SearchExtraDays $searchExtraDays
     */
    public function __construct(?\StructType\SearchExtraDays $searchExtraDays = null)
    {
        $this
            ->setSearchExtraDays($searchExtraDays);
    }
    /**
     * Get SearchExtraDays value
     * @return \StructType\SearchExtraDays|null
     */
    public function getSearchExtraDays(): ?\StructType\SearchExtraDays
    {
        return $this->SearchExtraDays;
    }
    /**
     * Set SearchExtraDays value
     * @param \StructType\SearchExtraDays $searchExtraDays
     * @return \StructType\TypeFlexibleTimeSpec
     */
    public function setSearchExtraDays(?\StructType\SearchExtraDays $searchExtraDays = null): self
    {
        $this->SearchExtraDays = $searchExtraDays;
        
        return $this;
    }
}
