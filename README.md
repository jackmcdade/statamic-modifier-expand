# Expand modifier for Statamic

Expand will transform a named YAML list into a standard list/array so you can loop through the keys and values using `new_key` and `new_value`.
## Installation

1. Download the zip file (or clone via git)
2. Drop the `_add-ons/expand` folder in your own `_add-ons` directory.
3. Use it and stuff.

## Usage

Take the following data:

```
---
social:
  facebook: https://www.facebook.com/statamic
  twitter: https://twitter/statamic
  vimeo: https://vimeo.com/statamic
---
```

You can loop through this data like so:

```
<ul>
{{ social|expand }}
  <li><a href=“{{ new_value }}”>{{ new_key }}</a></li>
{{ /social|expand }}
</ul>
```