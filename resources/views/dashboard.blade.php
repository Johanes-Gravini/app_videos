<x-app-layout>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #1a3b5d;
            margin-bottom: 30px;
        }

        .btn-create {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            display: block;
            margin: 0 auto 20px;
        }

        .btn-create:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #1a3b5d;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f8f8f8;
        }

        tr:hover {
            background-color: #e8f4ff;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .btn-edit {
            background-color: #FFC107;
            color: #000;
            margin-right: 5px;
        }

        .btn-edit:hover {
            background-color: #FFB300;
        }

        .btn-delete {
            background-color: #F44336;
            color: white;
        }

        .btn-delete:hover {
            background-color: #D32F2F;
        }

        .link {
            color: #1E88E5;
            text-decoration: none;
            transition: color 0.3s;
        }

        .link:hover {
            color: #1565C0;
            text-decoration: underline;
        }
    </style>
    </head>


    <body>
        <div class="container">
            <h1>Gestión de Elementos</h1>

            <h1>Super Usuario</h1>
            <a href="{{ route('videos.create') }}" class="btn-create">Crear Nuevo Elemento</a>

            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Autor</th>
                        <th>Link</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
            
                        @foreach ($videos as $v)
                        <tr>

                            <td>{{$v->nombre}}</td>
                            <td>{{$v->des}}</td>
                            <td>{{$v->autor}}</td>
                            <td><a href="{{$v->link}}" class="link">{{$v->link}}</a></td>
                            <td>
                            <a href="{{ route('videos.edit',$v->id) }}" class="btn-create">Editar</a>
                    
                            <form action="{{ route('videos.destroy',$v->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-delete">Borrar</button>
                           </form>
                            </td>
                        </tr>
                
                        @endforeach
         

                </tbody>
            </table>
        </div>
    </body>


</x-app-layout>