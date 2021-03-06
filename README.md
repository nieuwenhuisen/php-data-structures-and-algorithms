# PHP Data Structures and Algorithms

Some example and test code for PHP data structures and Algorithms.

---

### Data Structures

#### Linked List's
- Basic linked list
- Doubly linked list
- Circular linked list
- Priority linked list

#### Queue's
- Array queue
- Linked list queue
- Priority linked list queue

#### Stack's
- Array stack

#### Tree's
- Basic Tree
- Binary Tree

#### Heap's
- Min heap

**Example usage:**
- Expression checker

---

### Algorithms
#### Sorting
- Bubble Sort
- Bucket Sort
- Insertion Sort
- Merge Sort
- Quick Sort
- Selection Sort
- Topological sorting

#### Searching
- Linear Search
- Binary Search
- Exponential Search
- Interpolation Search
- Graph Depth First Search

#### Recursion
**Example usage:**
- Factorial
- Fibonacci
- Greatest common division

#### Graph
- Kruskal's minimum spanning tree
- Prim's minimum spanning tree
- Bellman Ford shortest path
- Dijkstra's shortest path
- Floyd Warshall's shortest path

---
 

### Code checks commands
```
$ ./vendor/bin/phpunit
$ ./vendor/bin/php-cs-fixer fix --diff --dry-run -v
$ ./vendor/bin/phpmd src text phpmd.xml
$ ./vendor/bin/phpstan analyze -c phpstan.neon src tests --level=max 
```
