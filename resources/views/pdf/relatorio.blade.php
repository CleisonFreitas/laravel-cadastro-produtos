<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório de Relevância</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
</head>
<body>
    <h2>Relatório de Relevância</h2>

        <table>
            <tr>
                <th>Tag</th>
                <th>Quantidade de Produtos vinculados</th>
                <th>Última atualização</th>
            </tr>
            @foreach ($product as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
            </tr>
            @endforeach
            <tr>
                <th>Total tags: </th>
                <th colspan="2">Total Produtos: </th>
            </tr>
        </table>
</body>
</html>
