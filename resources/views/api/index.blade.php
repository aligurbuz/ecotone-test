<!DOCTYPE html>
<!-- saved from url=(0043)https://flysystem.thephpleague.com/v2/docs/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Api Documentation</title>
    <meta name="description" content="Filesystem abstraction library for PHP.">
    <script type="text/javascript" async="" src="{{publicPath()}}/api/apiDoc_files/analytics.js"></script><script async="" src="{{publicPath()}}/api/apiDoc_files/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-46050814-3');
    </script>
    <!--<base href="https://flysystem.thephpleague.com/">--><base href=".">
    <link rel="stylesheet" href="{{publicPath()}}/api/apiDoc_files/docsearch.min.css">
    <link rel="stylesheet" href="{{publicPath()}}/api/apiDoc_files/styles.38c6185a8578394bce5d.css">
</head>
<body class="min-h-screen text-base text-indigo-body-text min-w-full pt-12 leading-normal bg-indigo-lightest">
<div class="pb-1 fixed z-10 top-0 w-screen bg-white border-indigo-lighter border-b">
    <div class="max-w-2xl mx-auto px-4 py-2">
        <div class="flex items-center flex-no-shrink top-0">
            <a href="{{publicPath()}}/doc" class="flex items-center h-10">
                <img class="h-10 w-10 mr-3" width="30" height="30" src="{{publicPath()}}/api/apiDoc_files/flysystem.svg">
                <span class="pr-2 font-normal overflow-hidden font-heading text-3xl text-indigo-darkest -sm:hidden">
Api Documentation
<sup class="text-xs relative text-indigo" style="top: -20px;">1.0.0</sup>
</span>
            </a>
            <div class="flex-grow"></div>
            <div class="flex-no-shrink flex-no-grow h-10 px-4 relative">
                <!--<span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;">
                    <input id="global-search" class="focus:outline-0 h-10 py-2 pl-8 pr-2 text-indigo-darker rounded bg-indigo-lightest focus:border-indigo-light focus:bg-white focus:placeholder-none max-w-xs w-full appearance-none ds-input" type="text" placeholder="Search the docs" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
                    <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="ds-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;"><div class="ds-dataset-1"></div></span></span>
                <span class="pointer-events-none absolute inset-y-0 left-0 pl-6 flex items-center">
<svg class="fill-current pointer-events-none text-indigo-light w-4 h-4 border-transparent border" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
</span>-->
            </div>
            <a href="https://flysystem.thephpleague.com/#" id="menu-toggle" class="block md:hidden h-8 w-8 border p-1 border-transparent text-grey hover:text-grey menu-closed">
                <svg class="menu-closed:shown fill-current h-full w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
                <svg class="menu-closed:hidden fill-current h-full w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
