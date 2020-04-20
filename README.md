Lumen Form Request
==========
![php-badge](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg)
[![packagist-badge](https://img.shields.io/packagist/v/shiftechafrica/lumen-form-request.svg)](https://packagist.org/packages/shiftechafrica/lumen-form-request)
[![Total Downloads](https://poser.pugx.org/shiftechafrica/lumen-form-request/downloads)](https://packagist.org/packages/shiftechafrica/lumen-form-request)

## Description

A package that helps developer to segregate the validation logic from controller to a separate dedicated class. Lumen doesn't have any `FormRequest` class like Laravel. This will let you do that.


### Installation

```
composer require shiftechafrica/lumen-form-request
```

* Add the service provider in `bootstrap/app.php`

```
$app->register(ShiftechAfrica\FormRequestServiceProvider::class);
```

Next step is create your FormRequest and extends from `ShiftechAfrica\FormRequest`

### Example

```php
<?php

namespace App\Http\Requests;

use ShiftechAfrica\LumenFormRequest;

class StoreDataRequest extends LumenFormRequest
{
	     /**
         * @return bool
         * @author the request
         */
        public function authorize()
        {
            return true;
        }
    
        /**
         * set the request
         * rules
         * @return string[][]
         */
        protected function rules()
        {
            return [
                'county_id' => ['required', 'string', 'max:255'],
            ];
        }
    
        /**
         * make custom massages
         * @return string[]
         */
        public function messages()
        {
            return [
                'county_id.required' => 'County is required!',
            ];
        }
}
```
