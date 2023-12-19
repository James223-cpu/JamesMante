@extends('home')

@section('content')

    <div class="table">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Program ID</th>
                <th>Instructor Name</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($course as $cor): ?>

                <tr>
                    <td>{{$cor->id}}</td>
                    <td>{{$cor->trainor->user->full_name}}</td>
                    <td>{{$cor->title}}</td>
                    <td>{{$cor->description}}</td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>
    @endsection
</body>
</html>