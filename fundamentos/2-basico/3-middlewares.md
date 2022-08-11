# Middlewares

- Veamos en este post cómo crear e implementar un middleware. La función principal es proporcionar una fácil y
  conveniente capa para filtrar las solicitudes HTTP
- Laravel ya tiene varios middlwares por ejemplo hay un middlware que maneja la autenticacion.

```bash
php artisan make:middleware Subscribed
# Verificar la edad
php artisan make:middleware VerifyAge
```

- Ruta Middleware en laravel `app\Http\Middleware\`
- Codigo Middleware VerifyAge

```injectablephp
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyAge {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next) {
        if ($request->get('age') < 18) {
            return redirect('web.home.guidelines');
        }
        return $next($request);
    }
}
```

- Registrar el middleware

```injectablephp
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    //...
    protected $middleware = [];

    //...
    protected $middlewareGroups = [];

    //...
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'subscribed' => \App\Http\Middleware\Subscribed::class,
        'verify-age' => \App\Http\Middleware\VerifyAge::class,
    ];

    //...
    protected $middlewarePriority = [];
}
```

- Usar el middleware: Los middleware se puede añadir en la rutas y en el constructor de la clase

```injectablephp
Route::view('welcome', 'web.home.index', [
    'login' => 'gnujavasergio',
    'name' => 'Sergio Ochoa Martinez',
    'email' => 'gnu.java.sergio@gmail.com',
    'age' => 17
])->name('welcome')->middleware('verify-age');
```