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
            </tr>
            @foreach ($product_tag as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->contagem }}</td>
            </tr>
            @endforeach

        </table>
</body>
</html>
