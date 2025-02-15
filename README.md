# PHP Ternary Operator: Unexpected Assignment Behavior

This repository demonstrates an uncommon bug in PHP involving the ternary operator and assignments.  The issue arises from the order of operations within the ternary expression; assignments within the true/false branches always execute, regardless of the condition's outcome. This can result in unintended side effects if not carefully considered.

## Problem
The core problem lies in the way PHP evaluates expressions with assignments within a ternary operator.  Standard logic might suggest that the assignment would only occur if the condition is met. However, PHP evaluates the assignments regardless of the conditional, altering the variable's state unconditionally.

## Solution
To avoid this unexpected behavior, consider restructuring your code. Explicit `if-else` statements provide clarity and prevent implicit assignment side effects.  Using parentheses judiciously to dictate the precedence of assignments is also a crucial part of solving this problem. Avoid assignment as the result of a ternary operator, where possible. 