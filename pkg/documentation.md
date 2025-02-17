# Datetime (flatpickr)

MIT license

[https://flatpickr.js.org/]

### HTML:

```

<input type="text" class="waxed-datetime"
data-name="payload1"
/>


```

### PHP:

```

$this->waxed->display([
'payload1' =>
  [
    'value' => date('Y-m-d H:i'),
    'open' => true
  ],

], 'template');


```