<main class="mx-auto max-w-2xl px-4 py-2">
    <div class="flex flex-grow">
        <nav role="navigation" id="navigation" class="md:w-4/14 w-full lg:relative hidden md:block font-heading pt-2">
            <menu class="pl-0 mt-0">

                <ul class="list-reset mb-6 block pr-6">
                    <li class="block">
                        <a class="leading-loose block w-full rounded text-md text-white bg-indigo pl-2 -ml-2">Introduce</a>
                    </li>
                </ul>

                <div style="position:absolute; margin-top: -20px;">
                <h2 class="tracking-wide mb-0 mt-0 text-xs leading-loose tracking-wide text-indigo-light uppercase">
                    <a href="doc">Get Started</a></h2>

                    <h2 class="tracking-wide mb-0 mt-0 text-xs leading-loose tracking-wide text-indigo-light uppercase">
                        <a href="doc?definition=queryParams">Query Parameters</a></h2>
                </div>

                <br><br>

                <ul class="list-reset mb-6 block pr-6">
                    <li class="block">
                        <a class="leading-loose block w-full rounded text-md text-white bg-indigo pl-2 -ml-2">Endpoints</a>
                    </li>
                </ul>
                <div style="position:absolute; margin-top: -20px;">
                    @foreach(($postman['item'] ?? []) as $key => $value )
                        <h2 class="tracking-wide mb-0 mt-0 text-xs leading-loose tracking-wide text-indigo-light uppercase">
                            <a href="doc?action={{$value['name']}}">{{$value['name']}}</a></h2>
                        <!--<ul class="list-reset mb-6 block pr-6">
                            <li class="block">
                                <a class="leading-loose block w-full rounded text-md text-indigo-darkest" href="https://flysystem.thephpleague.com/v2/docs/what-is-new/">New In V2</a>
                            </li>

                        </ul>-->
                    @endforeach
                </div>

            </menu>
        </nav>

        @if(!is_null($definition))
            <article id="article" role="main" class="max-w-full md:block md:w-10/14">

                @if(!is_null(request()->query->get('list')))

                    @php
                    $whiteList = ['dataRelations','dataFiltering','rangeUsing','withRangeUsing','dataGrouping','hasAndDoesntHave','dataPagination','dataSelect','nestedDataRelations','whatDataRelations'];
                    $list = request()->query->get('list');
                    if(!in_array($list,$whiteList)){
                        exit();
                    }

                    @endphp
                    <h1 class="mb-4">{{ucfirst(str_replace('_',' ',\Illuminate\Support\Str::snake($list)))}} for query parameters.</h1>
                    <h2 id="about-flysystem">Introduce</h2>

                    @if($list=='dataPagination')
                        <p>The metadata you requested will automatically return a set of 20 records. This means; API response data implements the concept of pagination.
                            Therefore, you can select the records you want with the (page) key.</p>

                        <li>baseUrl/products?page=1</li>
                        <br>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Response</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?page=1
</code></pre></div></div>

                        <p>If you want, you can specify the number of datasets returned in the response value, provided that it is less than 20.
                            For example, if you request limit=5 using the (limit) key. Your datasets will return 5 records each.</p>

                        <li>baseUrl/products?limit=5</li>
                        <br>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Response</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?limit=5
</code></pre></div></div>

                    @elseif($list=='withRangeUsing')
                        <p>As mentioned in the (range) usage section, (range) values will automatically be reflected in your relations.
                            If you want a different (range) usage in your relations, use the (witRange) key.</p>

                        <li>baseUrl/products?range=desc&with[items][select]=*&withRange[items]=asc</li>
                        <br>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Response</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?range=desc&with[items][select]=*&withRange[items]=asc
</code></pre></div></div>

                        <p>As seen in the query (range) value (desc) was used. However, (items) relationship was requested.
                            it will not automatically be subject to (desc) (range).</p>

                        <p>With a request parameter such as withRange[items]=asc the relation (items) will be sorted from oldest to newest record.</p>
                    @elseif($list=='rangeUsing')
                        <p>The use of (Range) is a convenience provided by the developer for the client side.
                            (range) values are given to the client side under the (ranges) key at the bottom of the returned response value.</p>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Response</span>
"ranges": {
            "desc": "Sorts your object by last registration value.",
            "asc": "Sorts your object by first registration value.",
            "active": "It filters according to the status=1 and is_deleted=0 value for your object.",
            "sequence": "It sorts by sequence value. This means changeable sorting.",
            "notDeleted": "Filters undeleted data."
        }
</code></pre></div></div>

                        <p>
                            You can request the (range) values here with the range key as a query parameter.
                        </p>

                        <li>baseUrl/products?range=desc</li>
                    <br>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Response</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?range=desc
</code></pre></div></div>

                        <p>For example (range) specified as (desc). It will sort your dataset from the last record to the oldest record.
                        Since the (range) values that are already available to you are in the form of (key) and (value),
                            the (value) value gives a brief information about that range.
                        </p>


                        <p>You can use multiple (range) values separated by commas.</p>

                        <li>baseUrl/products?range=desc,active</li>
                        <br>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Response</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?range=desc,active
