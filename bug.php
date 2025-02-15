This code snippet demonstrates a potential issue in PHP related to unexpected behavior when using the ternary operator with an assignment within the true/false parts.  Specifically, it highlights that the assignment happens regardless of the condition's outcome, which may lead to unexpected results if not carefully considered.
```php
$var = 10;
$result = (true) ? $var = 20 : $var = 30;
echo "Result: " . $result . ", Var: " . $var;
```
This is because the assignment is processed before the conditional check and the value of the ternary operation is also an assignment, hence the value of `$var` will always end up assigned with either 20 or 30 and the result variable will always show 20 or 30 respectively.