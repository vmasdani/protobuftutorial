<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: application.proto

namespace App\Proto\GPBMetadata;

class Application
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
application.proto"s
	BaseModel
id (H �

created_at (	H�

updated_at (	H�B
_idB
_created_atB
_updated_at"z
Person#

base_model (2
.BaseModelH �
name (	H�
address (	H�B
_base_modelB
_nameB

_address"!
People
people (2.PersonB$�	App\\Proto�App\\Proto\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

