# Barcelona látványosságai
## Telepítés

Először telepítjük a dependencyket
```bash
npm install
```

Majd elindítjuk a Tailwind compile-t és a configba megadott fájlokat watcholjuk, hogy változtak-e
```bash
npx tailwindcss -i .\public\css\style.css -o .\public\css\output.css --watch
```