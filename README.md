# multiKeySort
Sort multi-dimensional arrays by custom keys.

Usage:
```php
$list = [
    ['a' => 1, 'b' => 2], 
    ['a' => 1, 'b' => 3]
];
$rules = [
    ['a', SORT_ASC, SORT_STRING],
    ['b', SORT_DESC, SORT_STRING]
];
multiKeySort($list, $rules);

print_r($list);
```

Output:
```
Array                  
(                      
    [0] => Array       
        (              
            [a] => 1   
            [b] => 3   
        )              
                       
    [1] => Array       
        (              
            [a] => 1   
            [b] => 2   
        )              
                       
)                      
```