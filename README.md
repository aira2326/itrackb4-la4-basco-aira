# Movie Project

## Q1. Featured Route and Detail Route

I placed the featured route before the detail route. This is because `/movies/{id}` can also match `featured` as an ID. If I put the detail route first, the featured route may not work.

Example:

```php
Route::get('/movies/featured', [MovieController::class, 'featured'])
    ->name('movies.featured');

Route::get('/movies/{id}', [MovieController::class, 'show'])
    ->name('movies.show');
````

## Q2. Non-existing ID

When a visitor enters an ID that does not exist, the system shows a 404 page instead of a PHP error. I used `isset()` to check if the ID exists and `abort(404)` if it does not.

Example:

```php
if (!isset($movies[$id])) {
    abort(404);
}
```

## Q3. Route Names

I used route names for my links instead of typing the URLs directly. This makes the links easier to maintain because if I change the URL of a route, I do not need to edit every Blade file.

Example:

```php
<a href="{{ route('movies.index') }}">
    ← Back to Movies
</a>

