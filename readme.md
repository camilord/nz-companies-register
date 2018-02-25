NZ Companies Register API
=========================

This helper package/component is useful when you have a form needs with real and valid NZ company names. I created this because MBIE don't have a working API yet. So this component will use their web search function and scrape the search result data into reusable output, ARRAY. Hope this will save your time and effort writing the same thing. :)

Usage:

Add this package to your project's composer.json...

```
{
    "require": {
        "camilord/nz-companies-register": "1.*"
    }
}
```

Usage:

```
use camilord\NZCompaniesRegister\NZCompaniesRegister;

$obj = new NZCompaniesRegister();
$result = $obj->search('bluehorn');

```

Full sample codes, see sample.php

Sample Output:

```
Array
(
    [0] => Array
        (
            [name] => BLUE HORN LIMITED
            [registry_notes] => Array
                (
                )

            [registration_number] => 1947993
            [nzbn] => 9429033362823
            [status] => registered
        )

    [1] => Array
        (
            [name] => BLUE HORNET LIMITED
            [registry_notes] => Array
                (
                )

            [registration_number] => 1756390
            [nzbn] => 9429034351635 (removed)
            [status] => registered
        )

)
```
