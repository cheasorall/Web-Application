@extends('layouts.app');

@section('content')

    <div class='panel panel-default'>
        <div class='panel-body'>
            <table class='table table-hover'>
                <thead>
                    <th>
                        Course Name
                    </th>

                    <th>
                        Editing
                    </th>

                    <th>
                        Deleting
                    </th>
                </thead>

                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>
                                {{ $course->course_name }}
                            </td>
                            <td>
                                <a href="{{ route('course.edit', ['id' => $course->course_id]) }}">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('course.delete', ['id' => $course->course_id] )}}">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    


@stop