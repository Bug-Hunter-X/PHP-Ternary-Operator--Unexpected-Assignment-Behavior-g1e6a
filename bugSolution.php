A more robust and predictable approach involves using explicit `if-else` statements:
```php
$var = 10;
if (true) {
  $var = 20;
  $result = $var;
} else {
  $var = 30;
  $result = $var;
}
echo "Result: " . $result . ", Var: " . $var;
```
This version provides clear separation and eliminates the possibility of unexpected side effects.

Alternatively, if you must use the ternary operator, carefully separate the assignment from the ternary's conditional evaluation:
```php
$var = 10;
$result = (true) ? 20 : 30;
$var = $result; //Assignment happens after ternary evaluation.
echo "Result: " . $result . ", Var: " . $var;
```
This makes the assignment explicit and clearly separated from the ternary operation, avoiding the pitfalls of implicit assignments within the ternary operator.