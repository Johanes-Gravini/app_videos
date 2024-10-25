<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Elemento</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        h1 {
            text-align: center;
            color: #1a3b5d;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #1a3b5d;
        }
        input[type="text"],
        input[type="url"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="url"]:focus,
        textarea:focus {
            outline: none;
            border-color: #4CAF50;
            box-shadow: 0 0 0 2px rgba(76, 175, 80, 0.2);
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        .btn-submit {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s;
        }
        .btn-submit:hover {
            background-color: #45a049;
        }
        .btn-cancel {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 10px;
            transition: background-color 0.3s;
        }
        .btn-cancel:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear Nuevo Elemento</h1>
        <form action="{{ route('videos.update', $video->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $video->nombre }}" required>
    </div>
    <div class="form-group">
        <label for="des">Descripción:</label>
        <textarea id="des" name="des" required>{{ $video->des }}</textarea>
    </div>
    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" value="{{ $video->autor }}" required>
    </div>
    <div class="form-group">
        <label for="link">Link:</label>
        <input type="url" id="link" name="link" value="{{ $video->link }}" required>
    </div>
    <button type="submit" class="btn-submit">Actualizar Elemento</button>
    <button type="button" class="btn-cancel">Cancelar</button>
</form>
    </div>
</body>
</html>