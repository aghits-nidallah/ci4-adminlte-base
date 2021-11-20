# Installation
1. Clone this repository.
2. Run `composer install`.
3. Set up your environment variables. (tip: copy env file to .env)

## Usage
This project doesn't have any special features such authentication or anything. I just provide the Codeigniter 4 framework and Admin LTE 3. To access the page, access the `/admin` route.

## Modiyfing Sidebar
To modify the sidebar list, access the `app/Config/Sidebar`, then edit the menus under the `__construct()` method. You can add the menu using this template:
```php
public function __construct()
{
    $this->menus = [
        [
            'icon' => 'fa-tachometer-alt',
            'title' => 'Dashboard',
            'link' => site_url('admin'),
        ],

        // TEMPLATE STARTS HERE
        [
            'icon' => 'any FontAwesome icons',
            'title' => 'The title you desire',
            'link' => site_url('the-route-you-want-to-access)',
        ],
        // TEMPLATE ENDS HERE
    ];
}
```

## License
This project is licensed under the MIT license. The CI4 and AdminLTE3 are also licensed under the MIT license.

### Contributions
Please fork this repository and give a pull request. Any help, code or documentation is appreciated.