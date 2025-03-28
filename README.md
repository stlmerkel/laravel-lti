# Laravel LTI Package

A Laravel wrapper for the [LTI-PHP](https://github.com/celtic-project/LTI-PHP) library, enabling your Laravel application to act as an IMS Learning Tools Interoperability (LTI) tool provider.

This package preserves the original core functionality and adds Laravel-native integration via service providers, dependency injection, and route/middleware support.

---

## 🚀 Features

- Drop-in LTI Tool Provider based on `celtic-project/LTI-PHP`
- Laravel service provider for seamless bootstrapping
- Wrapper for dependency injection and request handling
- Maintains compatibility with upstream LTI-PHP changes

---
## License

This package is distributed under a dual license:

- The Laravel integration code is licensed under the [MIT License](LICENSE).
- The original LTI-PHP core (located in `src/Core/`) is licensed under the [LGPL-3.0 License](src/Core/LICENSE), per the original [celtic-project/LTI-PHP](https://github.com/celtic-project/LTI-PHP) repository.

---
## Database Setup

This package includes sample SQL schemas from the original `LTI-PHP` package for:

- MySQL
- PostgreSQL
- SQL Server
- Oracle
- SQLite

See the [`sql/`](sql/) folder for details.

---
## Usage

```php
use Stlmerkel\LaravelLTI\LtiWrapper;

public function launch(LtiWrapper $lti)
{
    $lti->handleRequest();
}
```

## Install (Local Dev)

1. Add to Laravel app:

```json
"repositories": [
  {
    "type": "path",
    "url": "packages/stlmerkel/laravel-lti"
  }
]
```

2. Require:

```bash
composer require stlmerkel/laravel-lti
```

3. Publish config, routes, etc. as needed.