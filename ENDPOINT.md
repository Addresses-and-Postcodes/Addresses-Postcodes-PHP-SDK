## List of endpoints: ✅ (Working) | ❌ (Not working) => PHP SDK

### Boundaries
- Get area boundary path ✅
- Get sector boundary path ✅

### Sectors
- Get sectors count & path ❌ => {exception: "ErrorException", file: app\Traits\ElasticSearchTrait.php", line: 127, message: "Array to string conversion"}

### Postcodes
- Postcode count by Polygon ✅

- Postcode list by polygon ❌ => {exception: "ErrorException", file: app\Http\Controllers\Api\PostcodeController.php", line: 137, message: "count(): Parameter must be an array or an object that implements Countable"}

- Get the geographical path of a postcode ✅

### Addresses
- Search for property ✅
- Properties list by Postcode ✅

- Properties count by Polygon ❌ => {"error":{"root_cause":[{"type":"query_shard_exception","reason":"failed to find geo_point field [location]","index_uuid":"Vu-sPO60RH-Zk_tiZ6MnMw","index":"pafs"}],"type":"search_phase_execution_exception","reason":"all shards failed","phase":"query","grouped":true,"failed_shards":[{"shard":0,"index":"pafs","node":"vd6eYaxMTjqRxgxb5vGdTQ","reason":{"type":"query_shard_exception","reason":"failed to find geo_point field [location]","index_uuid":"Vu-sPO60RH-Zk_tiZ6MnMw","index":"pafs"}}]},"status":400}

- Properties count by radius ❌ => {"error":{"root_cause":[{"type":"parsing_exception","reason":"Failed to parse","line":1,"col":101}],"type":"parsing_exception","reason":"Failed to parse","line":1,"col":101,"caused_by":{"type":"x_content_parse_exception","reason":"[1:101] [bool] failed to parse field [filter]","caused_by":{"type":"parse_exception","reason":"numeric value expected"}}},"status":400}

- Properties count by line polygon ❌ => {"error":{"root_cause":[{"type":"parsing_exception","reason":"Failed to parse","line":1,"col":87}],"type":"parsing_exception","reason":"Failed to parse","line":1,"col":87,"caused_by":{"type":"x_content_parse_exception","reason":"[1:87] [bool] failed to parse field [filter]","caused_by":{"type":"parse_exception","reason":"numeric value expected"}}},"status":400}

- Properties count by postcode ✅

### Postcode Information
- Postcode GEO Information ✅

### Storing Information
- Get Saved Searches ❌ => 404 Error Route Not Found
- Save a Search ❌ => 404 Error Route Not Found
- Delete a Search ❌ => 404 Error Route Not Found

### Postcode API
- Postcodes Current and Terminated API ✅
- Postcode to County API ❌ => {"status":false,"error":"Oops! Something went wrong..."}
- Postcode to Local Authority District ✅
- Postcode to London Borough API ❌ => {"status":false,"error":"Oops! Something went wrong..."}
- Postcode to Electoral Ward / Division API ❌ => {"status":false,"error":"Oops! Something went wrong..."}
- Postcode to Civil Parish (England), Communities (Wales) API ❌ => {"status":false,"error":"Oops! Something went wrong..."}
- Postcode to National Grid Reference API ✅
- Postcode to Former Strategic Health Authority ✅
- Postcode to NHS England Regions (NHS ER) API ❌ => {"status":false,"error":"Oops! Something went wrong..."}
- Postcode to UK Country Names & Codes API ✅
- Postcode to Regions (RGN) (formerly Government Office Regions GOR) API ✅
- Postcode to Standard Statistical Regions API ✅
- Postcode to Westminster Parliamentary Constituency API ✅
- Postcode to European Electoral Regions (EER) API ✅
- Postcode to Local Learning and Skills Council ✅
- Postcode to Travel to Work Areas (TTWA) API ✅
- Postcode to Primary Care Trusts ✅
- Postcode to Nomenclature of Units for Territorial Statistics (NUTS) ❌ => {"status":false,"error":"Oops! Something went wrong..."}
- Postcode to 2005 Statistical Wards API ✅
- Postcode to 2001 National UK Census Output Area Classification names API ✅
- Postcode to 2001 Census Area Statistics (CAS) Wards API ✅
- Postcode to National Park API ✅