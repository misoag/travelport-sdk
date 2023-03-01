<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HostToken StructType
 * Meta information extracted from the WSDL
 * - documentation: one or more hosts | how to route the command(s). You can have multiple active sessions between | the host it is assocated with, there is also an attribute called Host so we know | is not altered in any way between calls. Since a host
 * token is only valid on | does not maintain state. The format of this string isn't important as long as it | that must be passed in on successive calls they know who you are as our system | This is a host token. It contains some kind of payload we got
 * from a host
 * @subpackage Structs
 */
class HostToken extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Host
     * Meta information extracted from the WSDL
     * - documentation: The host associated with this token | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $Host = null;
    /**
     * The Key
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for HostToken
     * @uses HostToken::set_()
     * @uses HostToken::setHost()
     * @uses HostToken::setKey()
     * @uses HostToken::setElStat()
     * @uses HostToken::setKeyOverride()
     * @param string $_
     * @param string $host
     * @param string $key
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?string $_ = null, ?string $host = null, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->set_($_)
            ->setHost($host)
            ->setKey($key)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\HostToken
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get Host value
     * @return string|null
     */
    public function getHost(): ?string
    {
        return $this->Host;
    }
    /**
     * Set Host value
     * @param string $host
     * @return \Travelport\UniversalRecord\StructType\HostToken
     */
    public function setHost(?string $host = null): self
    {
        $this->Host = $host;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\HostToken
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\HostToken
     */
    public function setElStat(?string $elStat = null): self
    {
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\UniversalRecord\StructType\HostToken
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
