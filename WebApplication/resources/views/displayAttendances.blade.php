<html>
    <header> 
        <title>
            display attendances
        </title>
        <h1>
            display attendances from databasse
        </h1>
    <header>

    <body>
        <table>
            <thead>
                <th>No.</th>
                <th>Attendances date</th>
                <th>Attendance Time</th>
                <th>Attendance Check</th>
                <th>student_id</th>
                <th>Teacher Id</th>
            </thead>

            <tbody>
                @for($i=1; $i<=DB::table('attendances')->count(); $i++)
                <tr>
                    <?php $result = DB::table('attendances')->where('student_id','=',$i)->get() ?>
                    <td>{{ $result[0]->attendance_id}}</td>
                    <td>{{ $result[0]->attendance_date}}</td>
                    <td>{{ $result[0]->attendance_time}}</td>
                    <td>{{ $result[0]->attendance_check}}</td>
                    <td>{{ $result[0]->student_id}}</td>
                    <td>{{ $result[0]->course_id}}</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </body>
</html>