<?php

return [

  'weight' => [
    'title' => 1.5,
    'content' => 1,
  ],

  'limit-results' => 100,

  /**
   *  Enable wildcard after words
   */
  'enable_wildcards' => false,

  'indexed_record_model' => \Swis\LaravelFulltext\IndexedRecord::class
];
