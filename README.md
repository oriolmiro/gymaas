## Gym Bro As A Service
Enllaç a l'[enunciat](https://bolder-equipment-678.notion.site/Gym-Bro-as-a-service-fe4381b1a4ca476b9595e67e9d80e2dd?pvs=4 "Gym Bro As A Service").


# API de Ejercicios

Esta API proporciona acceso a una lista de ejercicios y partes del cuerpo asociadas a ellos. Utiliza Laravel como framework de backend y se comunica a través del protocolo HTTP.

## Consultar la lista de partes del cuerpo

Para obtener una lista de todas las partes del cuerpo disponibles, puedes realizar una solicitud GET a la siguiente URL:

```
GET /exercises/bodyPartList
```

Esta solicitud devolverá una lista en formato JSON de todas las partes del cuerpo disponibles, junto con sus identificadores y otros detalles pertinentes.

### Ejemplo de solicitud

```bash
curl -X GET http://tu-servidor.com/exercises/bodyPartList
```

## Consultar ejercicios por parte del cuerpo

Para obtener una lista de ejercicios asociados a una parte del cuerpo específica, puedes realizar una solicitud POST a la siguiente URL, proporcionando el nombre de la parte del cuerpo como un parámetro de la URL:

```
POST /exercises/bodyPart/{bodyPart}
```

Reemplaza `{bodyPart}` con el nombre de la parte del cuerpo deseada.

### Ejemplo de solicitud

```bash
curl -X POST http://tu-servidor.com/exercises/bodyPart/abdominals
```

Esta solicitud devolverá una lista en formato JSON de todos los ejercicios asociados a la parte del cuerpo especificada.

## Estructura de la respuesta

Tanto para la lista de partes del cuerpo como para la lista de ejercicios, la respuesta estará en formato JSON y contendrá la información relevante sobre cada elemento devuelto, como su nombre, identificador y otros detalles.

- **Jose:** 
    - GET BODY MASS INDEX 
    - GET IDEAL BODY WEIGHT

- **Xavi:** 
    - GET BASAL METABOLIC RATE 
    - GET A BODY SHAPE INDEX

- **Edwin:** 
    - GET BODY FAT PERCENTAGE 
    - GET TOTAL DAILY ENERGY EXPENDITURE

## Translation

### Description
This project can translate stored exercises in languages defined in `Languages` table.

Using scheduled tasks, the DB will be updated with new languages and translations.

### Scheduled tasks
- **app:exercise-add-pending-languages-command [Each minute]**: Add new/pending languages to `Exercises` table.

- **app:exercise-init-translations-command [Each five minutes]**: Initialize translation process of `Exercises` table. Five exercises are translated each 5 minutes.

### Available translators
- **[Google Translator API](https://cloud.google.com/translate/docs/basic/translating-text?hl=es-419)**
- **[DeepL Translator API](https://www.deepl.com/docs-api)**

### Libraries used
- **[GitHub - Stichoza/google-translate-php](https://github.com/Stichoza/google-translate-php)**
- **[GitHub - DeepLcom/deepl-php](https://github.com/DeepLcom/deepl-php)**

### First steps

#### _1. Add DeepL API key_
When you make a copy of file `.env.example` named `.env` you will see an environment variable called `APIDEEPL_KEY`, put there your DeepL API key to use DeepL translator.

```
APIDEEPL_KEY=YOUR_DEEPL_API_KEY
```

> **IMPORTANT: Key is needed, if you don't set the key DeepL library will throw an error!**

> **More info:** [https://support.deepl.com/hc/es/articles/360020695820-Clave-de-autenticaci%C3%B3n](https://support.deepl.com/hc/es/articles/360020695820-Clave-de-autenticaci%C3%B3n)

#### _2. Run migrations and seeders_
```bash
php artisan migrate
php artisan migrate:refresh --seed
```

Or grab SQL code from file `/gymass.sql` and execute it in your DB.

#### _3. Run scheduled tasks_
Once you have in your DB `Exercises` and `Languages` tables created and seeded, execute the scheduled tasks to add referenced languages and translations to exercises.

```bash
php artisan schedule:work
```