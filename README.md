# ISO-3166-2

ISO 3166-2 https://en.wikipedia.org/wiki/ISO_3166-2

# WIP

This project is currently work in progress!  
Feel free to contribute by add translates and co. for the ISO-3166-2.

# Code Snippet to get the ISO from Wiki in Dev TOols

``` js
var obj = {};
$('.jquery-tablesorter tbody').first().find('td:first-child').each(function() {
     obj[$.trim($(this).text())] = $.trim($(this).next().text());
});

console.log(JSON.stringify(obj, null, 4));
```
