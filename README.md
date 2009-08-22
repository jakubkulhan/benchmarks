# Benchmarks

In each directory is script `run.php`, which starts benchmarks.

Or you can start script `run_all.php` in root directory ([PCNTL](http://php.net/pcntl/) library needed).

All benchmarks:

- test btree reading and writing
- string concatenation vs. implode()
- fnmatch() vs. preg_match() vs. wildcard()
- test metatable reading and writing
- read more data than needed vs. seek to them
