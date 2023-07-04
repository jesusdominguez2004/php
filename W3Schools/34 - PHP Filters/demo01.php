<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>

    <?php 
        // The PHP Filter Extension
        foreach (filter_list() as $id => $filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter);
        }

        /*
            Los filtros son para:
            Validating data = Determine if the data is in proper form.
            Sanitizing data = Remove any illegal character from the data.
            filter_list() -> Returns a list of all supported filters.
            filter_id(string $filtername) -> Returns the filter ID belonging to a named filter.

            ¡Siempre debe validar los datos externos!
            ¡Los datos enviados no válidos pueden generar problemas de seguridad y romper su página web!
            ¡Al usar filtros PHP puede estar seguro de que su aplicación obtiene la entrada correcta!
        */
    ?>
</table>

</body>
</html>