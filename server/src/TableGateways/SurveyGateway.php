<?php

use Src\System\DatabaseConnector;

class SurveyTable extends DatabaseConnector {
    public function __construct() {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getTableName() {
        return 'survey';
    }
}