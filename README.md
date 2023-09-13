````markdown
# Laracasts Course - Session 2

GitHub Repository: [Dynamically Web Application](https://github.com/victor90braz/dinamically-web-application)

## Laravel Setup with Laragon

### Installation Steps:

1. **Download Laragon:**
   Download Laragon from [laragon.org](https://laragon.org/download/index.html).

2. **Choose the Desired Version:**
   Select the version that suits your needs:
   - [Download Laragon - Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)

### Using PHP in the Terminal (CMD):

- **Check Available PHP Commands:**
  ```sh
  php -h
  ```
````

- **Start a Local PHP Server:**
  ```sh
  php -S localhost:8888
  ```

## Database Query Example:

```php
$dataBase = new DataBase();
$posts = $dataBase->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
echo json_encode($posts, JSON_PRETTY_PRINT);
echo "</pre>";
```
