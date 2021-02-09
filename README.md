# Laravel share links

Get social share links for 10+ platforms easily.

## Example

Here is an example of how to use the package:

```php
use JeroenvanRensen\ShareLinks\Share;

Share::page('Example', 'http://example.org/')->facebook();
Share::page('Example', 'http://example.org/')->twitter();
Share::page('Example', 'http://example.org/')->email();
```

## Installation

Run this command to install the package:

```
composer require jeroenvanrensen/laravel-share-links
```

And that's it! Now you can use the package.

## Usage

```php
use JeroenvanRensen\ShareLinks\Share;

Share::page('Example', 'http://example.org/')->facebook();
Share::page('Example', 'http://example.org/')->twitter();
Share::page('Example', 'http://example.org/')->email();
Share::page('Example', 'http://example.org/')->sms();
Share::page('Example', 'http://example.org/')->linkedin();
Share::page('Example', 'http://example.org/')->reddit();
Share::page('Example', 'http://example.org/')->whatsapp();
Share::page('Example', 'http://example.org/')->telegram();
Share::page('Example', 'http://example.org/')->tumblr();
Share::page('Example', 'http://example.org/')->pinterest('https://via.placeholder.com/400');
```

**Note: For the Pinterest link you have to add an image.**
