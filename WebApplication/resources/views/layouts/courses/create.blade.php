@extends('layouts.app');

@section('content')
    <div class='panel panel-default'>
        <div class='panel-heading'>
            Course
        </div>

        <div class='panel-body'>
            <form action="{{ route('course.store') }}" method='post'>
                {{ csrf_field() }}

                <div class='form-group'>
                    <label for="name">Name</label>
                    <input type="text" name='course_name' class='form-control'>
                </div>


                <div class='form-group'>
                    <div class='text-center'>
                        <button class='btn btn-success' type='submit'>
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop