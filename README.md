LA3 - Book Routes and Filtering

## 1. What does the detail route do?

The detail route uses a book ID to find one specific book. It shows all the information about that book on a separate page. If the ID does not exist, the system shows a 404 error.

## 2. Why must the featured and filter routes come before `/books/{id}`?

Laravel checks the routes from top to bottom. The `/books/{id}` route is a general route, so it can also match words like `featured` or `filter`. Putting the more specific routes first prevents them from being treated as an ID.

## 3. Why use named routes and the `route()` helper?

Named routes make the links easier to manage because the views do not need to use hardcoded URLs. If the URL of a route changes, the links can still work because they use the route name.

