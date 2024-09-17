<?php

namespace modmore\VersionX\Types;

class Snippet extends Type
{
    protected string $class = \modSnippet::class;
    protected string $tabId = 'modx-snippet-tabs';
    protected string $panelId = 'modx-panel-snippet';
    protected string $package = 'core';
    protected string $nameField = 'name';
    protected array $fieldOrder = [
        'name',
        'description',
        'content',
    ];
    protected array $excludedFields = [
        'id',
        'snippet',
    ];
}