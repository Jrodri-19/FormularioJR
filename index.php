<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie-edge">
    <title>Formulario a curriculum vitae</title>
    <link rel="stylesheet" href="style.css">
</head>
<body bgcolor=#d1dedc>
        <form action="proceso.php" method="POST">
            <h1>Formulario a Curriculum Vitae</h1>
            <fieldset>
                <h2>Datos</h2>
                <div class="int-group">
                <label for="name">Nombre: </label>
                <input type="text" name="Nombre" id="name" placeholder="Escriba su nombre" required><br>
                <label for="apellido">Apellidos: </label>
                <input type="text" name="Apellido" id="apellido" placeholder="Escriba sus apellidos" required><br>
                <label for="nacimiento">Fecha de nacimiento: </label>
                <input type="date" name="Nacimiento" id =nacimiento required><br>
                <label for="ocupacion">Ocupación: </label>
                <input type="text" name=" Ocupacion" id="ocupacion" placeholder="Escriba su ocupación" required>
            </fieldset>
            <fieldset>
                <h2>Contactos</h2>
                <label for="phone">Telefono: </label>
                <input type="tel" name="Celular" id="celular" placeholder="Numero de teléfono" required><br>
                <label for="gmail" >Correo electronico: </label>
                <input type="email" name="Email" id="email" placeholder="ejemplo@gmail.com" required>
            </fieldset>
            <fieldset>
                <h2>Información de procedencia</h2>
                <label for="Nacionalidad">Nacionalidad: </label>
                <select name="Nacionalidad" id="nacionalidad" required>
                    <option value="Perú">Perú</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Chile">Chile</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="EEUU">EEUU</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Otro pais">Otro</option>
                </select>
            </fieldset> 
            <fieldset>
                <h2>Idiomas</h2>   
                <label for="level">Nivel de ingles: </label><br><br>
                <input type="radio" id="Básico" name="Nivel_de_ingles" value="Básico" >
                <label for="Básico">Básico</label><br>
                <input type="radio" id="Intermedio" name="Nivel_de_ingles" value="Intermedio">
                <label for="Intermedio">Intermedio</label> <br>
                <input type="radio" id="Avanzado" name="Nivel_de_ingles" value="Avanzado">
                <label for="Avanzado">Avanzado</label>
            </fieldset>
            <fieldset>
                <label for="Lenguaje"><h2>Lenguajes de Programación</h2></label>
                <select  id="multiple-checkboxes" multiple="multiple"  >
                    <option value="C">C</option>
                    <option value="C++">C++</option>
                    <option value="Go">Go</option>
                    <option value="java">Java</option>
                    <option value="javascript">JavaScript</option>
                    <option value="jquery">Jquery</option>
                    <option value="PHP">PHP</option>
                    <option value="python">Python</option>
                    <option value="R">R</option>
                    <option value="SQL">SQL</option>
                    <option value="Swift">Swift</option>
                    <option value=".net">.Net</option>
                </select>
            </fieldset>
            <fieldset>
                <label for="aptitud"><h2>Aptitudes</h2></label>
                <input list="browsers" name="Aptitud" id="aptitud" placeholder="Aptitudes">
                <datalist id="browsers">
                    <option value="Adaptabilidad"> 
                    <option value="Multitasking">
                    <option value="Innovación">
                    <option value="Proactividad">
                    <option value="Productividad">
                </datalist>
            </fieldset>
            <fieldset>
                <label for="habilidades"><h2>Habilidades</h2></label><br>
                <input type="checkbox" id="vehicle1" name="habilidades[]" value="habilidades">
                <label for="habilidad1"> Creatividad.</label><br>
                <input type="checkbox" id="vehicle2" name="habilidades[]" value="habilidades">
                <label for="habilidad2">Colaboración. </label><br>
                <input type="checkbox" id="vehicle3" name="habilidades[]" value="habilidades">
                <label for="habilidad3"> Iniciativa.</label><br>
                <input type="checkbox" id="vehicle4" name="habilidades[]" value="habilidades">
                <label for="habilidad4"> Razonamiento analítico.</label><br>
            </fieldset>
            <fieldset>
                <label for="perfil"><h2>Perfil</h2></label>
                <textarea name="perfil" placeholder="Describe tu perfil"></textarea>
            </fieldset>
                <input class="btn" type="submit" value="Generar CV"> 
            </div>
        </form>
    </body>
</html>