</code></pre></div></div>

                        <p>This usage will both sort your data and filter according to the values of status=1 and is_deleted=0.</p>

                        <p><b>Note:</b>The use of (range) will also apply to all relationships of your dataset.
                            For example: when you use range=desc, this (range) value will be used automatically in the relationship with[items]=*.</p>

                        <p><b>If you need to use a custom (range) value in your relationships, see (withRange Using) section.</b></p>
                    @elseif($list=='hasAndDoesntHave')
                        <p>The (Has) parameter is used to check your top data set according to the existence of your relationships. For example: you may want to list only products having items.
                            In this case, it will be sufficient to add the (has) key to your query parameter and write the relation name to its value.
                        </p>

                        <li>baseUrl/products?has=items</li>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?has=items
</code></pre></div></div>

                        <p>In the opposite case; You may want to list products without (item) data.
                            In this case, it will be sufficient to use (doesntHave) instead of (has).
                        </p>

                        <li>baseUrl/products?doesntHave=items</li>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?doesntHave=items
</code></pre></div></div>
                    @elseif($list=='dataFiltering')

                        <p>The (Filter) statement will filter the entire data according to the key specified in the returned response data. This can be thought of as a kind of search.
                        </p>

                        <li>baseUrl/products?filter[product_code]=productCode</li>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?filter[product_code]=productCode
</code></pre></div></div>

                    <p>You can use comma separated values for more than one productCode as per the example above.</p>


                    <p><li>baseUrl/products?filter[product_code]=productCode1,productCode2</li></p>


                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?filter[product_code]=productCode1,productCode2
</code></pre></div></div>

                    <p>Specifying more than one filter means searching by more than one key value.</p>


                        <p><li>baseUrl/products?filter[product_code]=productCode&filter[status]=1</li></p>


                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?filter[product_code]=productCode&filter[status]=1
</code></pre></div></div>

                    <b>Note:</b> Not every field can be filtered. Therefore, the fields allowed by the developer will be filtered. In case of unfiltered, you will get 400 response error.

                    @elseif($list=='dataSelect')

                        <p>The (Select) statement refers to filtering the key values in the returned response data.If the key values in the data will not be used, there is no point in asking them for nothing.
                            That's why you can filter the keys you want in the data using something like the following.
                        </p>

                        <li>baseUrl/products?select=product_name,status</li>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?select=product_name,status
</code></pre></div></div>

                        <li>baseUrl/products?select=* <b>(An asterisk means I want them all.)</b></li>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?select=*
</code></pre></div></div>

                       <p>Tüm ilişkiler ((with) kullanımı) içinde select kuralı aynı şekildedir.</p>

                    <p><b>Note:</b> It will only apply to HTTP GET requests.</p>


                    @elseif($list=='whatDataRelations')

                        <p>Relationships contain extra data to be included in the response data.Relationships are managed with the (with) parameter.
                            Endpoints will definitely return datasets that tell you whether there is a relationship with the returned dataset.Relationships will be returned as  (relations) data in the response.It is bottom of the returned response
                        </p>

                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Response</span>
"relations": {
            "items": {
                "using": "with[items][select] = '*",
                "hasMany": true
            },
            "colors": {
                "using": "with[items][with][colors][select] = '*",
                "hasMany": true
            }
        }
</code></pre></div></div>

                        <p>Each relationship (using) key tells how to use this relationship.
                            The (hasMany) expression defines whether the relationship is multiple or single.
                        </p>

                    <h2>Learn about how relationships are used.</h2>

                        <ul>
                            <li><a href="doc?definition=queryParams&list=dataRelations">Data Relations</a></li>
                            <li><a href="doc?definition=queryParams&list=nestedDataRelations">Nested Data Relations</a></li>
                            <li><a href="doc?definition=queryParams&list=hasAndDoesntHave">Data Relations With (Has) And (DoesntHave)</a></li>
                        </ul>

                @elseif($list=='nestedDataRelations')
                        <p>Relationships contain extra data to be included in the response data.Relationships are managed with the (with) parameter.
                            You will understand relationship management by reading the scenario below.
                        </p>
                        <li class="block">
                            <a class="leading-loose block w-full rounded text-md text-white bg-indigo pl-2 -ml-2">Scenario : For example, we are pulling the products data, and let's get the item data connected to these products. Then,Let's get the colors data depending on this item data.</a>
                        </li>
                        <h2 id="about-flysystem">Request:</h2>
                        <ul>
                            <li>baseUrl/products?with[items][select]=*&with[items][with][colors][select]=*</li>

                            <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/products?with[items][select]=*&with[items][with][colors][select]=*'
