
@extends('home')

@section('content')
    
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('trainor/create')}}" method="POST">
                <h1>Create new Instructor</h1>
                @csrf
                <div class="form-group">
                  <label for="user_id">Select Aspiring Instructor</label>
                  <select class="form-select" name="user_id" id="user_id">
                     <option hidden="true">Select</option>
                     <option selected disabled>Select</option>
                     @foreach ($users as $userId => $user)
                         <option value="{{$userId}}">{{$user}}</option>
                     @endforeach
                  </select>
                  @error('user_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="specialty">Specialty</label>
                    <input class="form-control" type="text" name="specialty">
                    @error('specialty')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add Instructor</button>
                  </div>
            </form>
        </div>
    </div>

    


@endsection