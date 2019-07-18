<html>
    <header> 
        <title>
            display students
        </title>
        <h1>
            display teachers from databasse
        </h1>
    <header>

    <body>
        <table>
            <thead>
                <th>No.</th>
                <th>Student Name</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>Course ID</th>
            </thead>

            <tbody>
                @for($i=1; $i<=DB::table('students')->count(); $i++)
                <tr>
                    <?php $result = DB::table('students')->where('student_id','=',$i)->get() ?>
                    <td>{{ $result[0]->student_id}}</td>
                    <td>{{ $result[0]->student_name}}</td>
                    <td>{{ $result[0]->gender}}</td>
                    <td>{{ $result[0]->contact}}</td>
                    <td>{{ $result[0]->course_id}}</td>

                </tr>
                @endfor
            </tbody>
        </table>
    </body>
</html>