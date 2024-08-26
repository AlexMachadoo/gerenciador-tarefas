<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tarefas</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
        }

        table {
            width: 90%;
            height: auto;
            font-size: 18px;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Tarefas</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Data de Criação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</td>
                    <td>{{ $tarefa->nome }}</td>
                    <td>{{ $tarefa->descricao }}</td>
                    <td>{{ $tarefa->status }}</td>
                    <td>{{ $tarefa->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>