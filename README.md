## Version Codeigniter 3.1.~

### Usage Eloquent (example)

<b>- DATABASE TEST (MYSQL) (NAME: users)</b>

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

<b>- Model</b> (local: application/models - name: User.php)

```php
<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = "users";
}
```

<b>- Controller</b> (local: application/controllers - name: Home.php)

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

<b>- View</b> (local: application/views - name: home.blade.php)

```html
    @foreach ($users as $value)
        <li>Username: {{ $value->username }}</li>
        <li>Email: {{ $value->email }}</li><br>
    @endforeach
```

<b>- Blade Laravel (Documentation)</b>

https://laravel.com/docs/5.8/blade
