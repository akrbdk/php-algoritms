# PHP Algoritms Exercises

A number of exercises to practice algoritms questions in PHP.

## Installation using docker

1. Clone the project using git
2. Copy `.env.example` into `.env` (Don't need to change anything for local development)
3. Navigate to the project root directory and run `docker-compose up -d`
4. Install dependencies - `docker-compose exec app composer install`
5. Open in browser http://127.0.0.1:8080


## Build image commands

```bash
docker build -t php-algoritms ./docker
docker image ls
docker run -d --rm -p 8080:80 --name php-algoritms -v "$PWD":/var/www/ php-algoritms
docker ps

docker exec -it php-algoritms bash
composer install
OR
docker exec php-algoritms composer install

docker stop php-algoritms
```


## Usage

1. Run ./vendor/bin/phpunit or ./vendor/bin/phpunit-watcher watch to start tests.


## Exercises

- [Anagram](./exercises/Anagram/Anagram.php)
- [ArrayGroup](./exercises/ArrayGroup/ArrayGroup.php)
- [BinarySearchTree](./exercises/BinarySearchTree/BinarySearchTree.php)
- [Capitalize](./exercises/Capitalize/Capitalize.php)
- [Events](./exercises/Events/Events.php)
- [Fibonacci](./exercises/Fibonacci/Fibonacci.php)
- [FizzBuzz](./exercises/FizzBuzz/FizzBuzz.php)
- [Ladder](./exercises/Ladder/Ladder.php)
- [LinkedList](./exercises/LinkedList/LinkedList.php)
- [MaxChar](./exercises/MaxChar/MaxChar.php)
- [MaxHeap](./exercises/MaxHeap/MaxHeap.php)
- [MaxSubArraySum](./exercises/MaxSubArraySum/MaxSubArraySum.php)
- [Numbers](./exercises/Numbers/Numbers.php)
- [Palindrome](./exercises/Palindrome/Palindrome.php)
- [Pyramid](./exercises/Pyramid/Pyramid.php)
- [Queue](./exercises/Queue/Queue.php)
- [QueueFromStacks](./exercises/QueueFromStacks/QueueFromStacks.php)
- [Reverse](./exercises/Reverse/Reverse.php)
- [Search](./exercises/Search/Search.php)
- [Sort](./exercises/Sort/Sort.php)
- [Spiral](./exercises/Spiral/Spiral.php)
- [Stack](./exercises/Stack/Stack.php)
- [Tree](./exercises/Tree/Tree.php)
- [Vowels](./exercises/Vowels/Vowels.php)