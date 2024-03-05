<p float="left">
  <img src="readme/image.png" alt="drawing" height="100"/>
  <img src="readme/image-3.png" alt="drawing" height="100"/>
  <img src="readme/image-4.png" alt="drawing" height="100"/>
</p>

# Example PHP project with Vite and Vue

## Quick start
Feel free to use any development server you like.
I'm using [DDEV](https://ddev.com/) for development in PHP.

When you have server ready, then just install composer dependencies:
```
composer install
```


## Development
To start edit copy .env.example to .env and change:
```
ENVIRONMENT="dev"
VITE_DEV_PORT="5173"
```

Then install Node dependencies:
```
npm run i
```

And start Vite server
```
npm run dev
```

When you are ready with changes, run:
```
npm run build
```
