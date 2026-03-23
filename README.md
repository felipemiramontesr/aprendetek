# Tema Aprendetek

Tema personalizado y avanzado para Moodle 4.x, heredado de Boost.

## Arquitectura y Colaboración
* Clona este repositorio asegurándote de colocarlo en el directorio `./theme/aprendetek` de tu instalación original de Moodle.
* Instala las dependencias y utiliza los flujos de CI/CD para validar la calidad del código.

## SDLC (CI/CD)
El proyecto incluye flujos de trabajo profesionales listos para producción:
- **PHPCS:** Para validación del estricto estándar de código de Moodle.
- **PHPUnit:** Para validación unitaria automatizada.
- **Despliegue Continuo (CD):** Despliegue FTP automático hacia el servidor configurado mediante secretos de GitHub Actions, sujeto a la validación en la rama `main`.
