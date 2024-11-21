<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container">

    <form action="{{route('update',$post->id)}}" method="post">
        @csrf  @method('put')
        <label for="inputPassword5" class="form-label">Title</label>
        <input type="text" id="inputPassword5" name="title" value="{{$post->title}}" class="form-control" aria-describedby="passwordHelpBlock">
        @error('title')
            <p class="text-danger">{{ $message  }}</p>
        @enderror

        <label for="inputPassword5" class="form-label">Description</label>
        <textarea class="form-control" name="description">{{$post->description}}</textarea>
        @error('description')
        <p class="text-danger">{{ $message  }}</p>
        @enderror
        <button class="btn btn-primary">Save</button>
    </form>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
