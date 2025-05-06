 KampeerKampioen Website

Een volledige PHP-gebaseerde website voor een reisbureau, met boekingssysteem, klantenbeheer en reisaanbiedingen.

## Inhoudsopgave
- [Vereisten](#vereisten)
- [Installatie](#installatie)
- [Configuratie](#configuratie)
- [Databasestructuur](#databasestructuur)
- [Functionaliteiten](#functionaliteiten)
- [Beheermodule](#beheermodule)
- [Klantenportaal](#klantenportaal)
- [API Integraties](#api-integraties)
- [Beveiliging](#beveiliging)
- [Onderhoud](#onderhoud)
- [Probleemoplossing](#probleemoplossing)
- [Bijdragen](#bijdragen)
- [Licentie](#licentie)

## Vereisten

- PHP 8.0 of hoger
- MySQL 5.7 of hoger / MariaDB 10.2 of hoger
- Apache 2.4 of Nginx
- Composer
- PHP extensies:
  - PDO_MySQL
  - JSON
  - GD
  - Curl
  - Mbstring
  - Zip
  - XML

## Installatie

1. Clone de repository naar je webserver:
   ```bash
   git clone https://github.com/PHPCRUD
   ```

2. Navigeer naar de projectmap:
   ```bash
   cd reisbureau-website
   ```

3. Installeer de benodigde dependencies via Composer:
   ```bash
   composer install
   ```

4. Kopieer het configuratiebestand:
   ```bash
   cp config/config.example.php config/config.php
   ```

5. Maak een nieuwe database aan en importeer het SQL-bestand:
   ```bash
   mysql -u gebruikersnaam -p naam_van_database < database/install.sql
   ```

6. Configureer een virtuele host in je webserver die verwijst naar de `public` map

## Configuratie

Open `config/config.php` en pas de volgende instellingen aan:

### Database configuratie
```php
// Database instellingen
define('DB_HOST', 'localhost');
define('DB_NAME', 'reisbureau_db');
define('DB_USER', 'gebruikersnaam');
define('DB_PASS', 'wachtwoord');
```

### Website instellingen
```php
// Website instellingen
define('SITE_URL', 'https://uwreisbureau.nl');
define('SITE_NAME', 'Uw Reisbureau');
define('ADMIN_EMAIL', 'info@uwreisbureau.nl');
```

### API sleutels
```php
// API sleutels voor externe services
define('PAYMENT_API_KEY', 'uw_mollie_of_stripe_api_key');
define('MAPS_API_KEY', 'uw_google_maps_api_key');
define('WEATHER_API_KEY', 'uw_weather_api_key');
```

## Databasestructuur

De belangrijkste tabellen zijn:

- `users` - Gebruikers en medewerkers
- `customers` - Klantgegevens
- `destinations` - Reisbestemmingen
- `hotels` - Accommodaties
- `packages` - Reispakketten
- `bookings` - Boekingen
- `payments` - Betalingen
- `reviews` - Beoordelingen

De volledige database schema documentatie is te vinden in `database/schema.md`.

## Functionaliteiten

### Voorpagina
- Uitgelichte reisaanbiedingen carousel
- Zoekfunctie voor vakanties
- Laatste nieuws en blogartikelen
- Nieuwsbrief inschrijfformulier

### Reisaanbod
- Gedetailleerde pagina's per bestemming
- Filterfuncties op type reis, prijs, sterrenclassificatie
- Beschikbaarheidscontrole
- Fotogalerij per bestemming

### Boekingsproces
- Stapsgewijze boekingsprocedure
- Passagiersgegevens formulier
- Betaalmethode selectie
- Boekingsbevestiging en facturering

## Beheermodule

De beheermodule is toegankelijk via `/admin` en biedt:

### Dashboard
- Overzicht van recente boekingen
- Statistieken en grafieken
- Takenlijst

### Content management
- Bestemmingen en hotels beheren
- Reispakketten samenstellen
- Prijzen en beschikbaarheid bijwerken
- Blog en nieuwsberichten publiceren

### Klantenbeheer
- Klantendatabase
- Boekingsgeschiedenis inzien
- Facturen genereren
- Communicatie met klanten

### Rapportages
- Verkoopcijfers
- Populaire bestemmingen
- Seizoensanalyse
- Exportfuncties naar Excel/CSV

## Klantenportaal

Klanten kunnen inloggen op `/mijn-account` en hebben toegang tot:

- Eigen profiel beheren
- Boekingsgeschiedenis inzien
- Facturen downloaden
- Reisdocumenten opvragen
- Beoordelingen schrijven
- Nieuwsbriefvoorkeuren aanpassen

## API Integraties

De website is geïntegreerd met verschillende externe services:

- Betaalproviders (Mollie, Stripe)
- Google Maps voor locatie weergave
- FlightAPI voor vluchttijden
- WeatherAPI voor weer op locatie
- Mailchimp voor nieuwsbrieven

Details over het gebruik van deze integraties zijn te vinden in `docs/api-integration.md`.

## Beveiliging

Deze applicatie implementeert diverse beveiligingsmaatregelen:

- Wachtwoord hashing met BCRYPT
- CSRF bescherming voor alle formulieren
- XSS preventie
- SQL Injection bescherming via PDO
- Rate limiting op login pogingen
- Sessie beveiliging

## Onderhoud

### Backup procedure
Dagelijkse automatische backups worden gegenereerd in `/backup`.
Gebruik het volgende commando voor een handmatige backup:

```bash
php scripts/backup.php
```

### Updates
Updates kunnen worden uitgevoerd met:

```bash
git pull
composer update
php scripts/migrate.php
```

## Probleemoplossing

Veelvoorkomende problemen en oplossingen:

### Databaseverbindingsproblemen
Controleer de database-instellingen in `config/config.php` en verzeker dat de MySQL-service actief is.

### Uploadproblemen
Controleer de bestandsrechten op de `uploads` map en verhoog indien nodig de PHP upload_max_filesize.

### Logbestanden
Foutlogboeken zijn te vinden in:
- `logs/application.log` - Applicatie specifieke fouten
- `logs/error.log` - PHP fouten

## Bijdragen

Bijdragen aan het project zijn welkom! Volg deze stappen:

1. Fork de repository
2. Maak een feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit je wijzigingen (`git commit -m 'Add AmazingFeature'`)
4. Push naar de branch (`git push origin feature/AmazingFeature`)
5. Open een Pull Request

## Licentie

Dit project is gelicenseerd onder de MIT-licentie - zie het `LICENSE` bestand voor details.

---

© 2025 kampeerKampioen - Alle rechten voorbehouden.
