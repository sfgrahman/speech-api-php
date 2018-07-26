<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generalization function that buckets values based on ranges. The ranges and
 * replacement values are dynamically provided by the user for custom behavior,
 * such as 1-30 -> LOW 31-65 -> MEDIUM 66-100 -> HIGH
 * This can be used on
 * data of type: number, long, string, timestamp.
 * If the bound `Value` type differs from the type of data being transformed, we
 * will first attempt converting the type of the data to be transformed to match
 * the type of the bound before comparing.
 * See https://cloud.google.com/dlp/docs/concepts-bucketing to learn more.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.BucketingConfig</code>
 */
class BucketingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Set of buckets. Ranges must be non-overlapping.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.BucketingConfig.Bucket buckets = 1;</code>
     */
    private $buckets;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Set of buckets. Ranges must be non-overlapping.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.BucketingConfig.Bucket buckets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuckets()
    {
        return $this->buckets;
    }

    /**
     * Set of buckets. Ranges must be non-overlapping.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.BucketingConfig.Bucket buckets = 1;</code>
     * @param \Google\Cloud\Dlp\V2\BucketingConfig_Bucket[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuckets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\BucketingConfig_Bucket::class);
        $this->buckets = $arr;

        return $this;
    }

}

