# ISO 3166-2

Complete Collection of json files for the country subdivision from ISO 3166-2.

ISO 3166-2 https://en.wikipedia.org/wiki/ISO_3166-2

# WIP

This project is currently work in progress!  
Feel free to contribute by add translates and co. from the ISO-3166-2.

|                    | Progress                                 |
|--------------------|------------------------------------------|
| EN                 | ![100%](http://progressed.io/bar/100)    |
| Specific Languages | ![1%](http://progressed.io/bar/1)        |

**Code Snippet to get the ISO from Wiki in Dev Tools**

``` js
var obj = {};
$('.jquery-tablesorter tbody').eq(0).find('td:first-child').each(function() {
     obj[$.trim($(this).text())] = $.trim($(this).next().text());
});

console.log(JSON.stringify(obj, null, 4));
```
