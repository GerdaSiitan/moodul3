## Rawa-Tuulik Instalitatsioon

Laravel + Backpack + Blade veebiprojekt.  
Tehtud Visual Studio Code'is ja jooksutatud Git Bashis. Adminpaneel töötab Backpacki kaudu ja lehed on tehtud Blade'iga. Andmebaasi pole kasutusel – kogu sisu liigub läbi Laravel + Blade + Backpacki.

---

## ⚙️ Kasutatud tehnoloogiad

- **PHP 8+** – backend
- **Laravel 10** – routing, auth jms
- **Blade** – lehe vaated
- **Backpack for Laravel** – adminpaneel
- **VSCode** – kirjutamiseks
- **Git Bash** – käsuread ja git stuff

---

## 📦 Installimine

Klooni repo ja installi kõik vajalikud paketid:

bash
git clone https://github.com/GerdaSiitan/moodul3.git
cd moodul3
composer install

## 🛠 Käima panek

php artisan serve
-----
Ava brauseris:
http://127.0.0.1:8000

## 🎒 Adminpaneel

http://localhost:8000/admin

Kui Backpack pole installitud, siis:
composer require backpack/crud

php artisan backpack:install

Peale seda saad kohe sisse logida adminpaneeli.
http://localhost:8000/admin

## ✏️ Sisu muutmine
Lehed nagu “Kontakt”, “Meist”, “Annetused” jne asuvad Blade'is:
- ** resources/views/  ** 
Lihtsalt ava sobiv .blade.php fail, muuda sisu ja salvesta.

## 🖼 Toodete lisamine (adminpaneel)
- Mine /admin
- Kliki Products
- Vajuta Add Product
------
Täida väljad:
- Nimi
- Kirjeldus
- Hind
- Värv
- Suurus
- Pilt (.jpg/.png, max 2MB)

Salvesta – toode ilmub poe lehele automaatselt

## 📁 Failistruktuur:

Vaated: resources/views/
-----
Laetud pildid: storage/app/public/


