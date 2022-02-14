<?php return [
        'comments' => ["","","","","","","","","","","0:active 1:passive","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","stock_code","product_code","idwarehouse","stock","reserved","reservedbackorders","reservedpicklists","reservedallocations","freestock","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","stock_code","status","is_deleted","product_code"],
        'types' => ["integer","integer","integer","integer","integer","integer","integer","integer","integer","string","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["product_code","idwarehouse"],
        'max_length_columns' => ["freestock"],
        'max_length_values' => ["255"],
        'boolean_values' => ["status","is_deleted"],
        'default_keys' => ["stock_code","stock","reserved","reservedbackorders","reservedpicklists","reservedallocations","status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["0","0","0","0","0","0","1","0","0","0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];