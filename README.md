### Installation via composer.json
create a composer.json and then execute "composer install"

```json
{
	"require": {
		"illuminate/view": "^5.4",
		"illuminate/events": "^5.4",
		"illuminate/database": "^5.4",
		"philo/laravel-blade": "^3.1"
	},
	"autoload": {
		"psr-4": {
			"App\\Core\\":"application/core"
		},
		"classmap": [
			"application/models"
		 ]
	}
}
```

### Usage Eloquent (example)

<b>- DATABASE TEST (MYSQL)</b>

```sql
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'test_01', 'test', 'test_01@test.com'),
(2, 'test_02', 'test123', 'test_02@test.com'),
(3, 'test_03', 'test', 'test_03@test.com'),
(4, 'test_04', 'test123', 'test_04@test.com');
```

<b>- Model</b> (local: application/models)

```php
<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = "users";
}
```

<b>- Controller</b> (local: application/controllers)

```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use App\Core\BladeController;

class Home extends BladeController {

	public function __construct() {        
		parent::__construct();
	}

	public function index()
	{
		$users = User::all();

		$this->view('home', compact('users'));
	}

}
```

<b>- View</b> (local: application/views)

```html
    @foreach ($users as $value)
        <li>Username: {{ $value->username }}</li>
        <li>Email: {{ $value->email }}</li><br>
    @endforeach
```

<b>- Blade Laravel (Documentation)</b>

https://laravel.com/docs/5.8/blade