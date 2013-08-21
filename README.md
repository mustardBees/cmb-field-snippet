# CMB Field Type: Snippet

## Description

Display code snippets such as shortcodes for easy copy/paste. A field type for [Custom Metaboxes and Fields for WordPress](https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress).

## Usage

`pw_snippet` - Display a code snippet such as a shortcode for easy copy/paste. Example:

```php
array(
	'name' => 'Shortcode',
	'desc' => 'Copy and paste shortcode into your content where required',
	'snippet' => '[example shortcode="true"]', // The snippet to display
	'id'   => $prefix . 'snippet',
	'type' => 'pw_snippet',
),
```

## Screenshot

![Image](screenshot-1.png?raw=true)