</code></pre></div></div>

                        </ul>

                        <h2 id="about-flysystem">Definition:</h2>
                        <p>The rule to note here is that the first set of keys after the with parameter defines the relationship, and every set of keys after this relationship name contains key features.
                            Properties are described with values such as select,with,filter.</p>

                        <p>For better understanding, it can be expressed as follows. Each (with) key represents a data set. <b>with[items]</b> is a data set.
                            The expression <b>with[items][with][colors]</b> means include the colors dataset linked to the items dataset.</p>

                        <p><b>Note</b> : The last rule to note is that every (with) statement must be terminated with select. According to the query value above;
                            <b>with[items][select]=*</b> , <b>with[items][with][colors][select]=*</b>.This means that; All (with) statements must contain the select key.</p>

                        <h2 id="about-flysystem">Response:</h2>
                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">

    "resource": [
        {
            "data": [
                {
                    "product_code": 3025014268,
                    "product_name": "string",
                    "status": 1,
                    "is_deleted": 0,
                    "created_by": 1355856141,
                    "updated_by": 0,
                    "deleted_by": 0,
                    "deleted_at": null,
                    "created_at": "2021-11-11T10:16:59.000000Z",
                    "updated_at": "2021-11-11T10:16:59.000000Z",
                    "items": [
                        {
                            "item_code": 1353785822,
                            "product_code": 3025014268,
                            "item_name": "item 1",
                            "status": 1,
                            "is_deleted": 0,
                            "created_by": 1355856141,
                            "updated_by": 0,
                            "deleted_by": 0,
                            "deleted_at": null,
                            "created_at": "2021-11-11T10:17:19.000000Z",
                            "updated_at": "2021-11-11T10:17:19.000000Z",
                            "colors": [
                                {
                                    "color_code": 2237963010,
                                    "item_code": 1353785822,
                                    "color_name": "color 1",
                                    "status": 1,
                                    "is_deleted": 0,
                                    "created_by": 1355856141,
                                    "updated_by": 0,
                                    "deleted_by": 0,
                                    "deleted_at": null,
                                    "created_at": "2021-11-11T10:17:40.000000Z",
                                    "updated_at": "2021-11-11T10:17:40.000000Z"
                                }
                            ]
                        }
                    ]
                }
            ]
        }
    ]
</code></pre></div></div>


                        Here, asterisk indicates filtering of desired data keys in relation data.If the client wants only the keys she wants for this role data, she can write the keys by separating them with commas instead of *.
                @elseif($list=='dataRelations')
                        <p>relationships contain extra data to be included in the response data.Relationships are managed with the (with) parameter.
                            You will understand relationship management by reading the scenario below.
                        </p>
                        <li class="block">
                            <a class="leading-loose block w-full rounded text-md text-white bg-indigo pl-2 -ml-2">Scenario : When I send a request to the user endpoint, how can I take roles of that user together with the users?</a>
                        </li>
                        <h2 id="about-flysystem">Request:</h2>
                        <ul>
                            <li>baseUrl/users?with[role]=*</li>

                            <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/user?with[role]=*'
</code></pre></div></div>
                            <li>baseUrl/users?with[role][select]=* <b>(Note: Same as first request)</b></li>

                            <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer Token' \
  --header 'Apikey: ApiKey' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'baseUrl/user?with[role][select]=*'
