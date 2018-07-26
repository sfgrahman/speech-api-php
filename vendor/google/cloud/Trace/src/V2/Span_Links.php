<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v2/trace.proto

namespace Google\Cloud\Trace\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of links, which are references from this span to a span
 * in the same or different trace.
 *
 * Generated from protobuf message <code>google.devtools.cloudtrace.v2.Span.Links</code>
 */
class Span_Links extends \Google\Protobuf\Internal\Message
{
    /**
     * A collection of links.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v2.Span.Link link = 1;</code>
     */
    private $link;
    /**
     * The number of dropped links after the maximum size was enforced. If
     * this value is 0, then no links were dropped.
     *
     * Generated from protobuf field <code>int32 dropped_links_count = 2;</code>
     */
    private $dropped_links_count = 0;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudtrace\V2\Trace::initOnce();
        parent::__construct();
    }

    /**
     * A collection of links.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v2.Span.Link link = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * A collection of links.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v2.Span.Link link = 1;</code>
     * @param \Google\Cloud\Trace\V2\Span_Link[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLink($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Trace\V2\Span_Link::class);
        $this->link = $arr;

        return $this;
    }

    /**
     * The number of dropped links after the maximum size was enforced. If
     * this value is 0, then no links were dropped.
     *
     * Generated from protobuf field <code>int32 dropped_links_count = 2;</code>
     * @return int
     */
    public function getDroppedLinksCount()
    {
        return $this->dropped_links_count;
    }

    /**
     * The number of dropped links after the maximum size was enforced. If
     * this value is 0, then no links were dropped.
     *
     * Generated from protobuf field <code>int32 dropped_links_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDroppedLinksCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->dropped_links_count = $var;

        return $this;
    }

}
