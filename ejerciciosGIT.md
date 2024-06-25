#### Caso 1
- Ubicarse en la rama dev: `git checkout DEV`
- Revertir el último commit realizado: `git revert HEAD`
- En el editor de texto modficar el mensaje del commit si lo desea, guardar y luego cierra el editor.
- Subir la reversión al repositorio remoto: `git push origin DEV`.


#### Caso 2
- Ubicarse en la rama master: `git checkout MASTER`
- Traerse los últimos cambios: `git pull origin MASTER`
- Asignar la etiqueta de la nueva versión: `git tag v1.2.0`
- Subir la etiqueta al repositorio remoto: `git push origin v1.2.0`
- Fusionar la rama DEV con la rama MASTER: `git push origin MASTER`
- Resolver conflictos en caso de haberlos.
- Subir los cambios fusionados al repositorio remoto: `git push origin MASTER`