<?php return [
        'comments' => ["","","Linked to resource Vatgroups","Name of product","Price excluding VAT","Fixed stock price of product excluding VAT","Linked to resource Suppliers","Product code of this product at supplier, used for purchase orders","Delivery time from supplier in days","Longer description of product","Barcode (usually GS1, EAN13 or UPC code)","Only options: normal (default), unlimited_stock, virtual_composition, composition_with_stock","Deprecated in favor of 'type'. When unlimited stock is true, no stock will be monitored for this product","Weight of this product in grams","Length of this product in centimeters. Not available for virtual compositions","Width of this product in centimeters. Not available for virtual compositions","Height of this product in centimeters. Not available for virtual compositions","The minimum amount you need to purchase from your supplier","If you need to purchase this products in batches of x pieces","HS Code for customs","Country of origin of this product for customs (needs to be ISO 3166 2-char code)","Only for Picqer Fulfilment: Linked to belonging fulfilment customer","0:active 1:passive","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","product_code","idvatgroup","name","price","fixedstockprice","idsupplier","productcode_supplier","deliverytime","description","barcode","type","unlimitedstock","weight","length","width","height","minimum_purchase_quantity","purchase_in_quantities_of","hs_code","country_of_origin","idfulfilment_customer","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","product_code","status","is_deleted"],
        'types' => ["integer","integer","integer","string","double","double","integer","string","integer","string","string","string","integer","integer","integer","integer","integer","integer","integer","string","string","string","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["idvatgroup","name","price"],
        'max_length_columns' => ["name","productcode_supplier","description","barcode","type","hs_code","country_of_origin","idfulfilment_customer"],
        'max_length_values' => ["255","255","255","255","255","255","255","255"],
        'boolean_values' => ["unlimitedstock","status","is_deleted"],
        'default_keys' => ["product_code","fixedstockprice","idsupplier","deliverytime","unlimitedstock","weight","length","width","height","minimum_purchase_quantity","purchase_in_quantities_of","hs_code","country_of_origin","idfulfilment_customer","status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["0","0","0","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];