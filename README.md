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
=======
Jose - GET BODY MASS INDEX / GET IDEAL BODY WEIGHT
Xavi - GET BASAL METABOLIC RATE - GET A BODY SHAPE INDEX
Edwin - GET BODY FAT PERCENTAGE - GET TOTAL DAILY ENERGY EXPENDITURE