</code></pre></div></div>
                        </ul>

                        <h2 id="about-flysystem">Definition:</h2>
                    <p>Data management can be provided with url parameters in HTTP GET requests.It is managed as an array with data relations (with).
                        Therefore, you can easily use more than one relationship.</p>

                        <h2 id="about-flysystem">Response:</h2>
                        <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">

    "resource": [
        {
            "data": [
                {
                    "user_code": 1355856141,
                    "role_code": 2963074553,
                    "name": "userTest",
                    "email": "test@gmail.com",
                    "email_verified_at": null,
                    "created_at": "2021-08-25T17:57:27.000000Z",
                    "updated_at": "2021-08-25T17:57:27.000000Z",
                    "username": null,
                    "role": [
                        {
                            "role_code": 2963074553,
                            "role_app_code": 0,
                            "role_name": "Administrator",
                            "is_administrator": 1,
                            "roles": [
                                []
                            ],
                            "status": 1,
                            "is_deleted": 0,
                            "created_by": 0,
                            "updated_by": 554218714,
                            "deleted_by": 0,
                            "deleted_at": null,
                            "created_at": null,
                            "updated_at": "2021-09-14T11:26:48.000000Z"
                        }
                    ]
                }
            ]
        }
    ]
}
</code></pre></div></div>


                        Here, asterisk indicates filtering of desired data keys in relation data.If the client wants only the keys she wants for this role data, she can write the keys by separating them with commas instead of *.

                    <br><br>
                        <li>baseUrl/users?with[role][select]=role_name</li>
                        <li>baseUrl/users?with[role][select]=role_name,status</li>

                    @else
                        <p>In HTTP GET requests sent by the client, the response data sent by the API has a flexible structure.
                            This flexible structure will shape the data requested by the client with parameters such as graphQL requests.
                            By reading the instructions shown on the following pages, you will be able to easily get the data you want from the endpoints.
                        </p>
                    @endif



                @else
                <h1 class="mb-4">Query Parameters For Http Get Method.</h1>
                <h2 id="about-flysystem">Introduce</h2>
            <p>In HTTP GET requests sent by the client, the response data sent by the API has a flexible structure.
                This flexible structure will shape the data requested by the client with parameters such as graphQL requests.
                By reading the instructions shown on the following pages, you will be able to easily get the data you want from the endpoints.</p>

                <h2 id="about-flysystem">Pages</h2>
                <ul>
                    <li><a href="doc?definition=queryParams&list=dataSelect">Data Selecting</a></li>
                    <li><a href="doc?definition=queryParams&list=whatDataRelations">What is Data Relations and How to use</a></li>
                    <li><a href="doc?definition=queryParams&list=dataFiltering">Data Filtering</a></li>
                    <li><a href="doc?definition=queryParams&list=rangeUsing">Range Using</a></li>
                    <li><a href="doc?definition=queryParams&list=withRangeUsing">withRange Using</a></li>
                    <li><a href="doc?definition=queryParams&list=dataPagination">Data Pagination</a></li>
                </ul>
                @endif
        @elseif(!is_null($action))

            <article id="article" role="main" class="max-w-full md:block md:w-10/14">

                @if(isset($postman['item'][$action]))

                    @foreach($postman['item'][$action]['item'] as $key => $value)

                    @if(isset($value['item']))


                            <h1 id="about-flysystem">{{$value['name']}}</h1>
                            <p>{{$descriptions[$value['name']] ?? ''}}</p>



                        @foreach($value['item'] as $key => $value)
                            @php
                            $method = $value['request']['method'];
                            $endpoint = str_replace('{{baseUrl}}/','',$value['request']['url']['raw']);
                            $endpointSplit = explode('/',$endpoint);
                            $dir = ucfirst($endpointSplit[0]);
                            $controller = isset($endpointSplit[1]) ? ucfirst($endpointSplit[1]) : $dir;
                            $modelServiceMapFile = base_path('database/columns/modelService.json');
                            $modelServiceJson = json_decode(\Illuminate\Support\Facades\File::get($modelServiceMapFile),true);
                            $model = null;
                            foreach ($modelServiceJson as $modelName => $items){
                                if($items['controller']==$controller && $items['dir']==$dir){
                                    $model = $modelName;
                                }
                            }

                            $entities = \App\Services\Db::entities(\App\Constants::modelNamespace.'\\'.$model);
                            $comments = \App\Services\Db::comments(\App\Constants::modelNamespace.'\\'.$model);
                            $booleans = \App\Services\Db::booleanValues(\App\Constants::modelNamespace.'\\'.$model);
                            $types = \App\Services\Db::types(\App\Constants::modelNamespace.'\\'.$model);
                            $tableCode = getTableCode($model);
                            $configDocumentation = config('documentation');
                            @endphp

                                @if(isset($configDocumentation['exceptMethods'][$endpoint]) && in_array($method,$configDocumentation['exceptMethods'][$endpoint]))
                                    @continue
                                @endif

                            @if(isset($configDocumentation['exceptMethods']['all']) && in_array($method,$configDocumentation['exceptMethods']['all']))
                                @continue
                                @endif

                                <h3 id="commonly-used-adapters">{{$value['request']['method']}}</h3>
                                <ul>
                                    <li><strong>Test Environment Base Url</strong> : {{apiUrl()}}</li>

                                        @if(isset($configDocumentation['productionLinks'][$endpoint]['all']))
                                            @if(isset($configDocumentation['productionLinks'][$endpoint][$method]))
                                            <li><strong>Production Environment Base Url</strong> : {{$configDocumentation['productionLinks'][$endpoint][$method]}}</li>
                                        @else
                                            <li><strong>Production Environment Base Url</strong> : {{$configDocumentation['productionLinks'][$endpoint]['all']}}</li>
                                        @endif

                                        @else
                                            <li><strong>Production Environment Base Url</strong> : {{config('app.productBaseUrl')}}</li>
                                        @endif

                                    <li><strong>Url</strong> : {{$value['request']['url']['raw']}}</li>
                                </ul>

                            @if(isset($value['request']['body']['raw']))
                                @php
                                $raw = json_decode($value['request']['body']['raw'],true);
                                @endphp
                                <table>
                                    <thead>
                                    <tr>
                                        <th style="width:200px;">Body Parameters</th>
                                        <th>Type</th>
                                        <th>Required</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($raw as $field=> $type)
                                        <tr>
                                            <td><code class="language-plaintext highlighter-rouge">{{$field}}</code></td>
                                            @if($field=='is_deleted' || $field=='status')
                                                <td><code class="language-plaintext highlighter-rouge">boolean</code></td>
                                            @else
                                                @if(in_array($field,$booleans,true))
                                                    <td><code class="language-plaintext highlighter-rouge">boolean</code></td>
                                                @else
                                                    <td><code class="language-plaintext highlighter-rouge">{{$types[$field] ?? 'string'}}</code></td>
                                                @endif

                                            @endif

                                            @if($method=='PUT')

                                                @if(getTableCode($model)==$field)
                                                    <td><code class="language-plaintext highlighter-rouge">true</code></td>
                                                @else
                                                    <td><code class="language-plaintext highlighter-rouge">false</code></td>
                                                @endif

                                            @else

                                                @if(isset($entities['required_columns']) && in_array($field,$entities['required_columns'],true))
                                                    <td><code class="language-plaintext highlighter-rouge">true</code></td>
                                                @else
                                                    <td><code class="language-plaintext highlighter-rouge">false</code></td>
                                                @endif

                                                @endif


                                            @if($tableCode==$field)
                                                <td>Column code</td>
                                            @else
                                                <td>{{$comments[$field] ?? ''}}</td>
                                            @endif

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                                @foreach($arrayRules as $endpointName => $items)
                                    @if($endpoint==$endpointName)
                                        @foreach($items as $field => $lists)
                                            @if(isset($raw[$field]))

                                                <h3>{{ucfirst($field)}} Body Parameters:</h3>
                                                    <p><b>The key values to be sent for the {{$field}} parameter are listed below. </b></p>
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th style="width:200px;">Body Parameters</th>
                                                            <th>Type</th>
                                                            <th>Required</th>
                                                            <th>Description</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach($lists as $listKey => $listItems)
                                                            <tr>
                                                                <td><code class="language-plaintext highlighter-rouge">{{$listKey}}</code></td>
                                                                <td><code class="language-plaintext highlighter-rouge">{{$listItems['type'] ?? ''}}</code></td>
                                                                <td><code class="language-plaintext highlighter-rouge">{{$listItems['required'] ?? ''}}</code></td>
                                                                <td><code class="language-plaintext highlighter-rouge">{{$listItems['description'] ?? ''}}</code></td>

                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach

                                @endif
                            @endforeach

                        @else
                        @endif
                        <hr>
                    @endforeach

                @endif


            </article>

            @else
        <article id="article" role="main" class="max-w-full md:block md:w-10/14">
            <h1 class="mb-4">Api Request Guidelines.</h1>
            <h2 id="about-flysystem">Introduce</h2>
            <p>The roadmap to follow in order to reach our API resource is very simple.Simply follow the instructions below.
                The request url map is located on the left menu.</p>

            <h3 id="commonly-used-adapters">Postman:</h3>
            <ul>
                <li><strong><a href="postman/collection" target="_blank">Postman Collection Data</a></strong></li>
                <li><strong><a href="postman/environment" target="_blank">Postman Environment Data</a></strong></li>
            </ul>


            <h2 id="getting-started">Api Authenticate</h2>
            <p>The header keys that must be sent are below.The Authorization value <b>(except for the login service)</b> is required for every request.
                There is a token key in the response returned when the user logs in. </p>
            <table>
                <thead>
                <tr>
                    <th style="width:200px;">Header Key</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>

                @foreach($headers as $header)
                    <tr>
                        <td><code class="language-plaintext highlighter-rouge">{{$header['key']}}</code></td>
                        <td>{{$header['description']}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Default Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer TheTakenToken' \
  --header 'Apikey: theGivenHash' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'http://baseUrl/user'
</code></pre></div></div>


            <h2 id="getting-started">Success Sample Response</h2>

            <p>The following is the standard response capsule.This is a successful response.</p>
            <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Default Any Endpoint Response</span>
{
    "status": true,
    "code": 200,
    "cache": false,
    "isAvailableData": true,
    "client": "admin",
    "env": "local",
    "responseCode": 2837728881,
    "resource": [
        {

        }
    ]
}
</code></pre></div></div>

            <h2 id="getting-started">Meta Keys</h2>

            <table>
                <thead>
                <tr>
                    <th>Key</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">status</code></td>
                    <td>Boolean</td>
                    <td>tells if the http request was successful.</td>
                </tr>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">code</code></td>
                    <td>Integer</td>
                    <td>returns the http code(200,201,400,500)</td>
                </tr>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">resource</code></td>
                    <td>array</td>
                    <td>it is the key where the real data is stored for the client.</td>
                </tr>

                </tbody>
            </table>

            <h2 id="getting-started">Http Codes</h2>

            <table>
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">200</code></td>
                    <td>it shows that the response was successful.</td>
                </tr>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">400</code></td>
                    <td>it shows that the response failed on the client side. the error should be fixed by looking at the ErrorMessage key.</td>
                </tr>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">500</code></td>
                    <td>it shows that the response failed on the server side.the client cannot do anything. The error must be fixed by the service provider.</td>
                </tr>

                </tbody>
            </table>

            <h2 id="getting-started">Error Sample Response</h2>

            <p>As seen in the error response, the status value is returned false.In this case, the errorMessage value will be the key that tells the source of the error for the client.
                <b>Notice that the errorMessage key is not returned in the resource key.</b></p>
            <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Default Any Endpoint Response</span>
{
    "status": false,
    "code": 400,
    "client": "admin",
    "env": "production",
    "responseCode": 2877334582,
    "errorInput": null,
    "exception": "InvalidException",
    "errorMessage": "Field is required",
    "endpoint": "baseUrl/user",
    "rules": [
        null
    ]
}
</code></pre></div></div>


        </article>

        @endif
    </div>
</main>
<footer class="bg-indigo-darkest text-white">
</footer>
<script type="text/javascript" src="{{publicPath()}}/api/apiDoc_files/docs.38c6185a8578394bce5d.js"></script>
<script type="text/javascript" src="{{publicPath()}}/api/apiDoc_files/docsearch.min.js"></script>
<script type="text/javascript"> docsearch({
        apiKey: 'be7daf2d7afded0acb0589a0e304a423',
        indexName: 'filesystem_thephpleague',
        inputSelector: '#global-search',
        debug: false
    });
</script>


</body></html>
