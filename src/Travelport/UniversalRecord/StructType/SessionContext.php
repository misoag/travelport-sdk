<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SessionContext StructType
 * Meta information extracted from the WSDL
 * - documentation: A XML payload that contains either the Session Context Token or the Session Properties
 * @subpackage Structs
 */
class SessionContext extends AbstractStructBase
{
    /**
     * The SessTok
     * Meta information extracted from the WSDL
     * - choice: SessTok | SessProp
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\UniversalRecord\StructType\SessTok|null
     */
    public ?\Travelport\UniversalRecord\StructType\SessTok $SessTok = null;
    /**
     * The SessProp
     * Meta information extracted from the WSDL
     * - choice: SessTok | SessProp
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * @var \Travelport\UniversalRecord\StructType\SessProp[]
     */
    public ?array $SessProp = null;
    /**
     * Constructor method for SessionContext
     * @uses SessionContext::setSessTok()
     * @uses SessionContext::setSessProp()
     * @param \Travelport\UniversalRecord\StructType\SessTok $sessTok
     * @param \Travelport\UniversalRecord\StructType\SessProp[] $sessProp
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\SessTok $sessTok = null, ?array $sessProp = null)
    {
        $this
            ->setSessTok($sessTok)
            ->setSessProp($sessProp);
    }
    /**
     * Get SessTok value
     * @return \Travelport\UniversalRecord\StructType\SessTok|null
     */
    public function getSessTok(): ?\Travelport\UniversalRecord\StructType\SessTok
    {
        return $this->SessTok ?? null;
    }
    /**
     * Set SessTok value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\SessTok $sessTok
     * @return \Travelport\UniversalRecord\StructType\SessionContext
     */
    public function setSessTok(?\Travelport\UniversalRecord\StructType\SessTok $sessTok = null): self
    {
        if (is_null($sessTok) || (is_array($sessTok) && empty($sessTok))) {
            unset($this->SessTok);
        } else {
            $this->SessTok = $sessTok;
        }
        
        return $this;
    }
    /**
     * Get SessProp value
     * @return \Travelport\UniversalRecord\StructType\SessProp[]|null
     */
    public function getSessProp(): ?array
    {
        return $this->SessProp ?? null;
    }
    /**
     * Set SessProp value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\SessProp[] $sessProp
     * @return \Travelport\UniversalRecord\StructType\SessionContext
     */
    public function setSessProp(?array $sessProp = null): self
    {
        if (is_null($sessProp) || (is_array($sessProp) && empty($sessProp))) {
            unset($this->SessProp);
        } else {
            $this->SessProp = $sessProp;
        }
        
        return $this;
    }
    /**
     * Add item to SessProp value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SessProp $item
     * @return \Travelport\UniversalRecord\StructType\SessionContext
     */
    public function addToSessProp(\Travelport\UniversalRecord\StructType\SessProp $item): self
    {
        $this->SessProp[] = $item;
        
        return $this;
    }
}
